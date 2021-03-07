<?php

namespace Bitrix\Translate\Controller\Asset;

/**
 * Harvester of the lang folder disposition.
 */
class Pack extends \Bitrix\Translate\Controller\Action implements \Bitrix\Translate\Controller\ITimeLimit, \Bitrix\Translate\Controller\IProcessParameters
{
    use \Bitrix\Translate\Controller\Stepper;
    use \Bitrix\Translate\Controller\ProcessParams;
    /** @var string */
    public static $documentRoot;
    /** @var string */
    private $seekPath;
    /** @var string */
    private $languageId;
    /** @var bool */
    private $packFile;
    /** @var int */
    private $totalFileCount;
    /** @var string */
    private $tmpFolderPath;
    /** @var string */
    private $archiveFilePath;
    /** @var string */
    private $archiveFileName;
    /** @var Translate\IO\Archiver */
    private $archiveFile;
    /** @var array */
    private $downloadParams;
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
     * @return array
     */
    public function run($runBefore = false)
    {
    }
    /**
     * @return array
     */
    private function runPacking()
    {
    }
    /**
     * Generate link to download local exported temporally file.
     *
     *
     * @return string
     */
    private function generateDownloadLink()
    {
    }
    /**
     * Generate name for exporting file.
     *
     * @return string
     */
    private function generateExportFileName()
    {
    }
    /**
     * Returns exported file properties.
     *
     * @return array
     */
    private function getDownloadingParameters()
    {
    }
    /**
     * Returns progress option name
     *
     * @return string
     */
    public function getProgressParameterOptionName()
    {
    }
}