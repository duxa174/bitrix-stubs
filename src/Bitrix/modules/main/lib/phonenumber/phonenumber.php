<?php

namespace Bitrix\Main\PhoneNumber;

class PhoneNumber
{
    protected $rawNumber;
    protected $country;
    protected $valid = false;
    protected $countryCode;
    protected $nationalNumber;
    protected $nationalPrefix;
    protected $hasPlus = false;
    protected $numberType;
    protected $extension = '';
    protected $extensionSeparator;
    protected $international = false;
    public function format($formatType = '', $forceNationalPrefix = false)
    {
    }
    /**
     * @return string
     */
    public function getRawNumber()
    {
    }
    /**
     * @param string $rawNumber
     */
    public function setRawNumber($rawNumber)
    {
    }
    /**
     * @return mixed
     */
    public function getCountry()
    {
    }
    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
    }
    /**
     * @return string
     */
    public function getNationalNumber()
    {
    }
    /**
     * @param string $nationalNumber
     */
    public function setNationalNumber($nationalNumber)
    {
    }
    /**
     * @return mixed
     */
    public function getNumberType()
    {
    }
    /**
     * @param mixed $numberType
     */
    public function setNumberType($numberType)
    {
    }
    /**
     * @return bool
     */
    public function isValid()
    {
    }
    /**
     * @param bool $valid
     */
    public function setValid($valid)
    {
    }
    /**
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
    }
    public function getCountryCode()
    {
    }
    public function hasExtension()
    {
    }
    /**
     * @return string
     */
    public function getExtension()
    {
    }
    /**
     * @param string $extension
     */
    public function setExtension($extension)
    {
    }
    /**
     * @return mixed
     */
    public function getExtensionSeparator()
    {
    }
    /**
     * @param mixed $extensionSeparator
     */
    public function setExtensionSeparator($extensionSeparator)
    {
    }
    /**
     * @return bool
     */
    public function isInternational()
    {
    }
    /**
     * @param bool $international
     */
    public function setInternational($international)
    {
    }
    /**
     * @return string
     */
    public function getNationalPrefix()
    {
    }
    /**
     * @param string $nationalPrefix
     */
    public function setNationalPrefix($nationalPrefix)
    {
    }
    /**
     * @return bool
     */
    public function hasPlus()
    {
    }
    /**
     * @param bool $hasPlus
     */
    public function setHasPlus($hasPlus)
    {
    }
}