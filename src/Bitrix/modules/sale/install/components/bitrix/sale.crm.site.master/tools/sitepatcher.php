<?php

namespace Bitrix\Sale\CrmSiteMaster\Tools;

/**
 * Class SitePatcher
 * @package Bitrix\Sale\CrmSiteMaster\Tools
 */
class SitePatcher
{
    /** @var string */
    const CRM_WIZARD_SITE_ID = "~CRM_WIZARD_SITE_ID";
    const CRM_COMPANY_DEPARTMENT_ID = "~CRM_COMPANY_DEPARTMENT_ID";
    const SELECTED_USER_GROUPS = "~SELECTED_USER_GROUPS";
    const EMPLOYEE_USER_GROUP_ID = "~EMPLOYEE_USER_GROUP_ID";
    const CONFIG_1C = "~CONFIG_1C";
    const FORCE_ENABLE_SELF_HOSTED_COMPOSITE = "force_enable_self_hosted_composite";
    private static $instance;
    private $siteId;
    private $sitePath;
    private $siteDir;
    private $siteName;
    private $serverName;
    /**
     * SitePatcher constructor.
     *
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function __construct()
    {
    }
    /**
     * @return SitePatcher
     */
    public static function getInstance()
    {
    }
    /**
     * Add url rewrite conditions
     *
     * @throws Main\ArgumentNullException
     */
    public function addUrlRewrite()
    {
    }
    /**
     * Delete old extra files
     */
    public function deleteFiles()
    {
    }
    /**
     * @param $dir
     * @param $componentName
     */
    public static function clearCache($dir, $componentName)
    {
    }
    /**
     * Init site fields
     *
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function initSiteFields()
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function getCrmSiteId()
    {
    }
    /**
     * @return mixed
     */
    public function getCrmSiteDir()
    {
    }
    /**
     * @return mixed
     */
    public function getCrmSitePath()
    {
    }
    /**
     * @return mixed
     */
    public function getCrmSiteName()
    {
    }
    public function getCrmServerName()
    {
    }
    /**
     * @param $path
     * @return bool
     */
    private function deleteDirFiles($path)
    {
    }
    /**
     * Set new conditions for template
     *
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws \Exception
     */
    public static function updateSiteTemplateConditions()
    {
    }
    /**
     * Copy dir /docs/ from disk to crm site
     */
    public function patchDisk()
    {
    }
    /**
     * Path module (dav)
     */
    public function patchDav()
    {
    }
    /**
     * Path module (timeman)
     */
    public function patchTimeman()
    {
    }
    /**
     * Path module (meeting)
     */
    public function patchMeeting()
    {
    }
    /**
     * Path module (imconnector)
     *
     * @throws Main\ArgumentOutOfRangeException
     */
    public function patchImconnector()
    {
    }
    /**
     * Path module (imopenlines)
     *
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function patchImopenlines()
    {
    }
    /**
     * Path module (voximplant)
     *
     * @throws Main\ArgumentOutOfRangeException
     */
    public function patchVoximplant()
    {
    }
    /**
     * Path module (mobile)
     */
    public function patchMobile()
    {
    }
    public function patchIm()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function prepareCrmCatalog()
    {
    }
    /**
     * @return bool
     */
    private function isDefaultCatalogExists()
    {
    }
    /**
     * @return int|null
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getCatalogId()
    {
    }
    /**
     * @param $catalogId
     * @throws Main\ArgumentOutOfRangeException
     */
    private function setDefaultProductCatalogId($catalogId)
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function setCrmUserGroups()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     */
    public function setCrmGroupRights()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function addEmployeesToCompanyStructure()
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function getSelectedUserGroups()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     */
    public static function deleteSelectedUserGroups()
    {
    }
    /**
     * @return int|bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function getEmployeesGroupId()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     */
    public static function deleteEmployeesGroupId()
    {
    }
    /**
     * @return int|bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function getCompanyDepartmentId()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     */
    public static function deleteCompanyDepartmentId()
    {
    }
    /**
     * @param $iblockId
     * @return string|null
     */
    private function getIblockTypeID($iblockId)
    {
    }
    /**
     * @param $name
     * @throws Main\ArgumentOutOfRangeException
     */
    public function createDepartment($name)
    {
    }
    /**
     * @return int|null
     */
    private function getDepartmentIblockId()
    {
    }
    /**
     * @param $departmentIblockId
     * @return int|null
     */
    private function getHeadDepartmentSectionId($departmentIblockId)
    {
    }
    /**
     * @param array $groups
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getUserIdList(array $groups)
    {
    }
    /**
     * @param $type
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getCrmGroupIdList($type)
    {
    }
    /**
     * @param array $users
     * @param array $groups
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function addNewGroup(array $users, array $groups)
    {
    }
    /**
     * @param array $users
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getCurrentUserGroupList(array $users)
    {
    }
    /**
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function saveConfig1C()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function retrieveConfig1C()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     */
    public static function disableRegularArchive()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function addSiteToCatalog()
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getCatalogIblockIdList()
    {
    }
    /**
     * @param $catalogIblocIdkList
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getIblockSiteList($catalogIblocIdkList)
    {
    }
    /**
     * Enable composite using option in .settings.php
     */
    public static function enableComposite()
    {
    }
    /**
     * @return bool
     */
    private static function isCanEnableComposite()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function crmShopEnable()
    {
    }
}