<?php

namespace Bitrix\Socialnetwork\Copy\Implement;

class Group extends \Bitrix\Main\Copy\CopyImplementer
{
    const GROUP_COPY_ERROR = "GROUP_COPY_ERROR";
    protected $executiveUserId;
    private $changedFields = [];
    /**
     * @var Feature[]
     */
    private $features = [];
    private $projectTerm = [];
    /**
     * @var UserGroupHelper|null
     */
    private $userGroupHelper = null;
    public function __construct($executiveUserId)
    {
    }
    /**
     * Writes feature implementer to the copy queue.
     *
     * @param Feature $feature Feature implementer.
     */
    public function setFeature(\Bitrix\Socialnetwork\Copy\Integration\Feature $feature)
    {
    }
    /**
     * Setting the start date of a project to update dates in entities.
     *
     * @param array $projectTerm ["start_point" => "", "end_point" => ""].
     */
    public function setProjectTerm(array $projectTerm)
    {
    }
    public function setChangedFields($changedFields)
    {
    }
    /**
     * Record helper object to update the list of moderators when copying.
     *
     * @param UserGroupHelper $userGroupHelper Helper object.
     */
    public function setUserGroupHelper(\Bitrix\Socialnetwork\Copy\Implement\UserGroupHelper $userGroupHelper)
    {
    }
    public function add(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    public function getFields(\Bitrix\Main\Copy\Container $container, $entityId)
    {
    }
    public function prepareFieldsToCopy(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Starts copying children entities.
     *
     * @param Container $container
     * @param int $groupId Group id.
     * @param int $copiedGroupId Copied group id.
     * @return Result
     */
    public function copyChildren(\Bitrix\Main\Copy\Container $container, $groupId, $copiedGroupId)
    {
    }
    private function changeFields(array $fields)
    {
    }
    private function getFieldsProjectTerm($fields)
    {
    }
    private function getRecountFieldsProjectTerm($fields, $startPoint)
    {
    }
    private function prepareExtranetFields(array $fields)
    {
    }
    private function getSiteIds(int $groupId) : array
    {
    }
    private function isExtranetSite(array $siteIds) : bool
    {
    }
    private function copyFeatures(int $groupId, int $copiedGroupId) : void
    {
    }
}