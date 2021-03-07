<?php

namespace Bitrix\Sale\Location\Normalizer;

/**
 * Normalize due to language specialties
 * Class LanguageNormalizer
 * @package Bitrix\Sale\Location\Normalizer
 */
class LanguageNormalizer implements \Bitrix\Sale\Location\Normalizer\INormalizer
{
    /** @var array Letters to replace */
    protected $letters = [];
    /** @var array Names to replace wholly */
    protected $aliases = [];
    /** @var array Locations types titles */
    protected $titles = [];
    /**
     * LanguageNormalizer constructor.
     * @param string $lang Language id.
     * @param array $langData Language specific data.
     */
    public function __construct($lang = LANGUAGE_ID, array $langData = [])
    {
    }
    /** @inheritdoc */
    public function normalize($string)
    {
    }
    /**
     * @param string $string Location name.
     * @param array $letters Replacements
     * @return string
     */
    protected function replaceLetters($string, array $letters)
    {
    }
    /**
     * @param string $string Location name.
     * @param array $titles Replacements
     * @return string
     */
    protected function replaceTitles($string, $titles)
    {
    }
    /**
     * @param string $string Location name
     * @param array $aliases Replacements
     * @return string
     */
    protected function replaceAliases($string, $aliases)
    {
    }
    /**
     * @param string $lang Language id
     * @return array Language data.
     */
    protected function loadLangData($lang)
    {
    }
    /**
     * @param string $lang Language id.
     * @return string Path to language data file.
     */
    protected function getLangDataFilePath($lang)
    {
    }
    /**
     * @param array $langData Language data.
     */
    public function setLangData($langData)
    {
    }
}