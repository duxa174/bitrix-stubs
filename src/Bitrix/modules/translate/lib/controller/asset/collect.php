<?php

namespace Bitrix\Translate\Controller\Asset;

/**
 * Harvester of the lang folder disposition.
 */
class Collect extends \Bitrix\Translate\Controller\Action implements \Bitrix\Translate\Controller\ITimeLimit, \Bitrix\Translate\Controller\IProcessParameters
{
    use \Bitrix\Translate\Controller\Stepper;
    use \Bitrix\Translate\Controller\ProcessParams;
    /** @var string */
    private $seekPathLangId;
    /** @var string */
    private $languageId;
    /** @var bool */
    private $convertEncoding;
    /** @var string */
    private $encoding;
    /** @var string */
    private $assemblyDate;
    /** @var bool */
    private $packFile;
    /** @var string */
    private $tmpFolderPath;
    /** @var int */
    private $totalFileCount;
    /** @var string */
    public static $documentRoot;
    /** @var boolean */
    public static $useTranslationRepository;
    /** @var string[] */
    public static $enabledLanguages;
    /** @var string[] */
    public static $allowedEncodings;
    /** @var string[] */
    public static $translationRepositoryLanguages;
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
     * @param string $path Stating path.
     * @param boolean $runBefore Flag to run onBeforeRun event handler.
     * @return array
     */
    public function run($path = '', $runBefore = false)
    {
    }
    /**
     * Copying lang files.
     *
     * @param array $params Parameters.
     * @return array
     */
    private function runCollecting(array $params = [])
    {
    }
    /**
     * Runs through lang folder and collects full path to lang files.
     *
     * @param string $langFolderRelPath Relative project path of the language folder.
     *
     * @return \Generator|array
     */
    private function lookThroughLangFolder($langFolderRelPath)
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