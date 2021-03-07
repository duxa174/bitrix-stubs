<?php

namespace Bitrix\Sender\Security;

/**
 * Class Sanitizer
 * @package Bitrix\Sender\Security
 */
class Sanitizer
{
    /**
     * Clean html.
     *
     * @param string $html Html text.
     * @param string $previousHtml Previous html text.
     * @param User $user User instance.
     * @return string|null
     */
    public static function sanitizeHtml($html, $previousHtml = '', \Bitrix\Sender\Security\User $user = null)
    {
    }
    /**
     * Clean html.
     *
     * @param string $html Html text.
     * @return string|null
     */
    public static function cleanHtml($html)
    {
    }
    /**
     * Fix replaced style tags and attributes.
     *
     * @param string $html Html text.
     * @return string|null
     */
    public static function fixReplacedStyles($html)
    {
    }
    /**
     * Fix template styles.
     *
     * @param string $html Html text.
     * @return string|null
     */
    public static function fixTemplateStyles($html)
    {
    }
    /**
     * Remove php from string with checking operations `edit_php` and `lpa_template_edit`.
     *
     * @param string $string String.
     * @param User $user User instance.
     * @return bool
     */
    public static function removePhp($string = '', $previousString, \Bitrix\Sender\Security\User $user = null)
    {
    }
}