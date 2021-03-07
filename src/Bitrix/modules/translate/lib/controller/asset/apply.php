<?php

namespace Bitrix\Translate\Controller\Asset;

/**
 * Harvester of the lang folder disposition.
 */
class Apply extends \Bitrix\Translate\Controller\Action implements \Bitrix\Translate\Controller\ITimeLimit, \Bitrix\Translate\Controller\IProcessParameters
{
    use \Bitrix\Translate\Controller\Stepper;
    use \Bitrix\Translate\Controller\ProcessParams;
    /** @var string */
    private $languageId;
    /** @var bool */
    private $convertEncoding;
    /** @var string */
    private $encoding;
    /** @var string */
    private $encodingIn;
    /** @var string */
    private $encodingOut;
    /** @var string */
    private $tmpFolderPath;
    /** @var string */
    private $targetFolderPath;
    /** @var string */
    private $sourceFolderPath;
    /** @var int */
    private $totalFileCount;
    /** @var boolean */
    public static $useTranslationRepository;
    /** @var string[] */
    public static $enabledLanguages;
    /** @var string[] */
    public static $allowedEncodings;
    /** @var string */
    public static $translationRepositoryRoot;
    /** @var string */
    private $seekPath;
    /** @var string[] */
    private $seekAncestors;
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
     * Copying lang files.
     *
     * @return array
     */
    private function runApplying()
    {
    }
    /**
     * Runs through tmp folder and copy files into lang folders.
     *
     * @param string $tmpFolderFullPath Full path of the temp folder to look through.
     *
     * @return \Generator|array
     */
    private function lookThroughTmpFolder($tmpFolderFullPath)
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