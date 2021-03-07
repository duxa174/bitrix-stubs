<?php

namespace Bitrix\Sender\Access\Service;

class RoleRelationService implements \Bitrix\Sender\Access\Service\RoleRelationServiceInterface
{
    /**
     * @inheritDoc
     * @throws RoleRelationSaveException
     */
    public function saveRoleRelation(array $settings) : void
    {
    }
    /**
     * @inheritDoc
     */
    public function getRolesByRelations(array $relations) : ?array
    {
    }
    /**
     * @inheritDoc
     * @throws SqlQueryException
     */
    public function deleteRoleRelations(int $roleId) : void
    {
    }
    /**
     * @inheritDoc
     */
    public function getRelationList(array $parameters = []) : ?array
    {
    }
}