<?php

namespace Sale\Handlers\Delivery\Additional\RusPost;

/**
 * Class Helper
 * @package Sale\Handlers\Delivery\Additional\RusPost
 */
class Helper
{
    /**
     * @param int $deliveryId
     * @param bool $useCache
     * @return array
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getEnabledShippingPointsList($deliveryId, $useCache = true)
    {
    }
    /**
     * @param int $deliveryId
     * @return Result
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getEnabledShippingPointsListResult($deliveryId)
    {
    }
    /**
     * @param \Sale\Handlers\Delivery\AdditionalHandler $deliveryService
     * @return array
     */
    public static function getSelectedShippingPoint($deliveryService)
    {
    }
}