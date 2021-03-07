<?php

namespace Bitrix\Main\Web\WebPacker\Resource;

/**
 * Class Profile
 *
 * @package Bitrix\Main\Web\WebPacker
 */
class Profile
{
    const WEBPACKER = 'webpacker';
    const USE_LANG_CAMEL_CASE = 'useLangCamelCase';
    const USE_ALL_LANGS = 'useAllLangs';
    const DELETE_LANG_PREFIXES = 'deleteLangPrefixes';
    const CALL_METHOD = 'callMethod';
    const PROPERTIES = 'properties';
    protected $callMethod = '';
    protected $callParameter = [];
    protected $properties = [];
    protected $useLangCamelCase = false;
    protected $useAllLangs = false;
    protected $language = null;
    protected $deleteLangPrefixes = [];
    /**
     * Profile constructor.
     *
     * @param string $callMethod Call method.
     * @param null|array $callParameter Call parameter.
     */
    public function __construct($callMethod = null, array $callParameter = null)
    {
    }
    /**
     * Add property.
     *
     * @param string $name Name.
     * @param mixed $value Value.
     * @return $this
     */
    public function setProperty($name, $value)
    {
    }
    /**
     * Get property.
     *
     * @param string $code Code.
     * @return mixed
     */
    public function getProperty($code)
    {
    }
    /**
     * Get properties.
     *
     * @return array
     */
    public function getProperties()
    {
    }
    /**
     * Get call method.
     *
     * @return string|null
     */
    public function getCallMethod()
    {
    }
    /**
     * Get call parameter.
     *
     * @return array
     */
    public function getCallParameter()
    {
    }
    /**
     * Set call method.
     *
     * @param string $callMethod Call method.
     * @return $this
     */
    public function setCallMethod($callMethod)
    {
    }
    /**
     * Set parameter.
     *
     * @param array $callParameter Call parameter.
     * @return $this
     */
    public function setCallParameter(array $callParameter)
    {
    }
    /**
     * Use lang camel case.
     *
     * @param bool $use Use.
     * @return $this
     */
    public function useLangCamelCase($use)
    {
    }
    /**
     * Use all languages.
     *
     * @param bool $use Use.
     * @return $this
     */
    public function useAllLangs($use)
    {
    }
    /**
     * Delete lang prefixes.
     *
     * @param array $prefixes Prefixes.
     * @return $this
     */
    public function deleteLangPrefixes($prefixes)
    {
    }
    /**
     * Return true if lang camel case uses.
     *
     * @return bool
     */
    public function isLangCamelCase()
    {
    }
    /**
     * Return true if all langs uses.
     *
     * @return bool
     */
    public function isAllLangs()
    {
    }
    /**
     * Get language.
     *
     * @return string|null
     */
    public function getLanguage()
    {
    }
    /**
     * Set language.
     *
     * @param string|null $language
     * @return $this
     */
    public function setLanguage($language)
    {
    }
    /**
     * Return true if lang prefixes will delete.
     *
     * @return array
     */
    public function getDeleteLangPrefixes()
    {
    }
}