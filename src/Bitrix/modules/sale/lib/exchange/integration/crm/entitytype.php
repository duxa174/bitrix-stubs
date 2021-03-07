<?php

namespace Bitrix\Sale\Exchange\Integration\CRM;

class EntityType
{
    const UNDEFINED = 0;
    const DEAL = 2;
    const CONTACT = 3;
    const COMPANY = 4;
    const ACTIVITY = 6;
    const ORDER = 14;
    const ORDER_SHIPMENT = 16;
    const ORDER_PAYMENT = 17;
    const DEAL_NAME = 'DEAL';
    const CONTACT_NAME = 'CONTACT';
    const COMPANY_NAME = 'COMPANY';
    const ACTIVITY_NAME = 'ACTIVITY';
    const ORDER_NAME = 'ORDER';
    const ORDER_SHIPMENT_NAME = 'ORDER_SHIPMENT';
    const ORDER_PAYMENT_NAME = 'ORDER_PAYMENT';
    public static function isDefined($typeId)
    {
    }
    public static function resolveId($name)
    {
    }
    public static function resolveName($typeId)
    {
    }
}