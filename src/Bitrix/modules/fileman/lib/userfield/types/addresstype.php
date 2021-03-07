<?php

namespace Bitrix\Fileman\UserField\Types;

/**
 * Class AddressType
 * @package Bitrix\Fileman\UserField\Types
 */
class AddressType extends \Bitrix\Main\UserField\Types\BaseType
{
    public const USER_TYPE_ID = 'address', RENDER_COMPONENT = 'bitrix:fileman.field.address', BITRIX24_RESTRICTION = 100, BITRIX24_RESTRICTION_CODE = 'uf_address';
    protected static $restrictionCount = null;
    public static function getDescription() : array
    {
    }
    /**
     * @return string|null
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws LoaderException
     */
    public static function getApiKey() : ?string
    {
    }
    /**
     * @return string
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws LoaderException
     */
    public static function getApiKeyHint() : string
    {
    }
    /**
     * @return array|null
     * @throws LoaderException
     */
    public static function getTrialHint() : ?array
    {
    }
    /**
     * @return bool
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws LoaderException
     */
    public static function canUseMap() : bool
    {
    }
    /**
     * @return bool
     * @throws LoaderException
     */
    public static function checkRestriction() : bool
    {
    }
    /**
     * @return bool
     * @throws LoaderException
     */
    public static function useRestriction() : bool
    {
    }
    public static function getDbColumnType() : string
    {
    }
    public static function prepareSettings(array $userField) : array
    {
    }
    public static function checkFields(array $userField, $value) : array
    {
    }
    /**
     * @param array $userField
     * @param $value
     * @return string|null
     * @throws LoaderException
     */
    public static function onBeforeSave(array $userField, $value)
    {
    }
    /**
     * @param string|null $value
     * @return array
     */
    public static function parseValue(?string $value) : array
    {
    }
    /**
     * @param null|array $userField
     * @param array $additionalSettings
     * @return array
     */
    public static function getFilterData(?array $userField, array $additionalSettings) : array
    {
    }
    /**
     * @param array $userField
     * @return string|null
     */
    public static function onSearchIndex(array $userField) : ?string
    {
    }
}