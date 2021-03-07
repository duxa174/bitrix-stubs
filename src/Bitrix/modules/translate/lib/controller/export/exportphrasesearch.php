<?php

namespace Bitrix\Translate\Controller\Export;

/**
 * Harvester of phrases using search result with index.
 */
class ExportPhraseSearch extends \Bitrix\Translate\Controller\Export\ExportAction implements \Bitrix\Translate\Controller\ITimeLimit, \Bitrix\Translate\Controller\IProcessParameters
{
    use \Bitrix\Translate\Controller\Stepper;
    use \Bitrix\Translate\Controller\ProcessParams;
    /** @var string */
    private $pathList;
    /** @var int */
    private $seekPathId;
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
     * @param string $path Path to export.
     * @param boolean $runBefore Flag to run onBeforeRun event handler.
     *
     * @return array
     */
    public function run($path = '', $runBefore = false)
    {
    }
    /**
     * Collects lang files paths.
     *
     * @param array $params Path to indexing.
     *
     * @return array
     */
    private function runExporting(array $params)
    {
    }
    /**
     * Process incoming filter from client.
     *
     * @param string $path Path to export.
     *
     * @return array
     */
    private function processFilter($path)
    {
    }
}