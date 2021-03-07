<?php

/**
 * Bizproc API Helper for external usage.
 */
class CBPDocument
{
    const PARAM_TAGRET_USER = 'TargetUser';
    const PARAM_MODIFIED_DOCUMENT_FIELDS = 'ModifiedDocumentField';
    const PARAM_USE_FORCED_TRACKING = 'UseForcedTracking';
    const PARAM_IGNORE_SIMULTANEOUS_PROCESSES_LIMIT = 'IgnoreSimultaneousProcessesLimit';
    const PARAM_DOCUMENT_EVENT_TYPE = 'DocumentEventType';
    const PARAM_DOCUMENT_TYPE = '__DocumentType';
    public static function MigrateDocumentType($oldType, $newType)
    {
    }
    /**
     * Method returns array of workflow templates and states for specified document.
     * If document id is set method returns array of running and terminated workflow states and also templates which started on document edit action.
     * If document id is not set method returns array of templates which started on document add.
     * Return array example: array(
     *		workflow_id_or_template_id => array(
     *			"ID" => workflow_id,
     *			"TEMPLATE_ID" => template_id,
     *			"TEMPLATE_NAME" => template_name,
     *			"TEMPLATE_DESCRIPTION" => template_description,
     *			"TEMPLATE_PARAMETERS" => template_parameters,
     *			"STATE_NAME" => current_state_name,
     *			"STATE_TITLE" => current_state_title,
     *			"STATE_MODIFIED" => state_modified_datetime,
     *			"STATE_PARAMETERS" => state_parameters,
     *			"STATE_PERMISSIONS" => state_permissions,
     *			"WORKFLOW_STATUS" => workflow_status,
     *		),
     * 		. . .
     *	)
     * TEMPLATE_PARAMETERS example:
     *	array(
     *		"param1" => array(
     *			"Name" => "Parameter 1",
     *			"Description" => "",
     *			"Type" => "int",
     *			"Required" => true,
     *			"Multiple" => false,
     *			"Default" => 8,
     *			"Options" => null,
     *		),
     *		"param2" => array(
     *			"Name" => "Parameter 2",
     *			"Description" => "",
     *			"Type" => "select",
     *			"Required" => false,
     *			"Multiple" => true,
     *			"Default" => "v2",
     *			"Options" => array(
     *				"v1" => "V 1",
     *				"v2" => "V 2",
     *				"v3" => "V 3",
     *				. . .
     *			),
     *		),
     *		. . .
     *	)
     * STATE_PARAMETERS example:
     *	array(
     *		array(
     *			"NAME" => event_name,
     *			"TITLE" => event_title,
     *			"PERMISSION" => array('user_1')
     *		),
     *		. . .
     *	)
     * STATE_PERMISSIONS example:
     *	array(
     *		operation => users_array,
     *		. . .
     *	)
     *
     * @param array $documentType - Document type array(MODULE_ID, ENTITY, DOCUMENT_TYPE)
     * @param null|array $documentId - Document id array(MODULE_ID, ENTITY, DOCUMENT_ID).
     * @return array - Workflow states and templates.
     */
    public static function GetDocumentStates($documentType, $documentId = \null)
    {
    }
    /**
     * Method returns workflow state for specified document.
     *
     * @param array $documentId - Document id array(MODULE_ID, ENTITY, DOCUMENT_ID).
     * @param string $workflowId - Workflow id.
     * @return array - Workflow state array.
     */
    public static function GetDocumentState($documentId, $workflowId)
    {
    }
    public static function MergeDocuments($firstDocumentId, $secondDocumentId)
    {
    }
    /**
     * Method returns array of events available for specified user and specified state
     *
     * @param int $userId - User id.
     * @param array $arGroups - User groups.
     * @param array $arState - Workflow state.
     * @param bool $appendExtendedGroups - Append extended groups.
     * @return array - Events array array(array("NAME" => event_name, "TITLE" => event_title), ...).
     * @throws Exception
     */
    public static function GetAllowableEvents($userId, $arGroups, $arState, $appendExtendedGroups = \false)
    {
    }
    public static function AddDocumentToHistory($parameterDocumentId, $name, $userId)
    {
    }
    /**
     * Method returns allowable operations for specified user in specified states.
     * If specified states are not relevant to state machine returns null.
     * If user has no access returns array().
     * Else returns operations array(operation, ...).
     *
     * @param int $userId - User id.
     * @param array $arGroups - User groups.
     * @param array $arStates - Workflow states.
     * @param bool $appendExtendedGroups - Append extended groups.
     * @return array|null - Allowable operations.
     * @throws Exception
     */
    public static function GetAllowableOperations($userId, $arGroups, $arStates, $appendExtendedGroups = \false)
    {
    }
    /**
     * Method check can operate user specified operation in specified state.
     * If specified states are not relevant to state machine returns true.
     * If user can`t do operation return false.
     * Else returns true.
     *
     * @param string $operation - Operation.
     * @param int $userId - User id.
     * @param array $arGroups - User groups.
     * @param array $arStates - Workflows states.
     * @return bool
     * @throws Exception
     */
    public static function CanOperate($operation, $userId, $arGroups, $arStates)
    {
    }
    /**
     * Method starts workflow.
     *
     * @param int $workflowTemplateId - Template id.
     * @param array $documentId - Document id array(MODULE_ID, ENTITY, DOCUMENT_ID).
     * @param array $parameters - Workflow parameters.
     * @param array $errors - Errors array(array("code" => error_code, "message" => message, "file" => file_path), ...).
     * @param array|null $parentWorkflow - Parent workflow information.
     * @return string - Workflow id.
     */
    public static function StartWorkflow($workflowTemplateId, $documentId, $parameters, &$errors, $parentWorkflow = \null)
    {
    }
    /**
     * Method auto starts workflow.
     *
     * @param array $documentType -  Document type array(MODULE_ID, ENTITY, DOCUMENT_TYPE).
     * @param int $autoExecute - CBPDocumentEventType (1 = CBPDocumentEventType::Create, 2 = CBPDocumentEventType::Edit).
     * @param array $documentId - Document id array(MODULE_ID, ENTITY, DOCUMENT_ID).
     * @param array $arParameters - Workflow parameters.
     * @param array $arErrors - Errors array(array("code" => error_code, "message" => message, "file" => file_path), ...).
     */
    public static function AutoStartWorkflows($documentType, $autoExecute, $documentId, $arParameters, &$arErrors)
    {
    }
    /**
     * Method sends external event to workflow.
     *
     * @param string $workflowId - Workflow id.
     * @param string $workflowEvent - Event name.
     * @param array $arParameters - Event parameters.
     * @param array $arErrors - Errors array(array("code" => error_code, "message" => message, "file" => file_path), ...).
     */
    public static function SendExternalEvent($workflowId, $workflowEvent, $arParameters, &$arErrors)
    {
    }
    /**
     * Method terminates workflow.
     *
     * @param string $workflowId -  Workflow id.
     * @param array $documentId - Document type array(MODULE_ID, ENTITY, DOCUMENT_TYPE).
     * @param array $arErrors - Errors array(array("code" => error_code, "message" => message, "file" => file_path), ...).
     * @param string $stateTitle - State title (workflow status).
     */
    public static function TerminateWorkflow($workflowId, $documentId, &$arErrors, $stateTitle = '')
    {
    }
    public static function killWorkflow($workflowId, $terminate = \true, $documentId = \null)
    {
    }
    /**
     * Method removes all related document data.
     * @param array $documentId - Document id array(MODULE_ID, ENTITY, DOCUMENT_ID).
     * @param array $errors - Errors array(array("code" => error_code, "message" => message, "file" => file_path), ...).
     */
    public static function OnDocumentDelete($documentId, &$errors)
    {
    }
    public static function PostTaskForm($arTask, $userId, $arRequest, &$arErrors, $userName = "")
    {
    }
    public static function ShowTaskForm($arTask, $userId, $userName = "", $arRequest = \null)
    {
    }
    /**
     * @param int $userId Task User Id.
     * @param int $status Task user status.
     * @param int|array $ids Task ids.
     * @param array $errors Error collection.
     * @return bool
     */
    public static function setTasksUserStatus($userId, $status, $ids = array(), &$errors = array())
    {
    }
    /**
     * @param int $fromUserId Task current user.
     * @param int $toUserId Task target user.
     * @param array|int $ids Task ids.
     * @param array $errors Error collection.
     * @param null | array $allowedDelegationType
     * @return bool
     */
    public static function delegateTasks($fromUserId, $toUserId, $ids = array(), &$errors = array(), $allowedDelegationType = \null)
    {
    }
    public static function getTaskControls($arTask)
    {
    }
    /**
     * Method validates parameters values from StartWorkflowParametersShow.
     *
     * @param int $templateId - Template id.
     * @param array $arWorkflowParameters - Workflow parameters.
     * @param $documentType - Document type array(MODULE_ID, ENTITY, DOCUMENT_TYPE).
     * @param array $arErrors - Errors array(array("code" => error_code, "message" => message, "file" => file_path), ...).
     * @return array - Valid Parameters values.
     */
    public static function StartWorkflowParametersValidate($templateId, $arWorkflowParameters, $documentType, &$arErrors)
    {
    }
    /**
     * Method shows parameters form. Validates in StartWorkflowParametersValidate.
     *
     * @param int $templateId - Template id.
     * @param array $arWorkflowParameters - Workflow parameters.
     * @param string $formName - Form name.
     * @param bool $bVarsFromForm - false on first form open, else - true.
     * @param null|array $documentType Document type array(MODULE_ID, ENTITY, DOCUMENT_TYPE).
     */
    public static function StartWorkflowParametersShow($templateId, $arWorkflowParameters, $formName, $bVarsFromForm, $documentType = \null)
    {
    }
    public static function AddShowParameterInit($module, $type, $document_type, $entity = "", $document_id = '')
    {
    }
    public static function ShowParameterField($type, $name, $values, $arParams = array())
    {
    }
    public static function _ReplaceTaskURL($str, $documentType)
    {
    }
    public static function AddDefaultWorkflowTemplates($documentType, $additionalModuleId = \null)
    {
    }
    /**
     * Method returns array of workflow templates for specified document type.
     * Return array example:
     *    array(
     *        array(
     *            "ID" => workflow_id,
     *            "NAME" => template_name,
     *            "DESCRIPTION" => template_description,
     *            "MODIFIED" => modified datetime,
     *            "USER_ID" => modified by user id,
     *            "USER_NAME" => modified by user name,
     *            "AUTO_EXECUTE" => flag CBPDocumentEventType,
     *            "AUTO_EXECUTE_TEXT" => auto_execute_text,
     *        ),
     *        . . .
     *    )
     *
     * @param array $documentType - Document type array(MODULE_ID, ENTITY, DOCUMENT_TYPE).
     * @param bool $showSystemTemplates Shows system templates.
     * @return array - Templates array.
     */
    public static function GetWorkflowTemplatesForDocumentType($documentType, $showSystemTemplates = \true)
    {
    }
    public static function GetNumberOfWorkflowTemplatesForDocumentType($documentType)
    {
    }
    /**
     * Method deletes workflow template.
     *
     * @param int $id - Template id.
     * @param array $documentType - Document type array(MODULE_ID, ENTITY, DOCUMENT_TYPE).
     * @param array $arErrors - Errors array(array("code" => error_code, "message" => message, "file" => file_path), ...).
     */
    public static function DeleteWorkflowTemplate($id, $documentType, &$arErrors)
    {
    }
    /**
     * Method updates workflow template.
     *
     * @param int $id - Template id.
     * @param array $documentType - Document type array(MODULE_ID, ENTITY, DOCUMENT_TYPE).
     * @param array $arFields - Data for update.
     * @param array $arErrors - Errors array(array("code" => error_code, "message" => message, "file" => file_path), ...).
     */
    public static function UpdateWorkflowTemplate($id, $documentType, $arFields, &$arErrors)
    {
    }
    /**
     * Method checks can user operate specified document with specified operation.
     *
     * @param int $operation - operation CBPCanUserOperateOperation.
     * @param int $userId - User id.
     * @param array $parameterDocumentId - Document id array(MODULE_ID, ENTITY, DOCUMENT_ID).
     * @param array $arParameters - Additional parameters.
     * @return bool
     */
    public static function CanUserOperateDocument($operation, $userId, $parameterDocumentId, $arParameters = array())
    {
    }
    /**
     * Method checks can user operate specified document type with specified operation.
     *
     * @param int $operation - operation CBPCanUserOperateOperation.
     * @param int $userId - User id.
     * @param array $parameterDocumentType - Document type array(MODULE_ID, ENTITY, DOCUMENT_TYPE).
     * @param array $arParameters - Additional parameters.
     * @return bool
     */
    public static function CanUserOperateDocumentType($operation, $userId, $parameterDocumentType, $arParameters = array())
    {
    }
    /**
     * Get document admin page URL.
     *
     * @param array $parameterDocumentId - Document id array(MODULE_ID, ENTITY, DOCUMENT_ID).
     * @return string - URL.
     */
    public static function GetDocumentAdminPage($parameterDocumentId)
    {
    }
    /**
     * @param array $parameterDocumentId Document Id.
     * @return mixed|string
     * @throws CBPArgumentNullException
     */
    public static function getDocumentName($parameterDocumentId)
    {
    }
    /**
     * Method returns task array for specified user and specified workflow state.
     * Return array example:
     *	array(
     *		array(
     *			"ID" => task_id,
     *			"NAME" => task_name,
     *			"DESCRIPTION" => task_description,
     *		),
     *		. . .
     *	)
     *
     * @param int $userId - User id.
     * @param string $workflowId - Workflow id.
     * @return array - Tasks.
     */
    public static function GetUserTasksForWorkflow($userId, $workflowId)
    {
    }
    public static function PrepareFileForHistory($documentId, $fileId, $historyIndex)
    {
    }
    public static function IsAdmin()
    {
    }
    public static function GetDocumentFromHistory($historyId, &$arErrors)
    {
    }
    public static function GetAllowableUserGroups($parameterDocumentType)
    {
    }
    public static function onAfterTMDayStart($data)
    {
    }
    /**
     * Temporary notification for B24 portal Admins
     * Ex: CAgent::AddAgent("\CBPDocument::sendB24LimitsNotifyToAdmins();", "bizproc", "N", 43200);
     * @param int $ts
     * @return string
     */
    public static function sendB24LimitsNotifyToAdmins($ts = 0)
    {
    }
    /**
     * Method returns map of document fields aliases.
     * @param array $fields Document fields.
     * @return array Aliases.
     */
    public static function getDocumentFieldsAliasesMap($fields)
    {
    }
    /**
     * Bizproc expression checker. Required for usage from external modules!
     * Examples: {=Document:IBLOCK_ID}, {=Document:CREATED_BY>printable}, {=SequentialWorkflowActivity1:DocumentApprovers>user,printable}
     * @param $value
     * @return bool
     */
    public static function IsExpression($value)
    {
    }
    public static function parseExpression($expression)
    {
    }
    public static function signParameters(array $parameters)
    {
    }
    /**
     * @param string $unsignedData
     * @return array
     */
    public static function unSignParameters($unsignedData)
    {
    }
    public static function signDocumentType(array $documentType)
    {
    }
    /**
     * @param string $unsignedData
     * @return array|null Document type.
     */
    public static function unSignDocumentType($unsignedData) : ?array
    {
    }
    private static function signArray(array $source, $salt)
    {
    }
    private static function unSignArray(string $unsignedSource, $salt)
    {
    }
    public static function getTemplatesForStart($userId, $documentType, $documentId = \null, array $parameters = array())
    {
    }
}