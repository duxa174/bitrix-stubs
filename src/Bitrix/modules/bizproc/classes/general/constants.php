<?php

class CBPActivityExecutionStatus
{
    const Initialized = 0;
    const Executing = 1;
    const Canceling = 2;
    const Closed = 3;
    const Faulting = 4;
    public static function Out($v)
    {
    }
}
class CBPActivityExecutionResult
{
    const None = 0;
    const Succeeded = 1;
    const Canceled = 2;
    const Faulted = 3;
    const Uninitialized = 4;
    public static function Out($v)
    {
    }
}
class CBPWorkflowStatus
{
    const Created = 0;
    const Running = 1;
    const Completed = 2;
    const Suspended = 3;
    const Terminated = 4;
    public static function Out($v)
    {
    }
}
class CBPActivityExecutorOperationType
{
    const Execute = 0;
    const Cancel = 1;
    const HandleFault = 2;
    public static function Out($v)
    {
    }
}
class CBPDocumentEventType
{
    const None = 0;
    const Create = 1;
    const Edit = 2;
    const Delete = 4;
    const Automation = 8;
    const Manual = 16;
    const Script = 32;
    public static function Out($v)
    {
    }
}
class CBPCanUserOperateOperation
{
    const ViewWorkflow = 0;
    const StartWorkflow = 1;
    const CreateWorkflow = 4;
    const CreateAutomation = 5;
    const WriteDocument = 2;
    const ReadDocument = 3;
}
class CBPSetPermissionsMode
{
    const Hold = 1;
    const Rewrite = 2;
    const Clear = 3;
    const ScopeWorkflow = 1;
    const ScopeDocument = 2;
    public static function outMode($v)
    {
    }
    public static function outScope($v)
    {
    }
}
class CBPTaskStatus
{
    const Running = 0;
    const CompleteYes = 1;
    const CompleteNo = 2;
    const CompleteOk = 3;
    const Timeout = 4;
    const CompleteCancel = 5;
}
class CBPTaskUserStatus
{
    const Waiting = 0;
    const Yes = 1;
    const No = 2;
    const Ok = 3;
    const Cancel = 4;
    public static function resolveStatus($name)
    {
    }
}
class CBPTaskChangedStatus
{
    const Add = 1;
    const Update = 2;
    const Delegate = 3;
    const Delete = 4;
}
class CBPTaskDelegationType
{
    const Subordinate = 0;
    // default value
    const AllEmployees = 1;
    const None = 2;
    public static function getSelectList()
    {
    }
}