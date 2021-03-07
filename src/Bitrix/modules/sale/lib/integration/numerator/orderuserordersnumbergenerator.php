<?php

namespace Bitrix\Sale\Integration\Numerator;

/**
 * Class OrderUserOrdersNumberGenerator
 * @package Bitrix\Sale\Integration\Numerator
 */
class OrderUserOrdersNumberGenerator extends \Bitrix\Main\Numerator\Generator\NumberGenerator implements \Bitrix\Main\Numerator\Generator\Contract\DynamicConfigurable
{
    protected $orderId;
    const TEMPLATE_WORD_USER_ID_ORDERS_COUNT = "USER_ID_ORDERS_COUNT";
    /** @inheritdoc */
    public static function getTemplateWordsForParse()
    {
    }
    /** @inheritdoc */
    public static function getTemplateWordsSettings()
    {
    }
    /**
     * @return string
     */
    public static function getAvailableForType()
    {
    }
    /**
     * @return string
     */
    protected function getTableName()
    {
    }
    /** @inheritdoc */
    public function parseTemplate($template)
    {
    }
    /**
     * @param array $config
     */
    public function setDynamicConfig($config)
    {
    }
    /**
     * @return string
     */
    protected function getWordToReplace()
    {
    }
}