<?php

namespace Bitrix\Scale;

/**
 * Class Provider
 * @package Bitrix\Scale
 */
class Provider
{
    /**
     * @param array $params Params for selection.
     * @return array List of available providers.
     */
    public static function getList($params = array())
    {
    }
    /**
     * @param string $providerId Identifier.
     * @return array Status information.
     * @throws ArgumentNullException
     */
    public static function getStatus($providerId)
    {
    }
    /**
     * @param string $providerId Identifier.
     * @return array Avilable configurations.
     * @throws ArgumentNullException
     */
    public static function getConfigs($providerId)
    {
    }
    /**
     * @param string $providerId Provider identifier.
     * @param string $configId Config idenifier.
     * @return int Task identifier.
     * @throws ArgumentNullException
     */
    public static function sendOrder($providerId, $configId)
    {
    }
    /**
     * @param string $providerId Provider identifier.
     * @param string $taskId Task identifier.
     * @return array Status params.
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getOrderStatus($providerId, $taskId)
    {
    }
    /**
     * @param string $providerId Provider identifier.
     * @return array List of orders.
     * @throws ArgumentNullException
     */
    public static function getOrdersList($providerId = "")
    {
    }
    /**
     * Add host from order to pull.
     * @param string $providerId Provider identifier.
     * @param string $taskId Task identifier.
     * @return int
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function addToPullFromOrder($providerId, $taskId)
    {
    }
}