<?php

namespace Bitrix\Translate\Controller\Asset;

/**
 * Harvester of the lang folder disposition.
 */
class ApplyPublic extends \Bitrix\Translate\Controller\Action implements \Bitrix\Translate\Controller\ITimeLimit, \Bitrix\Translate\Controller\IProcessParameters
{
    use \Bitrix\Translate\Controller\Stepper;
    use \Bitrix\Translate\Controller\ProcessParams;
    /** @var string */
    private $languageId;
    /** @var string */
    private $tmpFolderPath;
    /** @var string */
    private $sourceFolderPath;
    /** @var int */
    private $totalFileCount;
    /** @var string */
    public static $documentRoot;
    /** @var boolean */
    public static $useTranslationRepository;
    /** @var string[] */
    public static $enabledLanguages;
    /** @var string */
    public static $translationRepositoryRoot;
    /** @var string */
    private $seekPath;
    /** @var string */
    private $seekModule;
    /** @var string */
    private $seekType;
    /** @var string[] */
    private $seekAncestors;
    const TARGET_FOLDERS = array('component' => '#BX_ROOT#/components/bitrix', 'activities' => '#BX_ROOT#/activities/bitrix', 'gadgets' => '#BX_ROOT#/gadgets/bitrix', 'wizards' => '#BX_ROOT#/wizards/bitrix', 'blocks' => '#BX_ROOT#/blocks/bitrix', 'template' => '#BX_ROOT#/templates', 'mobileapp' => '#BX_ROOT#/mobileapp', 'js' => '#BX_ROOT#/js');
    const SOURCE_FOLDERS = array('component' => '/install/components/bitrix', 'activities' => '/install/activities/bitrix', 'gadgets' => '/install/gadgets/bitrix', 'wizards' => '/install/wizards/bitrix', 'blocks' => '/install/blocks/bitrix', 'template' => '/install/templates', 'mobileapp' => '/install/mobileapp', 'js' => '/install/js');
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