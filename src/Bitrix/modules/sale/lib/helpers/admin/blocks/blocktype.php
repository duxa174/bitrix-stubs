<?php

namespace Bitrix\Sale\Helpers\Admin\Blocks;

class BlockType
{
    const UNDEFINED = 0;
    const SHIPMENT_STATUS = 1;
    const SHIPMENT_BASKET = 2;
    const FINANCE_INFO = 3;
    const ADDITIONAL = 4;
    const SHIPMENT = 5;
    const PAYMENT = 6;
    const STATUS = 7;
    const BASKET = 8;
    const BUYER = 9;
    const INFO = 10;
    const MARKER = 11;
    const ANALYSIS = 12;
    const DELIVERY = 13;
    const DISCOUNT = 14;
    const SHIPMENT_BASKET_NAME = "goodsList";
    const SHIPMENT_STATUS_NAME = "shipmentStatus";
    const FINANCE_INFO_NAME = "financeinfo";
    const ADDITIONAL_NAME = "additional";
    const SHIPMENT_NAME = "shipment";
    const PAYMENT_NAME = "payment";
    const STATUS_NAME = "statusorder";
    const BASKET_NAME = "basket";
    const BUYER_NAME = "buyer";
    const INFO_NAME = "";
    const MARKER_NAME = "";
    const ANALYSIS_NAME = "analysis";
    const DELIVERY_NAME = "delivery";
    const DISCOUNT_NAME = "discount";
    const FIRST_TYPE = 1;
    const LAST_TYPE = 14;
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