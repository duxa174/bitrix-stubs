<?php

namespace Bitrix\Translate\Controller\Import;

/**
 * Harvester of the lang folder disposition.
 */
class ImportCsv extends \Bitrix\Translate\Controller\Action implements \Bitrix\Translate\Controller\ITimeLimit, \Bitrix\Translate\Controller\IProcessParameters
{
    use \Bitrix\Translate\Controller\Stepper;
    use \Bitrix\Translate\Controller\ProcessParams;
    /** @var int */
    private $seekLine;
    /** @var string */
    protected static $documentRoot;
    /** @var string[] */
    protected static $enabledLanguages;
    /** @var string[] */
    protected static $sourceEncoding;
    /** @var boolean */
    protected static $isUtfMode;
    /** @var int Session tab counter. */
    private $tabId = 0;
    /** @var string */
    private $encodingIn;
    /** @var string */
    private $updateMethod;
    /** @var string */
    private $csvFilePath;
    /** @var Translate\IO\CsvFile */
    private $csvFile;
    /** @var string[] */
    private $languageList;
    /** @var string[] */
    private $columnList;
    /** @var int */
    private $importedPhraseCount = 0;
    /**
     * \Bitrix\Main\Engine\Action constructor.
     *
     * @param string $name Action name.
     * @param Main\Engine\Controller $controller Parent controller object.
     * @param array $config Additional configuration.
     */
    public function __construct($name, \Bitrix\Main\Engine\Controller $controller, $config = array())
    {
    }
    /**
     * Runs controller action.
     *
     * @param boolean $runBefore Flag to run onBeforeRun event handler.
     *
     * @return array
     */
    public function run($runBefore = false)
    {
    }
    /**
     * Imports data from csv file.
     *
     * @return array
     */
    private function runImporting()
    {
    }
    /**
     * Validates uploaded csv file.
     *
     * @return boolean
     */
    private function verifyCsvFile()
    {
    }
}