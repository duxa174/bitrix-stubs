<?php

namespace Bitrix\Sale\Integration\Numerator;

/**
 * Class OrderIdNumberGenerator
 * @package Bitrix\Sale\Integration\Numerator
 */
class OrderIdNumberGenerator extends \Bitrix\Main\Numerator\Generator\NumberGenerator implements \Bitrix\Main\Numerator\Generator\Contract\DynamicConfigurable
{
    protected $orderId;
    const TEMPLATE_WORD_ORDER_ID = "ORDER_ID";
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
}