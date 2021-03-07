<?php

namespace Bitrix\Sale\Services\PaySystem\Restrictions;

/**
 * Class Site
 * @package Bitrix\Sale\Services\PaySystem\Restrictions
 */
class Site extends \Bitrix\Sale\Services\Base\SiteRestriction
{
    /**
     * @param Sale\Internals\Entity $entity
     * @return Sale\Order|null
     */
    protected static function getOrder(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
}