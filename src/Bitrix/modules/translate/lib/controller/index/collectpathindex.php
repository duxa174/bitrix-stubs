<?php

namespace Bitrix\Translate\Controller\Index;

/**
 * Harvester of the lang files disposition.
 */
class CollectPathIndex extends \Bitrix\Translate\Controller\Action implements \Bitrix\Translate\Controller\ITimeLimit, \Bitrix\Translate\Controller\IProcessParameters
{
    use \Bitrix\Translate\Controller\Stepper;
    use \Bitrix\Translate\Controller\ProcessParams;
    /** @var int */
    private $seekPathLangId;
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
     * @return array
     */
    public function run($path = '')
    {
    }
    /**
     * Collects lang files paths.
     *
     * @param array $params Path to indexing.
     *
     * @return array
     */
    private function runIndexing(array $params)
    {
    }
}