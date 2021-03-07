<?php

namespace Bitrix\Forum\Comments;

final class TimemanEntryEntity extends \Bitrix\Forum\Comments\Entity
{
    const ENTITY_TYPE = 'tm';
    const MODULE_ID = 'timeman';
    const XML_ID_PREFIX = 'TIMEMAN_ENTRY_';
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
    public function canEditOwn($userId)
    {
    }
    /**
     * @var integer $userId User Id.
     * @return bool
     */
    public function canEdit($userId)
    {
    }
}