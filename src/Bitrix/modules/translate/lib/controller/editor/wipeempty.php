<?php

namespace Bitrix\Translate\Controller\Editor;

/**
 * Wipe empty parent folders.
 */
class WipeEmpty extends \Bitrix\Translate\Controller\Editor\Operation implements \Bitrix\Translate\Controller\ITimeLimit, \Bitrix\Translate\Controller\IProcessParameters
{
    use \Bitrix\Translate\Controller\Stepper;
    use \Bitrix\Translate\Controller\ProcessParams;
    const SETTING_ID = 'WIPE_EMPTY';
    /** @var string[] */
    private $pathList;
    /** @var int */
    private $seekOffset;
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
     * @param string[] $pathList Path list to update.
     *
     * @return array
     */
    public function run($pathList)
    {
    }
    /**
     * Collects lang folder paths.
     *
     * @return array
     */
    private function runWiping()
    {
    }
    /**
     * Performs wiping empty lang folders.
     *
     * @param string $langFullPath Full path to lang file.
     *
     * @return bool
     */
    private function removeEmptyParents($langFullPath)
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