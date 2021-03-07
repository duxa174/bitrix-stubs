<?php

namespace Bitrix\Mail\Controller;

abstract class Base extends \Bitrix\Main\Engine\Controller
{
    protected function init()
    {
    }
    protected function sanitize($text)
    {
    }
    /**
     * @param array $array
     * @param int $levels
     * @param int $currentLevel
     * @return array
     */
    protected function convertArrayKeysToCamel(array $array, $levels = 0, $currentLevel = 0)
    {
    }
    /**
     * @param array $array
     * @param int $levels
     * @param int $currentLevel
     * @return array
     */
    protected function convertArrayKeysToUpper(array $array, $levels = 0, $currentLevel = 0)
    {
    }
    /**
     * @param string $string
     * @return string
     */
    protected function toCamelCase($string)
    {
    }
    /**
     * @param string $string
     * @return string
     */
    protected function toUpperCase($string)
    {
    }
}