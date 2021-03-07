<?php

namespace Bitrix\Main\Numerator\Generator;

/**
 * Class NumberGenerator
 * @package Bitrix\Main\Numerator
 */
abstract class NumberGenerator
{
    const USER_DEFINED_SYMBOL_START = '{USER_DEFINED:';
    const USER_DEFINED_SYMBOL_END = '}';
    const SYMBOL_START = '{';
    const SYMBOL_END = '}';
    /** replace specific symbol (that generator is responsible for)
     * with some string by internal logic
     * @param $template
     * @return string after parse
     */
    public abstract function parseTemplate($template);
    /** Must not affect internal counters and keep storage value unchanged,
     * by default - same logic as in parseTemplate
     * @param $template
     * @return string
     */
    public function parseTemplateForPreview($template)
    {
    }
    /**
     * return type of numerator that this generator can work with
     * @throws NotImplementedException
     */
    public static function getAvailableForType()
    {
    }
    /**
     * return array of words that can be parsed by generator
     * @throws NotImplementedException
     */
    public static function getTemplateWordsForParse()
    {
    }
    /**
     * return array, where keys are words of generator
     * and values are corresponding titles for showing to end user for each word
     * e.g. {PREFIX} => 'prefix'
     * @throws NotImplementedException
     */
    public static function getTemplateWordsSettings()
    {
    }
    /**
     * in case of inheritance (adding new custom generator)
     * you should register this function of your class as module Dependency
     * for module 'main' and event NumberGeneratorFactory::EVENT_GENERATOR_CLASSES_COLLECT
     * @see NumberGeneratorFactory::EVENT_GENERATOR_CLASSES_COLLECT
     * @return string - static class name
     */
    public function onGeneratorClassesCollect()
    {
    }
    /**
     * @return string
     */
    public static function getType()
    {
    }
    /**
     * @param $value
     * @param $config
     * @param null $default
     * @param null $type
     */
    protected function setFromArrayOrDefault($value, $config, $default = null, $type = null)
    {
    }
    /**
     * @param $word
     * @return string
     */
    protected static function getPatternFor($word)
    {
    }
}