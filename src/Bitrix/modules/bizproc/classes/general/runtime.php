<?php

/**
 * Workflow runtime.
 *
 * @method \CBPSchedulerService getSchedulerService()
 * @method \CBPStateService getStateService()
 * @method \CBPTrackingService getTrackingService()
 * @method \CBPTaskService getTaskService()
 * @method \CBPHistoryService getHistoryService()
 * @method \CBPDocumentService getDocumentService()
 * @method Bizproc\Service\Analytics getAnalyticsService()
 * @method Bizproc\Service\User getUserService()
 */
class CBPRuntime
{
    const EXCEPTION_CODE_INSTANCE_NOT_FOUND = 404;
    const EXCEPTION_CODE_INSTANCE_LOCKED = 423;
    const EXCEPTION_CODE_INSTANCE_TERMINATED = 499;
    const REST_ACTIVITY_PREFIX = 'rest_';
    private $isStarted = \false;
    /** @var CBPRuntime $instance*/
    private static $instance;
    private static $featuresCache = [];
    private $services = [];
    private $workflows = [];
    private $loadedActivities = [];
    private $activityFolders = [];
    private $workflowChains = [];
    /*********************  SINGLETON PATTERN  **************************************************/
    /**
     * Private constructor prevents from instantiating this class. Singleton pattern.
     * 
     */
    private function __construct()
    {
    }
    /**
     * Static method returns runtime object. Singleton pattern.
     *
     * @param bool $autoStart Starts runtime.
     * @return CBPRuntime
     */
    public static function GetRuntime($autoStart = \false)
    {
    }
    public function __clone()
    {
    }
    public function __call($name, $arguments)
    {
    }
    /**
     * Method checks if feature is enabled.
     * @param string $featureName Feature name. Checks default if empty.
     * @return bool
     */
    public static function isFeatureEnabled($featureName = '')
    {
    }
    /*********************  START / STOP RUNTIME  **************************************************/
    /**
     * Public method starts runtime
     * 
     */
    public function StartRuntime()
    {
    }
    /**
     * Public method stops runtime
     * 
     */
    public function StopRuntime()
    {
    }
    /*******************  PROCESS WORKFLOWS  *********************************************************/
    /**
     * Creates new workflow instance from the specified template.
     *
     * @param int $workflowTemplateId - ID of the workflow template
     * @param array $documentId - ID of the document
     * @param mixed $workflowParameters - Optional parameters of the created workflow instance
     * @param array|null $parentWorkflow - Parent Workflow information.
     * @return CBPWorkflow
     * @throws CBPArgumentNullException
     * @throws CBPArgumentOutOfRangeException
     * @throws Exception
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function CreateWorkflow($workflowTemplateId, $documentId, $workflowParameters = array(), $parentWorkflow = \null)
    {
    }
    /**
     * Returns existing workflow instance by its ID
     *
     * @param string $workflowId ID of the workflow instance.
     * @param bool $silent
     * @return CBPWorkflow
     * @throws Exception
     */
    public function GetWorkflow($workflowId, $silent = \false)
    {
    }
    public function onWorkflowStatusChanged($workflowId, $status)
    {
    }
    /*******************  SERVICES  *********************************************************/
    /**
     * Returns service instance by its code.
     * 
     * @param mixed $name - Service code.
     * @return mixed|CBPSchedulerService|CBPStateService|CBPTrackingService|CBPTaskService|CBPHistoryService|CBPDocumentService|Bizproc\Service\Analytics - Service instance or null if service is not found.
     */
    public function GetService($name)
    {
    }
    /**
     * Adds new service to runtime. Runtime should be stopped.
     * 
     * @param string $name - Service code.
     * @param CBPRuntimeService $service - Service object.
     */
    public function AddService($name, \CBPRuntimeService $service)
    {
    }
    /*******************  EVENTS  ******************************************************************/
    /**
     * Static method transfer event to the specified workflow instance.
     * 
     * @param mixed $workflowId - ID of the workflow instance.
     * @param mixed $eventName - Event name.
     * @param mixed $arEventParameters - Event parameters.
     */
    public static function SendExternalEvent($workflowId, $eventName, $arEventParameters = array())
    {
    }
    /*******************  UTILITIES  ***************************************************************/
    /**
     * Includes activity file by activity code.
     * 
     * @param string $code - Activity code.
     */
    public function IncludeActivityFile($code)
    {
    }
    public function GetActivityDescription($code, $lang = \false)
    {
    }
    private function LoadActivityLocalization($path, $file, $lang = \false)
    {
    }
    public function GetResourceFilePath($activityPath, $filePath)
    {
    }
    public function ExecuteResourceFile($activityPath, $filePath, $arParameters = array())
    {
    }
    public function SearchActivitiesByType($type, array $documentType = \null)
    {
    }
    /**
     * @param bool $lang Language ID.
     * @param null|array $documentType Document type.
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getRestActivities($lang = \false, $documentType = \null)
    {
    }
    /**
     * @param bool $lang Language ID.
     * @param null|array $documentType Document type.
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getRestRobots($lang = \false, $documentType = \null)
    {
    }
    private function makeRestActivityDescription($activity, $lang = \false, $documentType = \null)
    {
    }
    private function makeRestRobotDescription($activity, $lang = \false, $documentType = \null)
    {
    }
    private function checkActivityFilter($filter, $documentType)
    {
    }
    private function checkActivityFilterRules($rules, $documentType, $distrName)
    {
    }
    private function addWorkflowToChain($childId, $parent)
    {
    }
    private function checkWorkflowRecursion($workflowId, $currentTemplateId)
    {
    }
}