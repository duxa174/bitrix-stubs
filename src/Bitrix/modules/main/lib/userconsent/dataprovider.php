<?php

namespace Bitrix\Main\UserConsent;

/**
 * Class DataProvider.
 * @package Bitrix\Main\UserConsent
 */
class DataProvider
{
    const EVENT_NAME_LIST = 'OnUserConsentDataProviderList';
    /** @var string  */
    protected $code;
    /** @var string  */
    protected $name;
    /** @var array|callable  */
    protected $data;
    /** @var string */
    protected $editUrl;
    /**
     * Create instance.
     *
     * @param string $providerCode Provider code.
     * @return static|null
     */
    public static function getByCode($providerCode)
    {
    }
    /**
     * Constructor.
     *
     * @param string $code Code.
     * @param string $name Name.
     * @param array|callable $data Data.
     * @param string $editUrl Url to data edit page.
     * @param array|callable $data Data.
     */
    public function __construct($code, $name, $data, $editUrl)
    {
    }
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Get edit url.
     *
     * @return string
     */
    public function getEditUrl()
    {
    }
    /**
     * Get data.
     *
     * @return array
     */
    public function getData()
    {
    }
    /**
     * Get as array.
     *
     * @return array
     */
    public function toArray()
    {
    }
    /**
     * Get list.
     *
     * @return static[]
     */
    public static function getList()
    {
    }
    protected static function checkObligatoryFields($params)
    {
    }
}