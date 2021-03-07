<?php

require __DIR__ . '/vendor/autoload.php';

use duxa174\StubsGenerator;
use PhpParser\ParserFactory;
use StubsGenerator\Finder;

set_time_limit(0);

const PATH_INPUT  = './input/';
const PATH_OUTPUT = './output/';


$oGenerator = new StubsGenerator();

$oFinder = Finder::create()
    ->in(PATH_INPUT)
    ->ignoreVCS(true)
    ->name('*.php');

$oParser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);

$oIterator = $oFinder->getIterator();
$oIterator->rewind();

while ($oIterator->valid()) {
    $oFile = $oIterator->current();
    $oResult = $oGenerator->generateFromFile($oFile);

    $sPath = PATH_OUTPUT.$oFile->getRelativePathname();
    $sDir = dirname($sPath);

    if (!file_exists($sDir)) {
        if (!mkdir($sDir, 0755, true) && !is_dir($sDir)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $sDir));
        }
    }

    if (false === file_put_contents($sPath, $oResult->prettyPrint())) {
        throw new \RuntimeException(sprintf('Failed to save file "%s"', $sPath));
    }

    $oIterator->next();
}

print('Done');
