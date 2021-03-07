<?php

namespace Bitrix\Bizproc\Service;

class Analytics extends \CBPRuntimeService
{
    private $logFile;
    public function start(\CBPRuntime $runtime = null)
    {
    }
    /**
     * @return bool
     */
    public function isEnabled()
    {
    }
    public function write(array $documentId, $action, $tag)
    {
    }
    private function prepareFileContent(...$params)
    {
    }
    private function writeToFile($content)
    {
    }
}