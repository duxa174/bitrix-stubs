<?php

namespace Bitrix\Translate\Controller\Asset;

/**
 * Harvester of the lang folder disposition.
 */
class Extract extends \Bitrix\Translate\Controller\Action implements \Bitrix\Translate\Controller\IProcessParameters
{
    use \Bitrix\Translate\Controller\ProcessParams;
    /** @var string */
    private $archiveFilePath;
    /** @var string */
    private $archiveFileType;
    /** @var Translate\IO\Archiver */
    private $archiveFile;
    /** @var string */
    private $tmpFolderPath;
    /** @var Translate\IO\Directory */
    private $tmpFolder;
    /** @var int */
    private $totalFileCount;
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
     * @return array
     */
    public function run()
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