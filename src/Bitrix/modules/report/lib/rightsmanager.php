<?php

namespace Bitrix\Report;

class RightsManager
{
    const ACCESS_READ = 'access_read';
    const ACCESS_EDIT = 'access_edit';
    const ACCESS_FULL = 'access_full';
    protected $userId;
    public function __construct($userId)
    {
    }
    /**
     * Checks the right to read.
     * @param int $reportId Id report.
     * @return bool
     */
    public function canRead($reportId)
    {
    }
    /**
     * Checks the right to edit.
     * @param int $reportId Id report.
     * @return bool
     */
    public function canEdit($reportId)
    {
    }
    /**
     * Checks the right to delete.
     * @param int $reportId Id report.
     * @return bool
     */
    public function canDelete($reportId)
    {
    }
    /**
     * Checks the right to share.
     * @param int $reportId Id report.
     * @return bool
     */
    public function canShare($reportId)
    {
    }
    /**
     * Returns an array of user groups and departments.
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     */
    public function getGroupsAndDepartments()
    {
    }
    private function isOwner($reportId)
    {
    }
    /**
     * @param $access1
     * @param $access2
     * @return int Returns < 0 if $access1 is less than $access2; > 0
     *    if $access1 is greater than $access2, and 0 if they are equal.
     * @internal
     */
    private function compareAccess($access1, $access2)
    {
    }
}