<?php

namespace Bitrix\Sale\Exchange\Entity;

/**
 * Class EntityImportLoader
 * @package Bitrix\Sale\Exchange\Entity
 * @internal
 */
class EntityImportLoader
{
    /** @var ISettings */
    protected $settings = null;
    /**
     * @return array
     * @throws Main\ArgumentException
     */
    protected static function getFields()
    {
    }
    /**
     * @return string
     */
    protected static function getExternalField()
    {
    }
    /**
     * @param $number
     * @return null
     * @throws Main\ArgumentException
     */
    public function getByNumber($number)
    {
    }
    /**
     * @param $xmlId
     * @return null
     * @throws Main\ArgumentException
     */
    public function getByExternalId($xmlId)
    {
    }
    /**
     * @return Main\Entity\DataManager
     * @throws Main\ArgumentException
     */
    protected static function getEntityTable()
    {
    }
    /**
     * @param ISettings $settings
     */
    public function loadSettings(\Bitrix\Sale\Exchange\ISettings $settings)
    {
    }
}
class OrderImportLoader extends \Bitrix\Sale\Exchange\Entity\EntityImportLoader
{
    protected static function getFields()
    {
    }
    protected static function getEntityTable()
    {
    }
}
class PaymentImportLoader extends \Bitrix\Sale\Exchange\Entity\EntityImportLoader
{
    protected static function getFields()
    {
    }
    protected static function getEntityTable()
    {
    }
}
class ShipmentImportLoader extends \Bitrix\Sale\Exchange\Entity\EntityImportLoader
{
    protected static function getFields()
    {
    }
    protected static function getEntityTable()
    {
    }
}
/**
 * Class ProfileImportLoader
 * @package Bitrix\Sale\Exchange\Entity
 * @deprecated
 */
class ProfileImportLoader extends \Bitrix\Sale\Exchange\Entity\EntityImportLoader
{
    /**
     * @return string
     */
    protected static function getExternalField()
    {
    }
    protected static function getFields()
    {
    }
    protected static function getEntityTable()
    {
    }
}
class UserProfileImportLoader extends \Bitrix\Sale\Exchange\Entity\EntityImportLoader
{
    /**
     * @param $number
     * @return null
     * @throws Main\ArgumentException
     */
    public function getByNumber($number)
    {
    }
    /**
     * @return string
     */
    protected static function getExternalField()
    {
    }
    protected static function getFields()
    {
    }
    protected static function getEntityTable()
    {
    }
    public function getByExternalId($xmlId)
    {
    }
    /**
     * @param $code
     * @return array
     */
    public static function getUserByCode($code)
    {
    }
}
class InvoiceImportLoader extends \Bitrix\Sale\Exchange\Entity\OrderImportLoader
{
    protected static function getEntityTable()
    {
    }
}
class PaymentInvoiceImportLoader extends \Bitrix\Sale\Exchange\Entity\PaymentImportLoader
{
    protected static function getEntityTable()
    {
    }
}
class ShipmentInvoiceImportLoader extends \Bitrix\Sale\Exchange\Entity\ShipmentImportLoader
{
    protected static function getEntityTable()
    {
    }
}