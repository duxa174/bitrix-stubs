<?php

namespace Bitrix\Sale\Basket;

abstract class RefreshStrategy extends \Bitrix\Sale\Basket\BaseRefreshStrategy
{
    /**
     * @param BasketItemBase $item
     * @param                $fields
     *
     * @return Result
     */
    protected function applyRefreshResult(\Bitrix\Sale\BasketItemBase $item, $fields)
    {
    }
    /**
     * @param BasketItemBase $item
     * @param                $bundleItemList
     *
     * @return Result
     */
    protected function applyBundleRefreshResult(\Bitrix\Sale\BasketItemBase $item, $bundleItemList)
    {
    }
}