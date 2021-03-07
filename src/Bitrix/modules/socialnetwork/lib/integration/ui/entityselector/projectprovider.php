<?php

namespace Bitrix\Socialnetwork\Integration\UI\EntitySelector;

class ProjectProvider extends \Bitrix\UI\EntitySelector\BaseProvider
{
    public function __construct(array $options = [])
    {
    }
    public function isAvailable() : bool
    {
    }
    public function getItems(array $ids) : array
    {
    }
    public function getSelectedItems(array $ids) : array
    {
    }
    public function fillDialog(\Bitrix\UI\EntitySelector\Dialog $dialog) : void
    {
    }
    public function doSearch(\Bitrix\UI\EntitySelector\SearchQuery $searchQuery, \Bitrix\UI\EntitySelector\Dialog $dialog) : void
    {
    }
    public function getProjectCollection(array $options = []) : \Bitrix\Socialnetwork\EO_Workgroup_Collection
    {
    }
    public function getProjectItems(array $options = []) : array
    {
    }
    public function makeProjectItems(\Bitrix\Socialnetwork\EO_Workgroup_Collection $projects, array $options = []) : array
    {
    }
    public static function getProjects(array $options = []) : \Bitrix\Socialnetwork\EO_Workgroup_Collection
    {
    }
    public static function filterByFeatures(\Bitrix\Socialnetwork\EO_Workgroup_Collection $projects, array $features, int $userId, string $siteId)
    {
    }
    public static function makeItems(\Bitrix\Socialnetwork\EO_Workgroup_Collection $projects, $options = [])
    {
    }
    /**
     * @param EO_Workgroup $project
     * @param array $options
     *
     * @return Item
     */
    public static function makeItem(\Bitrix\Socialnetwork\EO_Workgroup $project, $options = []) : \Bitrix\UI\EntitySelector\Item
    {
    }
    public static function makeUserAvatar(\Bitrix\Socialnetwork\EO_Workgroup $project) : ?string
    {
    }
    public static function getProjectUrl(?int $projectId = null, ?int $currentUserId = null) : string
    {
    }
}