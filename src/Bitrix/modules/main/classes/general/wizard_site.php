<?php

class CWizard
{
    var $name;
    var $path;
    var $wizard = \null;
    var $arSites = array();
    var $arTemplates = array();
    var $arTemplateGroups = array();
    var $arServices = array();
    var $arDescription = array();
    var $arStructure = array();
    var $arErrors = array();
    var $pathToScript = \null;
    var $siteID = \null;
    var $templateID = \null;
    var $groupID = \null;
    var $serviceID = array();
    var $structureID = \null;
    var $licenseExists = \false;
    var $siteExists = \false;
    var $groupExists = \false;
    var $templateExists = \false;
    var $serviceExists = \false;
    var $structureExists = \false;
    var $siteSelected = \false;
    var $templateSelected = \false;
    var $serviceSelected = \false;
    var $structureSelected = \false;
    var $__bInited = \false;
    var $__obLastStep = \null;
    var $__obFirstStep = \null;
    public function __construct($wizardName)
    {
    }
    /** @deprecated */
    public function CWizard($wizardName)
    {
    }
    function Install()
    {
    }
    function __Install()
    {
    }
    function __SetTemplate()
    {
    }
    function __InitVariables()
    {
    }
    function _SetNextStep($obStep, $currentStep, $stepType = "select")
    {
    }
    function _InitSubStep($stepType, &$arInstallation, $bInitStep = \true)
    {
    }
    function __GetUserStep($stepName, &$step)
    {
    }
    function __SetStepDescription($obStep, $stepName)
    {
    }
    function __GetLicensePath()
    {
    }
    function __PackageError()
    {
    }
    function __GetDescription()
    {
    }
    function __CheckDepends()
    {
    }
    function __GetSites()
    {
    }
    function __GetTemplatesPath()
    {
    }
    function __GetTemplates()
    {
    }
    function __GetInstallationScript()
    {
    }
    function __GetServices()
    {
    }
    function __GetStructure()
    {
    }
    function __InstallSite($siteID)
    {
    }
    function __InstallTemplate($templateID)
    {
    }
    function __InstallService($serviceID)
    {
    }
    function __InstallStructure()
    {
    }
    function __GetPageProperties($pageID, &$arStructure)
    {
    }
    function __GetNewStructure($structureID, &$arStructure)
    {
    }
    function __MoveDirFiles(&$arFiles)
    {
    }
    /* Public methods */
    function GetID()
    {
    }
    function GetPath()
    {
    }
    function SetError($strError, $id = \false)
    {
    }
    function GetErrors()
    {
    }
    /* Public site builder methods*/
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
    function GetDescription()
    {
    }
    function GetTemplateGroups($arFilter = array())
    {
    }
    function GetTemplates($arFilter = array())
    {
    }
    function GetServices($arFilter = array())
    {
    }
    function GetStructure($arFilter = array())
    {
    }
    function IncludeWizardLang($relativePath = "", $lang = \false)
    {
    }
}