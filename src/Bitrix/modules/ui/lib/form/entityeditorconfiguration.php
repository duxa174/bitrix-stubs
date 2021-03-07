<?php

namespace Bitrix\UI\Form;

class EntityEditorConfiguration
{
    protected $categoryName;
    public static function canEditOtherSettings() : bool
    {
    }
    public function __construct(string $categoryName = null)
    {
    }
    protected function getCategoryName() : string
    {
    }
    protected function prepareName(string $configID, string $scope) : string
    {
    }
    protected function prepareScopeName(string $configID) : string
    {
    }
    public static function prepareOptionsName(string $configID, string $scope, int $userScopeId = 0) : string
    {
    }
    public function getScope($configID)
    {
    }
    public function get($configID, $scope)
    {
    }
    public function set($configID, array $config, array $params)
    {
    }
    public function reset($configID, array $params)
    {
    }
    public function setScope($configID, $scope)
    {
    }
    public function forceCommonScopeForAll($configID)
    {
    }
}