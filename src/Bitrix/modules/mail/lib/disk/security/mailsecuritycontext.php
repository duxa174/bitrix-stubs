<?php

namespace Bitrix\Mail\Disk\Security;

class MailSecurityContext extends \Bitrix\Disk\Security\SecurityContext
{
    /**
     * @param $targetId
     * @return bool
     */
    public function canAdd($targetId)
    {
    }
    /**
     * @param $objectId
     * @return bool
     */
    public function canChangeRights($objectId)
    {
    }
    /**
     * @param $objectId
     * @return bool
     */
    public function canChangeSettings($objectId)
    {
    }
    /**
     * @param $objectId
     * @return bool
     */
    public function canCreateWorkflow($objectId)
    {
    }
    /**
     * @param $objectId
     * @return bool
     */
    public function canDelete($objectId)
    {
    }
    /**
     * @param $objectId
     * @return bool
     */
    public function canMarkDeleted($objectId)
    {
    }
    /**
     * @param $objectId
     * @param $targetId
     * @return bool
     */
    public function canMove($objectId, $targetId)
    {
    }
    /**
     * @param $objectId
     * @return bool
     */
    public function canRead($objectId)
    {
    }
    /**
     * @param $objectId
     * @return bool
     */
    public function canRename($objectId)
    {
    }
    /**
     * @param $objectId
     * @return bool
     */
    public function canRestore($objectId)
    {
    }
    /**
     * @param $objectId
     * @return bool
     */
    public function canShare($objectId)
    {
    }
    /**
     * @param $objectId
     * @return bool
     */
    public function canUpdate($objectId)
    {
    }
    /**
     * @param $objectId
     * @return bool
     */
    public function canStartBizProc($objectId)
    {
    }
    public function getSqlExpressionForList($columnObjectId, $columnCreatedBy)
    {
    }
}