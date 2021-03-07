<?php

class SelectSiteStep extends \CSelectSiteWizardStep
{
    function InitStep()
    {
    }
}
class SelectTemplateStep extends \CSelectTemplateWizardStep
{
}
class SelectThemeStep extends \CSelectThemeWizardStep
{
}
class SiteSettingsStep extends \CSiteSettingsWizardStep
{
    function InitStep()
    {
    }
    function ShowStep()
    {
    }
    function OnPostForm()
    {
    }
}
class DataInstallStep extends \CDataInstallWizardStep
{
    function CorrectServices(&$arServices)
    {
    }
}
class FinishStep extends \CFinishWizardStep
{
}