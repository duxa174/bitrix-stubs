<?php

namespace Bitrix\Main\Numerator;

/**
 * Class NumberGeneratorFactory
 * @package Bitrix\Main\Numerator
 */
class NumberGeneratorFactory
{
    const EVENT_GENERATOR_CLASSES_COLLECT = 'onNumberGeneratorsClassesCollect';
    /**
     * returns generator object, created based on its class
     * @param $type
     * @return mixed
     */
    public function createGeneratorByType($type)
    {
    }
    /**
     * returns array where the keys are types of generators
     * and the values are generators classes
     * @return array
     */
    public function getTypeToClassMap()
    {
    }
    /**
     * @return string[]
     */
    private function collectCustomGeneratorClasses()
    {
    }
    /**
     * returns class of generator by its type
     * @param $type
     * @return mixed|null
     */
    public function getClassByType($type)
    {
    }
    /**
     * returns all available generators classes
     * @return array
     */
    public function getClasses()
    {
    }
}