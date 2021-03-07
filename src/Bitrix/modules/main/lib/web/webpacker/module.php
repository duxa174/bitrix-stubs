<?php

namespace Bitrix\Main\Web\WebPacker;

/**
 * Class Module
 *
 * @package Bitrix\Main\Web\WebPacker
 */
class Module
{
    /** @var string $name */
    protected $name;
    /** @var Resource\Package $package */
    protected $package;
    /** @var Resource\Profile $profile */
    protected $profile;
    /**
     * Module constructor.
     *
     * @param @var string $name Name.
     * @param Resource\Package|null $package Resource package.
     * @param Resource\Profile|null $profile Profile.
     */
    public function __construct($name, \Bitrix\Main\Web\WebPacker\Resource\Package $package = null, \Bitrix\Main\Web\WebPacker\Resource\Profile $profile = null)
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
     * Set resource package.
     *
     * @param Resource\Package $package Resource package.
     * @return $this
     */
    public function setPackage(\Bitrix\Main\Web\WebPacker\Resource\Package $package)
    {
    }
    /**
     * Get package.
     *
     * @return Resource\Package|null
     */
    public function getPackage()
    {
    }
    /**
     * Set profile.
     *
     * @param Resource\Profile $profile Profile.
     * @return $this
     */
    public function setProfile(\Bitrix\Main\Web\WebPacker\Resource\Profile $profile)
    {
    }
    /**
     * Get profile.
     *
     * @return Resource\Profile|null
     */
    public function getProfile()
    {
    }
    /**
     * To string.
     *
     * @return string
     */
    public function __toString()
    {
    }
}