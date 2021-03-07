<?php

namespace Bitrix\Sale\TradingPlatform\Ebay;

/**
 * Class Helper
 * Useful methods to work with ebay.
 * @package Bitrix\Sale\TradingPlatform\Ebay
 */
class Helper
{
    /**
     * Checks all necessary extensions etc.
     * @return Result
     * @throws SystemException
     */
    public static function checkEnveronment()
    {
    }
    /**
     * @return string Path to SFTP exchange folders.
     */
    public static function getSftpPath()
    {
    }
    /**
     * Creates filestructure for information exchange via sftp.
     * @return bool
     */
    public static function createFeedFileStructure()
    {
    }
    /**
     * Creates events for sending e-mail.
     * @return bool
     */
    public static function installEvents()
    {
    }
    /**
     * @return array Ebay order statuses.
     */
    public static function getEbayOrderStatuses()
    {
    }
    /**
     * Sends tracknumber to ebay.
     * @param string $orderId Order id.
     * @param string $val "Y"|"N"
     * @return bool
     */
    public static function onSaleDeductOrder($orderId, $val)
    {
    }
    /**
     * @return array Audit types.
     * Before using it needs to execute:
     * RegisterModuleDependences('main', 'OnEventLogGetAuditTypes', 'sale', 'Bitrix\Sale\TradingPlatform\Ebay\Ebay', 'OnEventLogGetAuditTypes');
     */
    public static function OnEventLogGetAuditTypes()
    {
    }
    /**
     * @param string $siteId
     * @return \Bitrix\Sale\TradingPlatform\Sftp
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function getSftp($siteId)
    {
    }
    /**
     * Returns category variations.
     * If variations no found in table get them through API and saves to table.
     * @param string $ebayCategoryId Ebay category id.
     * @param string $siteId Sitte id.
     * @param bool $localInfoOnly Get it from Ebay site if not found in table.
     * @return array
     */
    public static function getEbayCategoryVariations($ebayCategoryId, $siteId, $localInfoOnly = false)
    {
    }
}