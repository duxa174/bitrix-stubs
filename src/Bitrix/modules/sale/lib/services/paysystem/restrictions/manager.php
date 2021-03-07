<?php

namespace Bitrix\Sale\Services\PaySystem\Restrictions;

class Manager extends \Bitrix\Sale\Services\Base\RestrictionManager
{
    protected static $classNames = null;
    /**
     * @return string
     */
    public static function getEventName()
    {
    }
    /**
     * @return array
     */
    protected static function getBuildInRestrictions()
    {
    }
    /**
     * @return int
     */
    protected static function getServiceType()
    {
    }
    public static function getPriceRange(\Bitrix\Sale\Payment $payment, $paySystemId)
    {
    }
}