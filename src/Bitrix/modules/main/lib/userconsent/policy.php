<?php

namespace Bitrix\Main\UserConsent;

/**
 * Class Policy
 * @package Bitrix\Main\UserConsent
 */
class Policy
{
    /** @var array  */
    protected static $standardTextForLanguages = array('ru', 'ua');
    /** @var array  */
    protected static $requiredForLanguages = array('ru');
    /**
     * Is consent required for language.
     *
     * @param string $languageId Language ID.
     * @return bool
     */
    public static function isRequired($languageId)
    {
    }
    /**
     * Return true if has standard consent text for language.
     *
     * @param string $languageId Language ID.
     * @return string|null
     */
    public static function hasText($languageId)
    {
    }
    /**
     * Install default.
     *
     * @return void
     */
    public static function installDefault()
    {
    }
}