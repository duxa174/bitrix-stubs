<?php

abstract class CBPActivity
{
    public $parent = \null;
    public $executionStatus = \CBPActivityExecutionStatus::Initialized;
    public $executionResult = \CBPActivityExecutionResult::None;
    private $arStatusChangeHandlers = array();
    const StatusChangedEvent = 0;
    const ExecutingEvent = 1;
    const CancelingEvent = 2;
    const ClosedEvent = 3;
    const FaultingEvent = 4;
    private const ValueSinglePattern = '\\{=\\s*(?<object>[a-z0-9_]+)\\s*\\:\\s*(?<field>[a-z0-9_\\.]+)(\\s*>\\s*(?<mod1>[a-z0-9_\\:]+)(\\s*,\\s*(?<mod2>[a-z0-9_]+))?)?\\s*\\}';
    const ValuePattern = '#^\\s*' . self::ValueSinglePattern . '\\s*$#i';
    private const ValueSimplePattern = '#^\\s*\\{\\{(.*?)\\}\\}\\s*$#i';
    const ValueInlinePattern = '#' . self::ValueSinglePattern . '#i';
    /** Internal pattern used in calc.php */
    const ValueInternalPattern = '\\{=\\s*([a-z0-9_]+)\\s*\\:\\s*([a-z0-9_\\.]+)(\\s*>\\s*([a-z0-9_\\:]+)(\\s*,\\s*([a-z0-9_]+))?)?\\s*\\}';
    const CalcPattern = '#^\\s*(=\\s*(.*)|\\{\\{=\\s*(.*)\\s*\\}\\})\\s*$#is';
    const CalcInlinePattern = '#\\{\\{=\\s*(.*?)\\s*\\}\\}([^\\}]|$)#is';
    protected $arProperties = array();
    protected $arPropertiesTypes = array();
    protected $name = "";
    /** @var CBPWorkflow $workflow */
    public $workflow = \null;
    public $arEventsMap = array();
    /************************  PROPERTIES  ************************************************/
    public function GetDocumentId()
    {
    }
    public function SetDocumentId($documentId)
    {
    }
    public function GetDocumentType()
    {
    }
    public function SetDocumentType($documentType)
    {
    }
    public function getDocumentEventType()
    {
    }
    public function GetWorkflowStatus()
    {
    }
    public function SetWorkflowStatus($status)
    {
    }
    public function SetFieldTypes($arFieldTypes = array())
    {
    }
    public function GetWorkflowTemplateId()
    {
    }
    public function getTemplateUserId()
    {
    }
    /**********************************************************/
    protected function ClearProperties()
    {
    }
    public function GetPropertyBaseType($propertyName)
    {
    }
    public function getTemplatePropertyType($propertyName)
    {
    }
    public function SetProperties($arProperties = array())
    {
    }
    public function SetPropertiesTypes($arPropertiesTypes = array())
    {
    }
    /**********************************************************/
    protected function ClearVariables()
    {
    }
    public function GetVariableBaseType($variableName)
    {
    }
    public function SetVariables($arVariables = array())
    {
    }
    public function SetVariablesTypes($arVariablesTypes = array())
    {
    }
    public function SetVariable($name, $value)
    {
    }
    public function GetVariable($name)
    {
    }
    public function getVariableType($name)
    {
    }
    private function GetConstantTypes()
    {
    }
    public function GetConstant($name)
    {
    }
    public function GetConstantType($name)
    {
    }
    public function IsVariableExists($name)
    {
    }
    /************************************************/
    public function GetName()
    {
    }
    public function GetRootActivity()
    {
    }
    public function SetWorkflow(\CBPWorkflow $workflow)
    {
    }
    public function GetWorkflowInstanceId()
    {
    }
    public function SetStatusTitle($title = '')
    {
    }
    public function AddStatusTitle($title = '')
    {
    }
    public function DeleteStatusTitle($title = '')
    {
    }
    private function GetPropertyValueRecursive($val, $convertToType = \null)
    {
    }
    private function GetRealParameterValue($objectName, $fieldName, &$result, array $modifiers = \null)
    {
    }
    private function applyPropertyValueModifiers($fieldName, $property, $value, array $modifiers)
    {
    }
    private function ParseStringParameter($matches)
    {
    }
    public function ParseValue($value, $convertToType = \null)
    {
    }
    protected function getRawProperty($name)
    {
    }
    public function __get($name)
    {
    }
    public function __set($name, $val)
    {
    }
    public function IsPropertyExists($name)
    {
    }
    public function CollectNestedActivities()
    {
    }
    public function collectUsages()
    {
    }
    private function collectUsagesRecursive($val, &$usages)
    {
    }
    protected function getObjectSourceType($objectName, $fieldName)
    {
    }
    /************************  CONSTRUCTORS  *****************************************************/
    public function __construct($name)
    {
    }
    /************************  DEBUG  ***********************************************************/
    public function ToString()
    {
    }
    public function Dump($level = 3)
    {
    }
    /************************  PROCESS  ***********************************************************/
    public function Initialize()
    {
    }
    public function Finalize()
    {
    }
    public function Execute()
    {
    }
    protected function ReInitialize()
    {
    }
    public function Cancel()
    {
    }
    public function HandleFault(\Exception $exception)
    {
    }
    /************************  LOAD / SAVE  *******************************************************/
    public function FixUpParentChildRelationship(\CBPActivity $nestedActivity)
    {
    }
    public static function Load($stream)
    {
    }
    protected function GetACNames()
    {
    }
    private static function SearchUsedActivities(\CBPActivity $activity, &$arUsedActivities)
    {
    }
    public function Save()
    {
    }
    /************************  STATUS CHANGE HANDLERS  **********************************************/
    public function AddStatusChangeHandler($event, $eventHandler)
    {
    }
    public function RemoveStatusChangeHandler($event, $eventHandler)
    {
    }
    /************************  EVENTS  **********************************************************************/
    private function FireStatusChangedEvents($event, $arEventParameters = array())
    {
    }
    public function SetStatus($newStatus, $arEventParameters = array())
    {
    }
    /************************  CREATE  *****************************************************************/
    public static function IncludeActivityFile($code)
    {
    }
    public static function CreateInstance($code, $data)
    {
    }
    public static function CallStaticMethod($code, $method, $arParameters = array())
    {
    }
    public function InitializeFromArray($arParams)
    {
    }
    /************************  MARK  ****************************************************************/
    public function MarkCanceled($arEventParameters = array())
    {
    }
    public function MarkCompleted($arEventParameters = array())
    {
    }
    public function MarkFaulted($arEventParameters = array())
    {
    }
    private function MarkClosed($arEventParameters = array())
    {
    }
    protected function WriteToTrackingService($message = "", $modifiedBy = 0, $trackingType = -1)
    {
    }
    public static function ValidateProperties($arTestProperties = array(), \CBPWorkflowTemplateUser $user = \null)
    {
    }
    public static function ValidateChild($childActivity, $bFirstChild = \false)
    {
    }
    public static function &FindActivityInTemplate(&$arWorkflowTemplate, $activityName)
    {
    }
    public static function isExpression($text)
    {
    }
    public static function parseExpression($exp) : ?array
    {
    }
}