<?php

/**
* Workflow instance.
*/
class CBPWorkflow
{
    private $isNew = \false;
    private $instanceId = "";
    /** @var CBPRuntime|null $runtime */
    private $runtime = \null;
    private $rootActivity = \null;
    private $activitiesQueue = array();
    private $eventsQueue = array();
    private $activitiesNamesMap = array();
    /************************  PROPERTIES  *******************************/
    public function GetInstanceId()
    {
    }
    /**
     * @return CBPRuntime
     */
    public function GetRuntime()
    {
    }
    private function GetWorkflowStatus()
    {
    }
    private function SetWorkflowStatus($newStatus)
    {
    }
    public function GetService($name)
    {
    }
    public function GetDocumentId()
    {
    }
    /************************  CONSTRUCTORS  ****************************************************/
    /**
     * Public constructor initializes a new workflow instance with the specified ID.
     * 
     * @param mixed $instanceId - ID of the new workflow instance.
     * @param mixed $runtime - Runtime object.
     * @return CBPWorkflow
     */
    public function __construct($instanceId, \CBPRuntime $runtime)
    {
    }
    /**
     * Remove workflow object from serialized data
     * @return array
     */
    public function __sleep()
    {
    }
    /************************  CREATE / LOAD WORKFLOW  ****************************************/
    public function Initialize(\CBPActivity $rootActivity, $documentId, $workflowParameters = array(), $workflowVariablesTypes = array(), $workflowParametersTypes = array(), $workflowTemplateId = 0)
    {
    }
    public function Reload(\CBPActivity $rootActivity)
    {
    }
    public function OnRuntimeStopped()
    {
    }
    /************************  EXECUTE WORKFLOW  ************************************************/
    /**
     * Starts new workflow instance.
     * 
     */
    public function Start()
    {
    }
    /**
     * Resume existing workflow.
     * 
     */
    public function Resume()
    {
    }
    public function isNew()
    {
    }
    /**********************  EXTERNAL EVENTS  **************************************************************/
    /**
     * Resume the workflow instance and transfer the specified event to it.
     * 
     * @param mixed $eventName - Event name.
     * @param mixed $arEventParameters - Event parameters.
     */
    public function SendExternalEvent($eventName, $arEventParameters = array())
    {
    }
    /***********************  SEARCH ACTIVITY BY NAME  ****************************************************/
    private function FillNameActivityMapInternal(\CBPActivity $activity)
    {
    }
    private function FillNameActivityMap()
    {
    }
    /**
     * Returns activity by its name.
     * 
     * @param mixed $activityName - Activity name.
     * @return CBPActivity - Returns activity object or null if activity is not found.
     */
    public function GetActivityByName($activityName)
    {
    }
    /************************  ACTIVITY EXECUTION  *************************************************/
    /**
     * Initializes the specified activity by calling its method Initialize.
     * 
     * @param CBPActivity $activity
     */
    public function InitializeActivity(\CBPActivity $activity)
    {
    }
    /**
     * Plans specified activity for execution.
     * 
     * @param CBPActivity $activity - Activity object.
     * @param mixed $arEventParameters - Optional parameters.
     */
    public function ExecuteActivity(\CBPActivity $activity, $arEventParameters = array())
    {
    }
    /**
     * Close specified activity.
     * 
     * @param CBPActivity $activity - Activity object.
     * @param mixed $arEventParameters - Optional parameters.
     */
    public function CloseActivity(\CBPActivity $activity, $arEventParameters = array())
    {
    }
    /**
     * Cancel specified activity.
     * 
     * @param CBPActivity $activity - Activity object.
     * @param mixed $arEventParameters - Optional parameters.
     */
    public function CancelActivity(\CBPActivity $activity, $arEventParameters = array())
    {
    }
    public function FaultActivity(\CBPActivity $activity, \Exception $e, $arEventParameters = array())
    {
    }
    /************************  ACTIVITIES QUEUE  ***********************************************/
    private function AddItemToQueue($item)
    {
    }
    private function RunQueue()
    {
    }
    private function RunQueuedItem(\CBPActivity $activity, $activityOperation, \Exception $exception = \null)
    {
    }
    public function Terminate(\Exception $e = \null, $stateTitle = '')
    {
    }
    /**
     * @param CBPActivity $activity
     * @throws CBPArgumentNullException
     * @throws Exception
     */
    public function FinalizeActivity(\CBPActivity $activity)
    {
    }
    /************************  EVENTS QUEUE  ********************************************************/
    private function AddEventToQueue($eventName, $arEventParameters = array())
    {
    }
    private function ProcessQueuedEvents()
    {
    }
    private function ProcessQueuedEvent($eventName, $arEventParameters = array())
    {
    }
    /**
     * Add new event handler to the specified event.
     * 
     * @param mixed $eventName - Event name.
     * @param IBPActivityExternalEventListener $eventHandler - Event handler.
     */
    public function AddEventHandler($eventName, \IBPActivityExternalEventListener $eventHandler)
    {
    }
    /**
     * Remove the event handler from the specified event.
     * 
     * @param mixed $eventName - Event name.
     * @param IBPActivityExternalEventListener $eventHandler - Event handler.
     */
    public function RemoveEventHandler($eventName, \IBPActivityExternalEventListener $eventHandler)
    {
    }
    /*******************  UTILITIES  ***************************************************************/
    /**
     * Returns available events for current state of state machine workflow activity.
     * 
     */
    public function GetAvailableStateEvents()
    {
    }
}