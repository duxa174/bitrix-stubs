<?php

class BizprocWorkflowInstances extends \CBitrixComponent
{
    const GRID_ID = 'bizproc_instances';
    protected $lockedTime;
    protected $isAdmin;
    protected $gridOptions;
    protected static $fields = array('ID' => 'ID', 'MODIFIED' => 'MODIFIED', 'OWNER_ID' => 'OWNER_ID', 'OWNED_UNTIL' => 'OWNED_UNTIL', 'WS_MODULE_ID' => 'MODULE_ID', 'WS_ENTITY' => 'ENTITY', 'WS_DOCUMENT_ID' => 'DOCUMENT_ID', 'WS_STARTED' => 'STARTED', 'WS_STARTED_BY' => 'STARTED_BY', 'WS_WORKFLOW_TEMPLATE_ID' => 'WORKFLOW_TEMPLATE_ID', 'WS_STARTED_USER_NAME' => 'STARTED_USER.NAME', 'WS_STARTED_USER_LAST_NAME' => 'STARTED_USER.LAST_NAME', 'WS_STARTED_USER_LOGIN' => 'STARTED_USER.LOGIN');
    protected static $moduleNames = array();
    protected function isAdmin()
    {
    }
    public function onPrepareComponentParams($params)
    {
    }
    protected function getFieldName($name)
    {
    }
    protected function getGridHeaders()
    {
    }
    protected function getFilter()
    {
    }
    protected function getFilterPresets()
    {
    }
    protected function getDocumentTypes()
    {
    }
    protected function setPageTitle($title)
    {
    }
    protected function getGridOptions()
    {
    }
    protected function mergeFilters(array $filter, array $gridFilter)
    {
    }
    protected function getSorting($useAliases = \false)
    {
    }
    protected function getPaginationInfo()
    {
    }
    protected function getLockedTime()
    {
    }
    protected function getLockedCount()
    {
    }
    public function executeComponent()
    {
    }
    public static function getModuleName($moduleId, $entity = \null)
    {
    }
}