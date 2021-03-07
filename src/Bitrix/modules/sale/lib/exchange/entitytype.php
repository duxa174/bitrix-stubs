<?php

namespace Bitrix\Sale\Exchange;

class EntityType
{
    const UNDEFINED = 0;
    const ORDER = 1;
    const SHIPMENT = 2;
    const PAYMENT_CASH = 3;
    const PAYMENT_CASH_LESS = 4;
    const PAYMENT_CARD_TRANSACTION = 5;
    const PROFILE = 6;
    const USER_PROFILE = 7;
    const USER_PROFILE_CONTACT_COMPANY = 13;
    const INVOICE = 8;
    const INVOICE_SHIPMENT = 9;
    const INVOICE_PAYMENT_CASH = 10;
    const INVOICE_PAYMENT_CASH_LESS = 11;
    const INVOICE_PAYMENT_CARD_TRANSACTION = 12;
    const FIRST = 1;
    const LAST = 13;
    const ORDER_NAME = 'ORDER';
    const SHIPMENT_NAME = 'SHIPMENT';
    const PAYMENT_CASH_NAME = 'PAYMENT_CASH';
    const PAYMENT_CASH_LESS_NAME = 'PAYMENT_CASH_LESS';
    const PAYMENT_CARD_TRANSACTION_NAME = 'PAYMENT_CARD_TRANSACTION';
    const PROFILE_NAME = 'PROFILE';
    const USER_PROFILE_NAME = 'USER_PROFILE';
    const USER_PROFILE_CONTACT_COMPANY_NAME = 'USER_PROFILE_CONTACT_COMPANY';
    const INVOICE_NAME = 'INVOICE';
    const INVOICE_SHIPMENT_NAME = 'INVOICE_SHIPMENT';
    const INVOICE_PAYMENT_CASH_NAME = 'INVOICE_PAYMENT_CASH';
    const INVOICE_PAYMENT_CASH_LESS_NAME = 'INVOICE_PAYMENT_CASH_LESS';
    const INVOICE_PAYMENT_CARD_TRANSACTION_NAME = 'INVOICE_PAYMENT_CARD_TRANSACTION';
    private static $ALL_DESCRIPTIONS = array();
    /**
     * @param $typeID
     * @return bool
     */
    public static function isDefined($typeID)
    {
    }
    /**
     * @param $name
     * @return int
     */
    public static function resolveID($name)
    {
    }
    /**
     * @param $typeID
     * @return string
     */
    public static function resolveName($typeID)
    {
    }
    /**
     * @return mixed
     */
    public static function getAllDescriptions()
    {
    }
    /**
     * @param $typeID
     * @return string
     */
    public static function getDescription($typeID)
    {
    }
    /**
     * @param $types
     * @return array
     */
    public static function getDescriptions($types)
    {
    }
}