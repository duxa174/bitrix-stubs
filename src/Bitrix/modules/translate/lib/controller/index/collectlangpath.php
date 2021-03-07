<?php

namespace Bitrix\Translate\Controller\Index;

/**
 * Harvester of the lang folder disposition.
 */
class CollectLangPath extends \Bitrix\Translate\Controller\Action implements \Bitrix\Translate\Controller\ITimeLimit, \Bitrix\Translate\Controller\IProcessParameters
{
    use \Bitrix\Translate\Controller\Stepper;
    use \Bitrix\Translate\Controller\ProcessParams;
    /** @var string */
    private $seekPath;
    /** @var int */
    private $seekOffset;
    /** @var string[] */
    private $pathList;
    /** @var string[] */
    private $languages;
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
     * @param string $path Path to indexing.
     * @param boolean $runBefore Flag to run onBeforeRun event handler.
     * @return array
     */
    public function run($path = '', $runBefore = false)
    {
    }
    /**
     * Collects lang folder paths.
     *
     * @return array
     */
    private function runIndexing()
    {
    }
}