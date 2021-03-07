<?php

namespace Bitrix\Socialnetwork\Copy;

class GroupManager
{
    private $executiveUserId;
    private $groupIdsToCopy = [];
    private $changedFields = [];
    /**
     * @var Feature[]
     */
    private $features = [];
    private $ufIgnoreList = [];
    private $projectTerm = [];
    private $markerUsers = true;
    private $result;
    private $mapIdsCopiedGroups = [];
    public function __construct($executiveUserId, array $groupIdsToCopy)
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
     * To avoid copying specific fields, specify a list of fields to ignore.
     *
     * @param array $ufIgnoreList Ignore list.
     */
    public function setUfIgnoreList(array $ufIgnoreList) : void
    {
    }
    /**
     * Setting the start date of a project to update dates in entities.
     *
     * @param array $projectTerm ["project" => true, "start_point" => "", "end_point" => ""].
     */
    public function setProjectTerm(array $projectTerm)
    {
    }
    public function setMarkerUsers(bool $markerUsers) : void
    {
    }
    public function setChangedFields($changedFields)
    {
    }
    public function startCopy()
    {
    }
    /**
     * Returns the ids map of the copied groups.
     *
     * @return array
     */
    public function getMapIdsCopiedGroups() : array
    {
    }
    private function getContainerCollection()
    {
    }
    private function getGroupImplementer()
    {
    }
    private function getGroupCopier($groupImplementer)
    {
    }
    private function getUserToGroupImplementer()
    {
    }
    private function getUserToGroupCopier($userToGroupImplementer)
    {
    }
}