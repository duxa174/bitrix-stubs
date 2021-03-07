<?php

namespace Bitrix\Sale\Exchange\OneC;

/**
 * Class DocumentType
 * @package Bitrix\Sale\Exchange\OneC
 * @deprecated
 */
class DocumentType
{
    const UNDEFINED = 0;
    const ORDER = 1;
    const SHIPMENT = 2;
    const PAYMENT_CASH = 3;
    const PAYMENT_CASH_LESS = 4;
    const PAYMENT_CARD_TRANSACTION = 5;
    const PROFILE = 6;
    const USER_PROFILE = 7;
    const FIRST = 1;
    const LAST = 7;
    const ORDER_NAME = 'ORDER';
    const SHIPMENT_NAME = 'SHIPMENT';
    const PAYMENT_CASH_NAME = 'PAYMENT_CASH';
    const PAYMENT_CASH_LESS_NAME = 'PAYMENT_CASH_LESS';
    const PAYMENT_CARD_TRANSACTION_NAME = 'PAYMENT_CARD_TRANSACTION';
    const PROFILE_NAME = 'PROFILE';
    const USER_PROFILE_NAME = 'USER_PROFILE';
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