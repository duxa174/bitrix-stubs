<?php

namespace Bitrix\Sale\Delivery\Restrictions;

/**
 * Class ByUserGroup
 * @package Bitrix\Sale\Delivery\Restrictions
 */
class ByUserGroup extends \Bitrix\Sale\Services\Base\UserGroupRestriction
{
    protected static function getEntityTypeId()
    {
    }
    /**
     * @param Sale\Internals\Entity $entity
     * @return Sale\Order|null
     */
    protected static function getOrder(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
}