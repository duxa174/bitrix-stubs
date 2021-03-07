<?php

namespace Bitrix\Main\PhoneNumber;

class MetadataProvider
{
    protected $metadata;
    protected $codeToCountries;
    protected static $instance;
    const PARSED_METADATA_FILENAME = 'metadata.php';
    protected function __construct()
    {
    }
    /**
     * Returns instance of MetadataProvider.
     * @return MetadataProvider
     */
    public static function getInstance()
    {
    }
    /**
     * Returns array of 2-letter country codes of the countries, sharing the specified phone country code.
     * @param string $countryCode Phone country code.
     * @return array
     */
    public function getCountriesByCode($countryCode)
    {
    }
    public function isValidCountryCode($countryCode)
    {
    }
    /**
     * Returns metadata record for the country.
     * @param string $country 2-letter country code.
     * @return array|false
     */
    public function getCountryMetadata($country)
    {
    }
    public function toArray()
    {
    }
    /**
     * Parses google metadata from the PhoneNumberMetadata.xml
     * @see https://github.com/googlei18n/libphonenumber/blob/master/resources/
     * @params string $fileName Metadata file.
     * @return array Returns parsed metadata.
     */
    public static function parseGoogleMetadata($fileName)
    {
    }
    /**
     * Loads parsed metadata.
     * @return void
     * @throws SystemException
     */
    protected function loadMetadata()
    {
    }
}