<?php

namespace Bitrix\Sale\Services\Company\Restrictions;

/**
 * Class Site
 * @package Bitrix\Sale\Services\Company\Restrictions
 */
class Site extends \Bitrix\Sale\Services\Base\SiteRestriction
{
    /**
     * @param Internals\Entity $entity
     * @return Internals\Entity|Order|null
     */
    protected static function getOrder(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
}