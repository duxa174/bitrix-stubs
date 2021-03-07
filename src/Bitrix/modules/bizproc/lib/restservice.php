<?php

namespace Bitrix\Bizproc;

class RestService extends \IRestService
{
    public const SCOPE = 'bizproc';
    public const PLACEMENT_ACTIVITY_PROPERTIES_DIALOG = 'BIZPROC_ACTIVITY_PROPERTIES_DIALOG';
    protected static $app;
    private static $allowedOperations = array('', '!', '<', '<=', '>', '>=');
    //, '><', '!><', '?', '=', '!=', '%', '!%', ''); May be later?
    const ERROR_UNSUPPORTED_PROTOCOL = 'ERROR_UNSUPPORTED_PROTOCOL';
    const ERROR_WRONG_HANDLER_URL = 'ERROR_WRONG_HANDLER_URL';
    const ERROR_HANDLER_URL_MATCH = 'ERROR_HANDLER_URL_MATCH';
    const ERROR_ACTIVITY_ALREADY_INSTALLED = 'ERROR_ACTIVITY_ALREADY_INSTALLED';
    const ERROR_ACTIVITY_ADD_FAILURE = 'ERROR_ACTIVITY_ADD_FAILURE';
    const ERROR_ACTIVITY_VALIDATION_FAILURE = 'ERROR_ACTIVITY_VALIDATION_FAILURE';
    const ERROR_ACTIVITY_NOT_FOUND = 'ERROR_ACTIVITY_NOT_FOUND';
    const ERROR_EMPTY_LOG_MESSAGE = 'ERROR_EMPTY_LOG_MESSAGE';
    const ERROR_WRONG_WORKFLOW_ID = 'ERROR_WRONG_WORKFLOW_ID';
    const ERROR_WRONG_ACTIVITY_NAME = 'ERROR_WRONG_ACTIVITY_NAME';
    const ERROR_TEMPLATE_VALIDATION_FAILURE = 'ERROR_TEMPLATE_VALIDATION_FAILURE';
    const ERROR_TASK_VALIDATION = 'ERROR_TASK_VALIDATION';
    const ERROR_TASK_NOT_FOUND = 'ERROR_TASK_NOT_FOUND';
    const ERROR_TASK_TYPE = 'ERROR_TASK_TYPE';
    const ERROR_TASK_COMPLETED = 'ERROR_TASK_COMPLETED';
    const ERROR_TASK_EXECUTION = 'ERROR_TASK_EXECUTION';
    private const ALLOWED_TASK_ACTIVITIES = ['ReviewActivity', 'ApproveActivity', 'RequestInformationActivity', 'RequestInformationOptionalActivity'];
    public static function onRestServiceBuildDescription()
    {
    }
    /**
     * Deletes application activities.
     * @param array $fields Fields describes application.
     * @return void
     */
    public static function onRestAppDelete(array $fields)
    {
    }
    /**
     * Deletes application activities.
     * @param array $fields Fields describes application.
     * @return void
     */
    public static function onRestAppUpdate(array $fields)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function addActivity($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function addRobot($params, $n, $server)
    {
    }
    /**
     * @param array $params
     * @param  \CRestServer $server
     * @param bool $isRobot
     * @return bool
     * @throws AccessException
     * @throws RestException
     */
    private static function addActivityInternal($params, $server, $isRobot = false)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function updateActivity($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function deleteActivity($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function updateRobot($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function deleteRobot($params, $n, $server)
    {
    }
    /**
     * @param array $params
     * @param \CRestServer $server
     * @param bool $isRobot
     * @return bool
     * @throws AccessException
     * @throws RestException
     */
    private static function deleteActivityInternal($params, $server, $isRobot = false)
    {
    }
    /**
     * @param array $params
     * @param \CRestServer $server
     * @param bool $isRobot
     * @return bool
     * @throws AccessException
     * @throws RestException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private static function updateActivityInternal($params, $server, $isRobot = false)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws AccessException
     * @throws RestException
     */
    public static function sendEvent($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws AccessException
     * @throws RestException
     */
    public static function writeActivityLog($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return array
     * @throws AccessException
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getActivityList($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return array
     * @throws AccessException
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getRobotList($params, $n, $server)
    {
    }
    /**
     * @param array $params
     * @param \CRestServer $server
     * @param bool $isRobot
     * @return array
     * @throws AccessException
     */
    private static function getActivityListInternal($params, $server, $isRobot = false)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return array
     * @throws AccessException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getWorkflowInstances($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool True on success.
     * @throws AccessException
     * @throws RestException
     */
    public static function terminateWorkflow($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return string Workflow ID.
     * @throws AccessException
     * @throws RestException
     */
    public static function startWorkflow($params, $n, $server)
    {
    }
    private static function checkStartWorkflowPermissions(array $documentId, $templateId)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return mixed Templates collection.
     * @throws AccessException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getWorkflowTemplates($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function addWorkflowTemplate($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function updateWorkflowTemplate($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function deleteWorkflowTemplate($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return array
     * @throws AccessException
     */
    public static function getTaskList($params, $n, $server)
    {
    }
    private static function prepareTaskParameters(array $parameters, array $task)
    {
    }
    private static function externalizeRequestFields($task, array $fields) : array
    {
    }
    private static function internalizeRequestFields($task, array $values) : array
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws RestException
     */
    public static function completeTask($params, $n, $server)
    {
    }
    private static function validateTaskParameters(array $params)
    {
    }
    private static function getTask($id, $userId)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function addProvider($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function deleteProvider($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return array
     * @throws AccessException
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getProviderList($params, $n, $server)
    {
    }
    private static function getSelect($rules, $fields, $default = array())
    {
    }
    private static function getOrder($rules, $fields, array $default = array())
    {
    }
    private static function getFilter($rules, $fields, array $datetimeFieldsList = array())
    {
    }
    private static function checkAdminPermissions()
    {
    }
    private static function isAdmin()
    {
    }
    private static function getCurrentUserId()
    {
    }
    private static function generateInternalCode($data)
    {
    }
    private static function getAppName($appId)
    {
    }
    private static function getAppId($clientId)
    {
    }
    private static function prepareActivityData(array $data, $ignore = false)
    {
    }
    private static function validateActivity($data, $server)
    {
    }
    private static function validateProvider($data, $server)
    {
    }
    private static function validateRobot($data, $server)
    {
    }
    private static function validateActivityCode($code)
    {
    }
    private static function validateActivityHandler($handler, $server)
    {
    }
    private static function validateActivityProperties($properties)
    {
    }
    private static function validateActivityDocumentType($documentType)
    {
    }
    private static function validateDocumentId($documentId)
    {
    }
    private static function validateTemplateName($name)
    {
    }
    private static function upsertAppPlacement(int $appId, string $code, string $handler)
    {
    }
    private static function deleteAppPlacement(int $appId, string $code = null)
    {
    }
    private static function prepareTemplateData($data)
    {
    }
    private static function validateTemplateDocumentType($documentType)
    {
    }
    private static function validateTemplateAutoExecution($flag)
    {
    }
    private static function generateTemplateSystemCode(\CRestServer $server)
    {
    }
    private static function extractEventToken($token)
    {
    }
    /**
     * @param \CRestServer $server
     * @return array|bool|false|mixed|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     */
    private static function getApp($server)
    {
    }
}