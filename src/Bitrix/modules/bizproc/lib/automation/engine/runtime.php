<?php

namespace Bitrix\Bizproc\Automation\Engine;

class Runtime
{
    protected $target;
    protected static $startedTemplates = [];
    public function setTarget(\Bitrix\Bizproc\Automation\Target\BaseTarget $target)
    {
    }
    /**
     * @return BaseTarget
     * @throws InvalidOperationException
     */
    public function getTarget()
    {
    }
    protected function getWorkflowInstanceIds()
    {
    }
    protected function runTemplates($documentStatus)
    {
    }
    protected function writeTriggerTracking($workflowId, $trigger)
    {
    }
    protected function stopTemplates()
    {
    }
    /**
     * Document creation handler.
     * @throws InvalidOperationException
     * @return void
     */
    public function onDocumentAdd()
    {
    }
    /**
     * Document status changed handler.
     * @throws InvalidOperationException
     * @return void
     */
    public function onDocumentStatusChanged()
    {
    }
    /**
     * Document moving handler.
     * @return void
     */
    public function onDocumentMove()
    {
    }
    private function setStarted($documentType, $documentId, $status)
    {
    }
    private function isStarted($documentType, $documentId, $status)
    {
    }
    private function writeAnalytics($documentComplexId, $documentStatus, $trigger)
    {
    }
}