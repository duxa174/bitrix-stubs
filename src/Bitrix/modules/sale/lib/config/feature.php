<?php

namespace Bitrix\Sale\Config;

final class Feature
{
    private const DISCOUNT_CONSTRUCTOR = 'sale_discount_constructor';
    private const CUMULATIVE_DISCOUNTS = 'sale_cumulative_discounts';
    private static $bitrix24Included = null;
    private static $featureList = [];
    private static $tranferList = [self::CUMULATIVE_DISCOUNTS => 'CatDiscountSave'];
    private static $retailExist = [self::CUMULATIVE_DISCOUNTS => true];
    private static $bitrix24exist = [self::CUMULATIVE_DISCOUNTS => true, self::DISCOUNT_CONSTRUCTOR => true];
    /** @var array bitrix24 articles about tarif features */
    private static $bitrix24helpCodes = [self::DISCOUNT_CONSTRUCTOR => 'limit_shop_discount_builder', self::CUMULATIVE_DISCOUNTS => 'limit_shop_cumulative_discounts'];
    private static $helpCodesCounter = 0;
    private static $initUi = false;
    public static function isCumulativeDiscountsEnabled()
    {
    }
    public static function isDiscountConstructorEnabled()
    {
    }
    /**
     * Returns url description for help article about cumulative discounts.
     *
     * @return array|null
     */
    public static function getCumulativeDiscountsHelpLink() : ?array
    {
    }
    /**
     * Returns url description for help article about cumulative discounts.
     *
     * @return array|null
     */
    public static function getDiscountConstructorHelpLink() : ?array
    {
    }
    /**
     * Init ui scope for show help links on internal pages.
     *
     * @return void
     */
    public static function initUiHelpScope() : void
    {
    }
    private static function isFeatureEnabled($featureId)
    {
    }
    /**
     * Returns javascript link to bitrx24 feature help article.
     *
     * @param string $featureId
     * @return array|null
     */
    private static function getHelpLink(string $featureId) : ?array
    {
    }
    private static function isBitrix24()
    {
    }
}