<?php

namespace Bitrix\Sale\Services\PaySystem\Restrictions;

class Price extends \Bitrix\Sale\Services\Base\Restriction
{
    /**
     * @param $params
     * @param array $restrictionParams
     * @param int $serviceId
     * @return bool
     */
    public static function check($params, array $restrictionParams, $serviceId = 0)
    {
    }
    /**
     * @param Entity $entity
     * @return array
     */
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
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
    /**
     * @param Payment $payment
     * @param $params
     * @return array
     * @throws ArgumentTypeException
     */
    public static function getRange(\Bitrix\Sale\Payment $payment, $params)
    {
    }
    /**
     * @param $mode
     * @return int
     */
    public static function getSeverity($mode)
    {
    }
}