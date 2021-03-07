<?php

namespace Bitrix\Main\Mail;

/**
 * Class Address
 * @package Bitrix\Main\Mail
 */
class Address
{
    /** @var string|null $name Name. */
    protected $name = null;
    /** @var string|null $email Email. */
    protected $email = null;
    private $checkingPunycode;
    /**
     * Return true if is valid.
     *
     * @param string $address Address.
     * @return bool
     */
    public static function isValid($address)
    {
    }
    /**
     * Address constructor.
     * @param null $address
     * @param array $options - possible keys are:
     * 		checkingPunycode - converting domain with non-latin symbols into punycode before validation
     */
    public function __construct($address = null, $options = [])
    {
    }
    public function setCheckingPunycode($checkingPunycode)
    {
    }
    /**
     * Get encoded address.
     *
     * @return null|string
     */
    public function getEncoded()
    {
    }
    /**
     * Get address.
     *
     * @return null|string
     */
    public function get()
    {
    }
    /**
     * Set address.
     *
     * @param null|string $address
     * @return $this
     */
    public function set($address)
    {
    }
    /**
     * Get name.
     *
     * @return null|string
     */
    public function getName()
    {
    }
    /**
     * Set name.
     *
     * @param null|string $name
     * @return $this
     */
    public function setName($name)
    {
    }
    /**
     * Get email.
     *
     * @return null|string
     */
    public function getEmail()
    {
    }
    /**
     * Set email.
     *
     * @param null|string $email
     * @return $this
     */
    public function setEmail($email)
    {
    }
    /**
     * Validate address.
     *
     * @return bool.
     */
    public function validate()
    {
    }
    /**
     * Parse address.
     *
     * @param string $address Address.
     * @return void
     */
    protected function parse($address)
    {
    }
    private function checkMail($email)
    {
    }
    /** Converts domain part to punycode
     * @param $email
     * @return bool|string
     */
    private function convertAddressToPunycode($email)
    {
    }
}