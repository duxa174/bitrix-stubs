<?php

namespace Bitrix\Sale\Services\Company\Restrictions;

class Manager extends \Bitrix\Sale\Services\Base\RestrictionManager
{
    protected static $classNames = null;
    /**
     * @param array $parameters
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     */
    public static function getList(array $parameters)
    {
    }
    /**
     * @return array
     */
    protected static function getBuildInRestrictions()
    {
    }
    /**
     * @return string
     */
    public static function getEventName()
    {
    }
    /**
     * @return int
     */
    protected static function getServiceType()
    {
    }
}