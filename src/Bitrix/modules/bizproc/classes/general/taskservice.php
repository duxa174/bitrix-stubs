<?php

class CBPAllTaskService extends \CBPRuntimeService
{
    const COUNTERS_CACHE_TAG_PREFIX = 'b_bp_tasks_cnt_';
    public function DeleteTask($id)
    {
    }
    public function DeleteAllWorkflowTasks($workflowId)
    {
    }
    public function MarkCompleted($taskId, $userId, $status = \CBPTaskUserStatus::Ok)
    {
    }
    public static function getTaskUsers($taskId)
    {
    }
    public static function getTaskUserIds(int $taskId) : array
    {
    }
    /**
     * @param string $workflowId - Internal workflow id.
     * @param null|int $userStatus - Filter participants by status.
     * @return array - User ids array (ex. array(1, 2, 3)).
     * @throws Exception
     */
    public static function getWorkflowParticipants($workflowId, $userStatus = \null)
    {
    }
    public static function delegateTask($taskId, $fromUserId, $toUserId)
    {
    }
    public static function getOriginalTaskUserId($taskId, $realUserId)
    {
    }
    public static function Delete($id)
    {
    }
    public static function DeleteByWorkflow($workflowId, $taskStatus = \null)
    {
    }
    public static function getCounters($userId)
    {
    }
    protected static function onTaskChange($taskId, $taskData, $status)
    {
    }
    protected static function cleanCountersCache($users)
    {
    }
    protected static function ParseFields(&$arFields, $id = 0)
    {
    }
    public static function OnAdminInformerInsertItems()
    {
    }
    public function CreateTask($arFields)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($id, $arFields)
    {
    }
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
}
class CBPTaskResult extends \CDBResult
{
    public function __construct($res)
    {
    }
    function Fetch()
    {
    }
    function GetNext($bTextHtmlAuto = \true, $use_tilda = \true)
    {
    }
    function ConvertBBCode($text)
    {
    }
    function ConvertBCodeImageTag($url = "")
    {
    }
    function ConvertBCodeAnchorTag($url, $text = '')
    {
    }
}
//Compatibility
class CBPTaskService extends \CBPAllTaskService
{
}