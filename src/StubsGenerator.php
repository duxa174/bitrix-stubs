<?php namespace duxa174;

use Error;
use PhpParser\NodeTraverser;
use PhpParser\NodeVisitor\NameResolver;
use PhpParser\ParserFactory;
use RuntimeException;
use StubsGenerator\NodeVisitor;
use StubsGenerator\Result;
use Symfony\Component\Finder\SplFileInfo;

class StubsGenerator extends \StubsGenerator\StubsGenerator
{
    /** @var int */
    private $symbols;
    /** @var array */
    private $config;

    /**
     * @param int $symbols Bitmask of symbol types to include in the stubs.
     * @param array $config
     */
    public function __construct(int $symbols = self::DEFAULT, array $config = [])
    {
        parent::__construct($symbols, $config);

        $this->symbols = $symbols;
        $this->config = $config;
    }

    public function generateFromFile(SplFileInfo $file): Result
    {
        $parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);

        $traverser = new NodeTraverser();

        $visitor = new NodeVisitor($this->symbols, $this->config);
        $traverser->addVisitor(new NameResolver());
        $traverser->addVisitor($visitor);

        $unparsed = [];
        $stmts = null;
        try {
            $stmts = $parser->parse($file->getContents());
        } catch (Error | RuntimeException $e) {
            $unparsed[$file->getPathname()] = $e;
        }

        if ($stmts) {
            $traverser->traverse($stmts);
        }

        return new Result($visitor, $unparsed);
    }
}
