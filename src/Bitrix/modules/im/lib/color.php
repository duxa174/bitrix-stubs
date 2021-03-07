<?php

namespace Bitrix\Im;

/**
 * Color schema for contacts and chats without avatars
 * @package bitrix
 * @subpackage im
 */
class Color
{
    private static $colors = array('RED' => '#df532d', 'GREEN' => '#64a513', 'MINT' => '#4ba984', 'LIGHT_BLUE' => '#4ba5c3', 'DARK_BLUE' => '#3e99ce', 'PURPLE' => '#8474c8', 'AQUA' => '#1eb4aa', 'PINK' => '#f76187', 'LIME' => '#58cc47', 'BROWN' => '#ab7761', 'AZURE' => '#29619b', 'KHAKI' => '#728f7a', 'SAND' => '#ba9c7b', 'ORANGE' => '#e8a441', 'MARENGO' => '#556574', 'GRAY' => '#909090', 'GRAPHITE' => '#5e5f5e');
    private static $replaceColors = array('LIGHT_BLUE' => 'AZURE', 'AQUA' => 'SAND', 'PINK' => 'KHAKI');
    private static $unsafeColors = array('ORANGE' => '#e8a441');
    /**
     * @return bool
     */
    public static function isEnabled()
    {
    }
    /**
     * @return array
     */
    public static function getColors()
    {
    }
    /**
     * @return array
     */
    public static function getNames()
    {
    }
    /**
     * @return array
     */
    public static function getSafeColors()
    {
    }
    /**
     * @return array
     */
    public static function getSafeColorNames()
    {
    }
    /**
     * @param string $color
     * @return string|null
     */
    public static function getCode($color)
    {
    }
    /**
     * @return array
     */
    public static function getReplaceColors()
    {
    }
    /**
     * @param string $code
     * @return string|null
     */
    public static function getColor($code)
    {
    }
    /**
     * @param string $code
     * @return string|null
     */
    public static function getName($code)
    {
    }
    /**
     * @param int $number
     * @return string
     */
    public static function getColorByNumber($number)
    {
    }
    /**
     * @param int $number
     * @return string
     */
    public static function getNameByNumber($number)
    {
    }
    /**
     * @param int $number
     * @return string
     */
    public static function getCodeByNumber($number)
    {
    }
    public static function isSafeColor($code)
    {
    }
    public static function getRandomColor()
    {
    }
    public static function getRandomCode()
    {
    }
}