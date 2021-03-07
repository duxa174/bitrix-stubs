<?php

/**
* Workflow templates service.
*/
class CAllBPWorkflowTemplateLoader
{
    protected $useGZipCompression = \false;
    protected static $workflowConstants = array();
    const CONSTANTS_CACHE_TAG_PREFIX = 'b_bp_wf_constants_';
    protected static $typesStates = array();
    private static $instance;
    private function __construct()
    {
    }
    public function __clone()
    {
    }
    /**
     * Static method returns loader object. Singleton pattern.
     *
     * @return CBPWorkflowTemplateLoader
     */
    public static function GetLoader()
    {
    }
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    public static function checkTemplateActivities(array $template)
    {
    }
    private function ValidateTemplate($arActivity, $user)
    {
    }
    protected function ParseFields(&$arFields, $id = 0, $systemImport = \false)
    {
    }
    public static function Add($arFields, $systemImport = \false)
    {
    }
    public static function Update($id, $arFields, $systemImport = \false)
    {
    }
    private function GetSerializedForm($arTemplate)
    {
    }
    public static function Delete($id)
    {
    }
    protected static function cleanTemplateCache($id)
    {
    }
    public function DeleteTemplate($id)
    {
    }
    public function LoadWorkflow($workflowTemplateId)
    {
    }
    private function ParceWorkflowTemplate($arWorkflowTemplate, &$arActivityNames, \CBPActivity $parentActivity = \null)
    {
    }
    private function CreateActivity($activityCode, $activityName)
    {
    }
    public static function GetStatesOfTemplate($arWorkflowTemplate)
    {
    }
    private static function FindSetStateActivities($arWorkflowTemplate)
    {
    }
    public static function GetTransfersOfState($arWorkflowTemplate, $stateName)
    {
    }
    private static function ParseDocumentTypeStates($arTemplatesListItem)
    {
    }
    private static function ExtractValuesFromVariables($ar, $variables, $constants = array())
    {
    }
    public static function GetDocumentTypeStates($documentType, $autoExecute = -1, $stateName = "")
    {
    }
    public static function GetTemplateState($workflowTemplateId, $stateName = "")
    {
    }
    public static function getTemplateUserId($workflowTemplateId)
    {
    }
    public static function getTemplateConstants($workflowTemplateId)
    {
    }
    /**
     * @param $workflowTemplateId - Workflow Template ID
     * @return bool
     * @throws CBPArgumentOutOfRangeException
     */
    public static function isConstantsTuned($workflowTemplateId)
    {
    }
    public static function CheckWorkflowParameters($arTemplateParameters, $arPossibleValues, $documentType, &$arErrors)
    {
    }
    public static function SearchTemplatesByDocumentType($documentType, $autoExecute = -1)
    {
    }
    public static function &FindActivityByName(&$arWorkflowTemplate, $activityName)
    {
    }
    public static function &FindParentActivityByName(&$arWorkflowTemplate, $activityName)
    {
    }
    public static function ExportTemplate($id, $bCompress = \true)
    {
    }
    private static function WalkThroughWorkflowTemplate(&$arWorkflowTemplate, $callback, $user)
    {
    }
    private static function ImportTemplateChecker($arActivity, $user)
    {
    }
    public static function ImportTemplate($id, $documentType, $autoExecute, $name, $description, $datum, $systemCode = \null, $systemImport = \false)
    {
    }
    public static function importTemplateFromArray($id, $documentType, $autoExecute, $name, $description, $templateFields, $systemCode = \null, $systemImport = \false)
    {
    }
    public function GetTemplatesList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    public function AddTemplate($arFields, $systemImport = \false)
    {
    }
    public function UpdateTemplate($id, $arFields, $systemImport = \false)
    {
    }
    public static function useGZipCompression()
    {
    }
}
class CBPWorkflowTemplateResult extends \CDBResult
{
    private $useGZipCompression = \false;
    public function __construct($res, $useGZipCompression)
    {
    }
    private function GetFromSerializedForm($value)
    {
    }
    function Fetch()
    {
    }
}
class CBPWorkflowTemplateUser
{
    const CurrentUser = "CurrentUser";
    private $userId = 0;
    private $isAdmin = \false;
    private $fullName = '';
    public function __construct($userId = \null)
    {
    }
    public function getId()
    {
    }
    public function getBizprocId()
    {
    }
    public function isAdmin()
    {
    }
    public function getFullName()
    {
    }
    private static function isBpAdmin(int $userId) : bool
    {
    }
}
class CBPWorkflowTemplateValidationException extends \Exception
{
    private $errors;
    public function __construct($message = "", array $errors = array())
    {
    }
    public function getErrors()
    {
    }
}
//Compatibility
class CBPWorkflowTemplateLoader extends \CAllBPWorkflowTemplateLoader
{
}