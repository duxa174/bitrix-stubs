<?php

namespace Bitrix\Main\Service\GeoIp;

/**
 * Class Base
 * @package Bitrix\Main\Service\GeoIp
 *
 * Base class for geolocation handlers
 */
abstract class Base
{
    protected $id;
    protected $sort;
    protected $active;
    protected $config;
    /**
     * Base constructor.
     * @param array $fields DB fields of handlers settings.
     */
    public function __construct(array $fields = array())
    {
    }
    /**
     * @return int DB record identifier.
     */
    public function getId()
    {
    }
    /**
     * @return int DB field sorting.
     */
    public function getSort()
    {
    }
    /**
     * @return bool Is handler active, or not.
     */
    public function isActive()
    {
    }
    /**
     * @return string Title of handler.
     */
    public abstract function getTitle();
    /**
     * @return string Handler description.
     */
    public abstract function getDescription();
    /**
     * @param string $ip Ip address
     * @param string $lang Language identifier
     * @return Result | null
     */
    public abstract function getDataResult($ip, $lang = '');
    /**
     * Languages supported by handler ISO 639-1
     * @return array
     */
    public function getSupportedLanguages()
    {
    }
    /**
     * Is this handler installed and ready for using.
     * @return bool
     */
    public function isInstalled()
    {
    }
    /**
     * @return array Set of fields description for administration purposes.
     */
    public function getConfigForAdmin()
    {
    }
    /**
     * @param array $postFields  Admin form posted fields during saving process.
     * @return array Field CONFIG for saving to DB in admin edit form.
     */
    public function createConfigField(array $postFields)
    {
    }
    /**
     * @return ProvidingData Geolocation information witch handler can return.
     */
    public function getProvidingData()
    {
    }
}