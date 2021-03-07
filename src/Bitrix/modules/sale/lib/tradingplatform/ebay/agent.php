<?php

namespace Bitrix\Sale\TradingPlatform\Ebay;

/**
 * Class Agent
 * For periodically exchange data with sftp.
 * @package Bitrix\Sale\TradingPlatform\Ebay
 */
class Agent
{
    /**
     * Starts data exchange.
     * @param $feedType
     * @param $siteId
     * @param string $startPosition
     * @param bool|false $once
     * @return string
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     */
    public static function start($feedType, $siteId, $startPosition = "", $once = false)
    {
    }
    /**
     * @param $feedType
     * @param $siteId
     * @param $interval
     * @param bool|false $once
     * @return bool|int
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     */
    public static function add($feedType, $siteId, $interval, $once = false)
    {
    }
    protected static function createAgentNameForAdd($feedType, $siteId, $once = false)
    {
    }
    /**
     * Update agent's params.
     * @param string $siteId Site id.
     * @param array $feedSettings Feed settings.
     * @return array Feed settings with renew agents ids.
     */
    public static function update($siteId, array $feedSettings)
    {
    }
}