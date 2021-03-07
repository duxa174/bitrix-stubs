<?php

namespace Bitrix\Translate\Controller\Editor;

/**
 * Remove phrases by the ethalon language file.
 */
class CleanEthalon extends \Bitrix\Translate\Controller\Editor\Operation implements \Bitrix\Translate\Controller\ITimeLimit, \Bitrix\Translate\Controller\IProcessParameters
{
    use \Bitrix\Translate\Controller\Stepper;
    use \Bitrix\Translate\Controller\ProcessParams;
    const SETTING_ID = 'TRANSLATE_CLEAN';
    /** @var string[] */
    private $pathList;
    /** @var int */
    private $seekOffset;
    /** @var string */
    private $seekLangPath;
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
    private function runClearing()
    {
    }
    /**
     * Performs changed lang file.
     *
     * @param string $relLangPath Relative path to lang file.
     *
     * @return void
     */
    private function cleanLangFile($relLangPath)
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