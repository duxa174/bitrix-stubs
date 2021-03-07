<?php

namespace Bitrix\Main\Numerator\Generator;

/**
 * Class PrefixNumberGenerator - replace prefix in numerator template
 * @package Bitrix\Main\Numerator\Generator
 */
class PrefixNumberGenerator extends \Bitrix\Main\Numerator\Generator\NumberGenerator implements \Bitrix\Main\Numerator\Generator\Contract\UserConfigurable
{
    protected $prefix;
    const TEMPLATE_WORD_PREFIX = 'PREFIX';
    /** @inheritdoc */
    public function setConfig($config)
    {
    }
    /** @inheritdoc */
    public function getConfig()
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
    /** @inheritdoc */
    public static function getTemplateWordsForParse()
    {
    }
    /** @inheritdoc */
    public static function getTemplateWordsSettings()
    {
    }
    /** @inheritdoc */
    public static function getSettingsFields()
    {
    }
    /**
     * @return string
     */
    protected static function getPrefixSettingsTitle()
    {
    }
    /** @inheritdoc */
    public function validateConfig($config)
    {
    }
}