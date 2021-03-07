<?php

namespace Bitrix\Forum\Comments;

final class WorkflowEntity extends \Bitrix\Forum\Comments\Entity
{
    const ENTITY_TYPE = 'wf';
    const MODULE_ID = 'lists';
    const XML_ID_PREFIX = 'WF_';
    private $hasAccess;
    protected static $permissions = array();
    /**
     * @var integer $userId User Id.
     * @return bool
     */
    public function canRead($userId)
    {
    }
    /**
     * @var integer $userId User Id.
     * @return bool
     */
    public function canAdd($userId)
    {
    }
    /**
     * @var integer $userId User Id.
     * @return bool
     */
    public function canEdit($userId)
    {
    }
    /**
     * @param integer $userId User id.
     * @return bool
     */
    private function checkHasAccess($userId)
    {
    }
}