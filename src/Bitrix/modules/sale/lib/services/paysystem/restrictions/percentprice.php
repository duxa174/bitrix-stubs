<?php

namespace Bitrix\Sale\Services\PaySystem\Restrictions;

class PercentPrice extends \Bitrix\Sale\Services\PaySystem\Restrictions\Price
{
    /**
     * @param $entityParams
     * @param $paramValue
     * @return float
     */
    protected static function getPrice($entityParams, $paramValue)
    {
    }
    /**
     * @return mixed
     */
    public static function getClassTitle()
    {
    }
    /**
     * @return mixed
     */
    public static function getClassDescription()
    {
    }
    /**
     * @param $entityId
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getParamsStructure($entityId = 0)
    {
    }
}