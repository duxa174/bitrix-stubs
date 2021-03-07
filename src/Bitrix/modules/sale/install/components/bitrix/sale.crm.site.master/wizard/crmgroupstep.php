<?php

namespace Bitrix\Sale\CrmSiteMaster\Steps;

/**
 * Class CrmGroupStep
 * @package Bitrix\Sale\CrmSiteMaster\Steps
 */
class CrmGroupStep extends \CWizardStep
{
    const ADMIN_USER_GROUP_ID = 1;
    const SELECTED_USER_GROUPS = "~SELECTED_USER_GROUPS";
    const EMPLOYEE_USER_GROUP_ID = "~EMPLOYEE_USER_GROUP_ID";
    private $currentStepName = __CLASS__;
    /** @var \SaleCrmSiteMaster */
    private $component = null;
    /** @var Main\Request */
    private $request;
    /**
     * Check step errors
     */
    private function setStepErrors()
    {
    }
    /**
     * Prepare next/prev buttons
     *
     * @throws \ReflectionException
     */
    private function prepareButtons()
    {
    }
    /**
     * Initialization step id, title and next step
     *
     * @throws Main\SystemException
     * @throws \ReflectionException
     */
    public function initStep()
    {
    }
    /**
     * Show step content
     *
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function showStep()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function onPostForm()
    {
    }
    /**
     * @throws Main\ArgumentOutOfRangeException
     */
    private function saveSelectedGroups()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function setIntranetUserGroups()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function showSelectUserGroupManagerHtml()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function showSelectUserGroupAdminHtml()
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getUserGroupList()
    {
    }
    /**
     * @return array
     */
    public function showButtons()
    {
    }
    /**
     * @return int|null
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getEmployeesGroupId()
    {
    }
    /**
     * @param $crmRoleId
     * @param array $groups
     */
    private function setCrmRole($crmRoleId, array $groups)
    {
    }
    /**
     * @param $name
     * @return int|null
     */
    private function getCrmRoleId($name)
    {
    }
}