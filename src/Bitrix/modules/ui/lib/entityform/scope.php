<?php

namespace Bitrix\Ui\EntityForm;

/**
 * Class Scope
 * @package Bitrix\Ui\EntityForm
 */
class Scope
{
    protected $user;
    protected static $instance = null;
    /**
     * @return Scope
     */
    public static function getInstance() : \Bitrix\Ui\EntityForm\Scope
    {
    }
    public function getUserScopes(string $entityTypeId, ?string $moduleId = null) : array
    {
    }
    /**
     * @param int $scopeId
     * @return bool
     */
    public function isHasScope(int $scopeId) : bool
    {
    }
    /**
     * @return \CAllUser|\CUser
     */
    protected function getUser()
    {
    }
    private function getScopesIdByUser(?string $moduleId = null) : array
    {
    }
    /**
     * @param int $scopeId
     * @return array|null
     */
    public function getScopeById(int $scopeId) : ?array
    {
    }
    /**
     * @param int $scopeId
     * @return array|null
     */
    public function getById(int $scopeId) : ?array
    {
    }
    /**
     * @param iterable $ids
     * @throws \Exception
     */
    public function removeByIds(iterable $ids) : void
    {
    }
    /**
     * @param int $id
     * @return DeleteResult
     */
    private function removeById(int $id) : \Bitrix\Main\ORM\Data\DeleteResult
    {
    }
    /**
     * Set user option with config scope type and scopeId if selected custom scope
     * @param string $categoryName
     * @param string $guid
     * @param string $scope
     * @param int $userScopeId
     */
    public function setScope(string $categoryName, string $guid, string $scope, int $userScopeId = 0) : void
    {
    }
    public function setScopeConfig(string $category, string $entityTypeId, string $name, array $accessCodes, array $config, string $common)
    {
    }
    public function updateScopeConfig(int $id, array $config)
    {
    }
    /**
     * @param int $configId
     * @param array $accessCodes
     * @return array
     */
    public function updateScopeAccessCodes(int $configId, array $accessCodes = []) : array
    {
    }
    /**
     * @param int $configId
     * @return array
     */
    public function getScopeMembers(int $configId) : array
    {
    }
    /**
     * @param int $configId
     */
    private function removeScopeMembers(int $configId) : void
    {
    }
}