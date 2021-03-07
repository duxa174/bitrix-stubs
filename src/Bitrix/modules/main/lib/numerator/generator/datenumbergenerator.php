<?php

namespace Bitrix\Main\Numerator\Generator;

/**
 * Class DateNumberGenerator - is responsible for parsing date values in numerator's template
 * @package Bitrix\Main\Numerator\Generator
 */
class DateNumberGenerator extends \Bitrix\Main\Numerator\Generator\NumberGenerator
{
    const TEMPLATE_WORD_YEAR = 'YEAR';
    const TEMPLATE_WORD_MONTH = 'MONTH';
    const TEMPLATE_WORD_DAY = 'DAY';
    /** @inheritdoc */
    public static function getTemplateWordsForParse()
    {
    }
    /** @inheritdoc */
    public static function getTemplateWordsSettings()
    {
    }
    /** @inheritdoc */
    public function parseTemplate($template)
    {
    }
    /**
     * @return string
     */
    public static function getAvailableForType()
    {
    }
}