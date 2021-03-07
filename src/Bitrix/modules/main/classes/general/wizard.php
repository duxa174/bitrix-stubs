<?php

class CWizardBase
{
    var $wizardName;
    var $wizardSteps;
    var $currentStepID;
    var $firstStepID;
    //attribute 'name' for buttons
    var $nextButtonID;
    var $prevButtonID;
    var $finishButtonID;
    var $cancelButtonID;
    //attribute 'name' for hidden button vars
    var $nextStepHiddenID;
    var $prevStepHiddenID;
    var $finishStepHiddenID;
    var $cancelStepHiddenID;
    var $currentStepHiddenID;
    var $variablePrefix;
    var $formName;
    var $formActionScript;
    var $returnOutput;
    var $defaultVars;
    var $defaultTemplate;
    var $arTemplates;
    var $useAdminTemplate;
    var $package;
    public function __construct($wizardName, $package)
    {
    }
    function AddStep($obStep, $stepID = \null)
    {
    }
    function AddSteps($arClasses)
    {
    }
    function SetTemplate($obStepTemplate, $stepID = \null)
    {
    }
    function DisableAdminTemplate()
    {
    }
    function SetFirstStep($stepID)
    {
    }
    function SetCurrentStep($stepID)
    {
    }
    function GetCurrentStepID()
    {
    }
    /**
     * @return CWizardStep
     */
    function GetCurrentStep()
    {
    }
    function GetWizardSteps()
    {
    }
    function GetVars($useDefault = \false)
    {
    }
    function GetVar($varName, $useDefault = \false)
    {
    }
    function SetVar($varName, $varValue)
    {
    }
    function UnSetVar($varName)
    {
    }
    function __GetComplexVar($varName, &$arVars)
    {
    }
    function __SetComplexVar($varName, $value, &$arVars)
    {
    }
    function __UnSetComplexVar($varName, &$arVars)
    {
    }
    function GetRealName($varName)
    {
    }
    function GetVarPrefix()
    {
    }
    function SetVarPrefix($varPrefix)
    {
    }
    function SetDefaultVar($varName, $varValue)
    {
    }
    function SetDefaultVars($arVars)
    {
    }
    function GetDefaultVar($varName)
    {
    }
    function GetDefaultVars()
    {
    }
    function GetWizardName()
    {
    }
    function SetFormName($formName)
    {
    }
    function GetFormName()
    {
    }
    function SetFormActionScript($actionScript)
    {
    }
    function GetFormActionScript()
    {
    }
    function IsNextButtonClick()
    {
    }
    function IsPrevButtonClick()
    {
    }
    function IsFinishButtonClick()
    {
    }
    function IsCancelButtonClick()
    {
    }
    function SetNextButtonID($buttonID)
    {
    }
    function GetNextButtonID()
    {
    }
    function GetNextStepID()
    {
    }
    function SetPrevButtonID($buttonID)
    {
    }
    function GetPrevButtonID()
    {
    }
    function GetPrevStepID()
    {
    }
    function SetFinishButtonID($buttonID)
    {
    }
    function GetFinishButtonID()
    {
    }
    function GetFinishStepID()
    {
    }
    function SetCancelButtonID($buttonID)
    {
    }
    function GetCancelButtonID()
    {
    }
    function GetCancelStepID()
    {
    }
    function SetReturnOutput($mode = \true)
    {
    }
    function GetPackage()
    {
    }
    function Display()
    {
    }
    function _DisplayStep()
    {
    }
    function __GetStepLayout()
    {
    }
    function __DisplayHiddenVars($arVars, $oStep, $concatString = \null)
    {
    }
    function __ShowError($errorMessage)
    {
    }
    /* Old  compatible Methods*/
    function GetID()
    {
    }
    function GetPath()
    {
    }
    function GetSiteTemplateID()
    {
    }
    function GetSiteGroupID()
    {
    }
    function GetSiteID()
    {
    }
    function GetSiteServiceID()
    {
    }
    /* Old compatible methods */
}
class CWizardStep
{
    var $stepTitle;
    var $stepSubTitle;
    var $stepID;
    var $nextStepID;
    var $prevStepID;
    var $finishStepID;
    var $cancelStepID;
    var $nextCaption;
    var $prevCaption;
    var $finishCaption;
    var $cancelCaption;
    var $displayVars;
    var $stepErrors;
    var $wizard;
    // reference to wizard object
    var $content;
    var $autoSubmit;
    public function __construct()
    {
    }
    /** @deprecated */
    public function CWizardStep()
    {
    }
    //Step initialization
    function InitStep()
    {
    }
    //Step action
    function OnPostForm()
    {
    }
    //Step output
    function ShowStep()
    {
    }
    function SetTitle($title)
    {
    }
    function GetTitle()
    {
    }
    function SetSubTitle($stepSubTitle)
    {
    }
    function GetSubTitle()
    {
    }
    function SetStepID($stepID)
    {
    }
    function GetStepID()
    {
    }
    function SetNextStep($stepID)
    {
    }
    function GetNextStepID()
    {
    }
    function SetNextCaption($caption)
    {
    }
    function GetNextCaption()
    {
    }
    function SetPrevStep($stepID)
    {
    }
    function GetPrevStepID()
    {
    }
    function SetPrevCaption($caption)
    {
    }
    function GetPrevCaption()
    {
    }
    function SetFinishStep($stepID)
    {
    }
    function GetFinishStepID()
    {
    }
    function SetFinishCaption($caption)
    {
    }
    function GetFinishCaption()
    {
    }
    function SetCancelStep($stepID)
    {
    }
    function GetCancelStepID()
    {
    }
    function SetCancelCaption($caption)
    {
    }
    function GetCancelCaption()
    {
    }
    function SetDisplayVars($arVars)
    {
    }
    function DisplayVarExists($varName)
    {
    }
    function GetDisplayVars()
    {
    }
    function SetError($strError, $id = \false)
    {
    }
    function GetErrors()
    {
    }
    //Text and textarea controls
    function ShowInputField($type, $name, $arAttributes = array())
    {
    }
    //Checkbox control
    function ShowCheckboxField($name, $value, $arAttributes = array())
    {
    }
    //Radio button control
    function ShowRadioField($name, $value, $arAttributes = array())
    {
    }
    //Dropdown and multiple controls
    function ShowSelectField($name, $arValues = array(), $arAttributes = array())
    {
    }
    //Hidden control
    function ShowHiddenField($name, $value, $arAttributes = array())
    {
    }
    //File control
    function ShowFileField($name, $arAttributes = array())
    {
    }
    function SaveFile($name, $arRestriction = array())
    {
    }
    function _ShowAttributes($arAttributes)
    {
    }
    /**
     * Returns wizard reference
     *
     * @return CWizardBase
     */
    function GetWizard()
    {
    }
    function _SetWizard($wizard)
    {
    }
    function SetAutoSubmit($bool = \true)
    {
    }
    function IsAutoSubmit()
    {
    }
}
class CWizardTemplate
{
    var $wizard;
    function GetLayout()
    {
    }
    /**
     * Returns wizard reference
     *
     * @return CWizardBase
     */
    function GetWizard()
    {
    }
    function _SetWizard($wizard)
    {
    }
}
class CWizardAdminTemplate extends \CWizardTemplate
{
    function GetLayout()
    {
    }
}