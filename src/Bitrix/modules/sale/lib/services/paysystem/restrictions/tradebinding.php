<?php

namespace Bitrix\Sale\Services\PaySystem\Restrictions;

/**
 * Class TradeBinding
 * @package Bitrix\Sale\Services\PaySystem\Restrictions
 */
class TradeBinding extends \Bitrix\Sale\Services\Base\TradeBindingRestriction
{
    /**
     * @param Sale\Internals\Entity $entity
     * @return Sale\Order|null
     */
    protected static function getOrder(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
}