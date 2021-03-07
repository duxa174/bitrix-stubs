<?php

class translate extends \CModule
{
    public $MODULE_ID = 'translate';
    public $MODULE_VERSION;
    public $MODULE_VERSION_DATE;
    public $MODULE_NAME;
    public $MODULE_DESCRIPTION;
    public $MODULE_CSS;
    public $MODULE_GROUP_RIGHTS = 'Y';
    public function __construct()
    {
    }
    /**
     * @return bool
     */
    public function InstallDB()
    {
    }
    /**
     * @return bool
     */
    public function InstallEvents()
    {
    }
    /**
     * @param array $params
     * @return bool
     */
    public function UnInstallDB($params = array())
    {
    }
    /**
     * @return bool
     */
    public function UnInstallEvents()
    {
    }
    /**
     * @return bool
     */
    public function InstallFiles()
    {
    }
    /**
     * @return bool
     */
    public function UnInstallFiles()
    {
    }
    /**
     * @return void
     */
    public function DoInstall()
    {
    }
    /**
     * @return void
     */
    public function DoUninstall()
    {
    }
    /**
     * Event handler 'perfmon::OnGetTableSchema'.
     * @see \CPerfomanceSchema::Init
     * @return array
     */
    function OnGetTableSchema()
    {
    }
}