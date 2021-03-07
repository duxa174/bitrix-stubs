<?php

namespace Bitrix\Main\UserConsent;

/**
 * Class Intl
 * @package Bitrix\Main\UserConsent
 */
class Intl
{
    /** @var string|null  */
    protected $languageId = null;
    /** @var array  */
    protected $data = [];
    /** @var array  */
    protected static $virtualLanguageMap = ['kz' => 'ru', 'by' => 'ru'];
    /**
     * Constructor.
     *
     * @param string $languageId Language ID.
     */
    public function __construct($languageId = null)
    {
    }
    /**
     * Load.
     *
     * @param string $languageId Language ID.
     * @return void
     */
    public function load($languageId)
    {
    }
    /**
     * Return standard fields for current language.
     *
     * @return array
     */
    public function getFields()
    {
    }
    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
    }
    /**
     * Get label text.
     *
     * @return string
     */
    public function getLabelText()
    {
    }
    /**
     * Get label text.
     *
     * @return string
     */
    public function getNotifyText()
    {
    }
    /**
     * Get phrase.
     *
     * @param string $code Phrase code.
     * @return string
     */
    public function getPhrase($code)
    {
    }
    /**
     * Get data value by code.
     *
     * @param string $code Data code.
     * @return string
     */
    public function getDataValue($code)
    {
    }
    /**
     * Get list of language settings.
     *
     * @return array
     */
    public static function getList()
    {
    }
    /**
     * Get languages.
     *
     * @return array
     */
    public static function getLanguages()
    {
    }
    /**
     * Get provider fields.
     *
     * @param string $languageId Language ID.
     * @param array $map Message key map.
     * @return array
     */
    public static function getLanguageMessages($languageId, array $map = array())
    {
    }
}