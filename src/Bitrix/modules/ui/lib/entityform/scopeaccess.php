<?php

namespace Bitrix\Ui\EntityForm;

class ScopeAccess
{
    public const SETTINGS_ENTITYFORM_SCOPE_KEY = 'entityFormScope';
    public const SETTINGS_ACCESS_CLASS_KEY = 'access';
    protected $userId;
    protected $moduleId;
    public function __construct(string $moduleId = null, int $userId = null)
    {
    }
    protected function getDefaultUserId() : int
    {
    }
    public static function getInstance(string $moduleId, int $userId = null) : \Bitrix\Ui\EntityForm\ScopeAccess
    {
    }
    public function canRead(int $scopeId) : bool
    {
    }
    public function canAdd() : bool
    {
    }
    public function canUpdate(int $scopeId) : bool
    {
    }
    public function canDelete($scopeIds) : bool
    {
    }
    public function isAdmin() : bool
    {
    }
}