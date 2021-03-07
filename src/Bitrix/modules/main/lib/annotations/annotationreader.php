<?php

namespace Bitrix\Main\Annotations;

class AnnotationReader
{
    const RULE_FIRST_CAPITAL_LETTER = 0x1;
    protected $collectRules = self::RULE_FIRST_CAPITAL_LETTER;
    /**
     * AnnotationReader constructor.
     */
    public function __construct()
    {
    }
    public function getMethodAnnotations(\ReflectionMethod $method)
    {
    }
    private function extractParameters($string)
    {
    }
    private function extractParameter($valueInString)
    {
    }
}