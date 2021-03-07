<?php

namespace Bitrix\Main\Cli;

/**
 * @package    bitrix
 * @subpackage main
 */
class OrmAnnotateCommand extends \Symfony\Component\Console\Command\Command
{
    use \Bitrix\Main\ORM\Annotations\AnnotationTrait;
    protected $debug = 0;
    protected $modulesScanned = [];
    protected $filesIncluded = 0;
    /** @var array Filled by handleClasses() */
    protected $entitiesFound = [];
    protected $excludedFiles = ['main/lib/text/string.php', 'main/lib/composite/compatibility/aliases.php', 'sale/lib/delivery/extra_services/string.php'];
    const ANNOTATION_MARKER = 'ORMENTITYANNOTATION';
    protected function configure()
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
    protected function getDirsToScan($inputModules, \Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
    protected function registerFallbackAutoload()
    {
    }
    protected function scanDir($dir, \Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
    protected function handleClasses($classes, \Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
    protected function getDeclaredClassesDiff()
    {
    }
    /**
     * Builds annotation for classes outside regular filesystem (e.g. iblock, hlblock)
     *
     * @param array           $inputModules
     * @param InputInterface  $input
     * @param OutputInterface $output
     */
    protected function handleVirtualClasses($inputModules, \Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
    /**
     * @deprecated
     *
     * @param $field
     *
     * @return string
     */
    public static function scalarFieldToTypeHint($field)
    {
    }
    protected function debug(\Symfony\Component\Console\Output\OutputInterface $output, $message)
    {
    }
}