<?php

namespace Bitrix\Bizproc\Automation\Target;

abstract class BaseTarget
{
    protected $runtime;
    protected $appliedTrigger;
    protected $documentId;
    protected $documentType;
    public function isAvailable()
    {
    }
    /**
     * Set applied trigger data.
     * @param array $trigger
     * @return $this
     */
    public function setAppliedTrigger(array $trigger)
    {
    }
    /**
     * Returns applied trigger data.
     * @return array|null
     */
    public function getAppliedTrigger()
    {
    }
    /**
     * @return \Bitrix\Bizproc\Automation\Engine\Runtime
     */
    public function getRuntime()
    {
    }
    public abstract function getDocumentStatus();
    public abstract function setDocumentStatus($statusId);
    public abstract function getDocumentStatusList($categoryId = 0);
    public function getTriggers(array $statuses)
    {
    }
    public function prepareTriggersToSave(array &$triggers)
    {
    }
    public function prepareTriggersToShow(array &$triggers)
    {
    }
    public function setTriggers(array $triggers)
    {
    }
    private function prepareApplyRules($rules, $external = false) : ?array
    {
    }
    public function getAvailableTriggers()
    {
    }
    public function setDocumentType(array $documentType)
    {
    }
    public function getDocumentType()
    {
    }
    public function getDocumentId()
    {
    }
    public function setDocumentId($documentId)
    {
    }
}