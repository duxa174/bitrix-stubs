<?php

namespace Bitrix\Main\UI;

class Copyright
{
    const LICENCE_MIT = "MIT";
    const LICENCE_COMMERCIAL = "Commercial";
    const LICENCE_PUBLIC_DOMAIN = "Public Domain";
    const LICENCE_BSD2 = "2-Clause BSD";
    const LICENCE_BSD3 = "3-Clause BSD";
    const LICENCE_APACHE2 = "Apache License, Version 2.0";
    const LICENCE_W3C = "W3C License";
    const LICENSE_GPLV2 = "General Public License, version 2";
    const LICENCE_CUSTOM = "License";
    protected $productName, $productUrl, $copyright, $copyrightUrl, $vendorName, $vendorUrl, $supportUrl, $licence, $licenceUrl, $licenceText;
    public function __construct($productName)
    {
    }
    /**
     * Returns the product info.
     * @return static
     */
    public static function getBitrixCopyright()
    {
    }
    /**
     * @return mixed
     */
    public function getProductName()
    {
    }
    /**
     * @return mixed
     */
    public function getProductUrl()
    {
    }
    /**
     * @return mixed
     */
    public function getCopyright()
    {
    }
    /**
     * @return mixed
     */
    public function getCopyrightUrl()
    {
    }
    /**
     * @return mixed
     */
    public function getVendorName()
    {
    }
    /**
     * @return mixed
     */
    public function getVendorUrl()
    {
    }
    /**
     * @return mixed
     */
    public function getSupportUrl()
    {
    }
    /**
     * @return mixed
     */
    public function getLicence()
    {
    }
    /**
     * @return mixed
     */
    public function getLicenceUrl()
    {
    }
    /**
     * @return mixed
     */
    public function getLicenceText()
    {
    }
    /**
     * @param mixed $productName
     * @return static
     */
    public function setProductName($productName)
    {
    }
    /**
     * @param mixed $productUrl
     * @return static
     */
    public function setProductUrl($productUrl)
    {
    }
    /**
     * @param mixed $copyright
     * @return static
     */
    public function setCopyright($copyright)
    {
    }
    /**
     * @param mixed $copyrightUrl
     * @return static
     */
    public function setCopyrightUrl($copyrightUrl)
    {
    }
    /**
     * @param mixed $vendorName
     * @return static
     */
    public function setVendorName($vendorName)
    {
    }
    /**
     * @param mixed $vendorUrl
     * @return static
     */
    public function setVendorUrl($vendorUrl)
    {
    }
    /**
     * @param mixed $supportUrl
     * @return static
     */
    public function setSupportUrl($supportUrl)
    {
    }
    /**
     * @param mixed $licence
     * @return static
     */
    public function setLicence($licence)
    {
    }
    /**
     * @param mixed $licenceUrl
     * @return Copyright
     */
    public function setLicenceUrl($licenceUrl)
    {
    }
    /**
     * @param mixed $licenceText
     * @return static
     */
    public function setLicenceText($licenceText)
    {
    }
    /**
     * Returns the array of third-party software components, sorted alphabetically.
     * @return static[]
     */
    public static function getThirdPartySoftware()
    {
    }
    protected static function getMainThirdParty()
    {
    }
}