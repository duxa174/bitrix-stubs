<?php

namespace Bitrix\Translate\Controller\Export;

/**
 * Harvester of phrases the single file.
 */
class ExportFile extends \Bitrix\Translate\Controller\Export\ExportAction
{
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
}