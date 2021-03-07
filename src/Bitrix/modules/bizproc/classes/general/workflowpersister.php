<?php

/**
* Workflow persistence service.
*/
class CBPAllWorkflowPersister
{
    const LOCK_BY_TIME = \false;
    protected $serviceInstanceId = "";
    protected $ownershipDelta = 300;
    protected $useGZipCompression = \false;
    private static $instance;
    public function __clone()
    {
    }
    private function __construct()
    {
    }
    /**
     * @return self
     */
    public static function GetPersister()
    {
    }
    protected function RetrieveWorkflow($instanceId, $silent = \false)
    {
    }
    protected function InsertWorkflow($id, $buffer, $status, $bUnlocked, array $creationData = [])
    {
    }
    protected function GetOwnershipTimeout()
    {
    }
    public function LoadWorkflow($instanceId, $silent = \false)
    {
    }
    private function RestoreFromSerializedForm($buffer)
    {
    }
    public static function __InsertWorkflowHack($id, $buffer)
    {
    }
    public function SaveWorkflow(\CBPActivity $rootActivity, $bUnlocked)
    {
    }
    private function GetSerializedForm(\CBPActivity $rootActivity)
    {
    }
    public function UnlockWorkflow(\CBPActivity $rootActivity)
    {
    }
    protected function getLockerQueryCondition()
    {
    }
}
//Compatibility
class CBPWorkflowPersister extends \CBPAllWorkflowPersister
{
}