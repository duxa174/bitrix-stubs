<?php

namespace Bitrix\Socialnetwork\Integration\UI\EntitySelector;

class UserProvider extends \Bitrix\UI\EntitySelector\BaseProvider
{
    private const EXTRANET_ROLES = [\Bitrix\Socialnetwork\UserToGroupTable::ROLE_USER, \Bitrix\Socialnetwork\UserToGroupTable::ROLE_OWNER, \Bitrix\Socialnetwork\UserToGroupTable::ROLE_MODERATOR, \Bitrix\Socialnetwork\UserToGroupTable::ROLE_REQUEST];
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
    private function fillRecentUsers(\Bitrix\Main\EO_User_Collection $recentUsers, array $recentIds, \Bitrix\Main\EO_User_Collection $preloadedUsers) : void
    {
    }
    public function doSearch(\Bitrix\UI\EntitySelector\SearchQuery $searchQuery, \Bitrix\UI\EntitySelector\Dialog $dialog) : void
    {
    }
    public function handleBeforeItemSave(\Bitrix\UI\EntitySelector\Item $item) : void
    {
    }
    public function getUserCollection(array $options = []) : \Bitrix\Main\EO_User_Collection
    {
    }
    public function getUserItems(array $options = []) : array
    {
    }
    public function makeUserItems(\Bitrix\Main\EO_User_Collection $users, array $options = []) : array
    {
    }
    public static function isIntranetUser(int $userId = null) : bool
    {
    }
    public static function isExtranetUser(int $userId = null) : bool
    {
    }
    public static function isIntegrator(int $userId = null) : bool
    {
    }
    public static function getUsers(array $options = []) : \Bitrix\Main\EO_User_Collection
    {
    }
    private static function getExtranetUsersQuery(int $currentUserId) : ?\Bitrix\Main\Entity\Query
    {
    }
    public static function getUser(int $userId, array $options = []) : ?\Bitrix\Main\EO_User
    {
    }
    public static function makeItems(\Bitrix\Main\EO_User_Collection $users, array $options = []) : array
    {
    }
    public static function makeItem(\Bitrix\Main\EO_User $user, array $options = []) : \Bitrix\UI\EntitySelector\Item
    {
    }
    public static function getUserType(\Bitrix\Main\EO_User $user) : string
    {
    }
    public static function formatUserName(\Bitrix\Main\EO_User $user, array $options = []) : string
    {
    }
    public static function makeUserAvatar(\Bitrix\Main\EO_User $user) : ?string
    {
    }
    public static function getUserUrl(?int $userId = null) : string
    {
    }
    public static function getExtranetUserUrl(?int $userId = null) : string
    {
    }
    public static function getIntranetUserUrl(?int $userId = null) : string
    {
    }
}