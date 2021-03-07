<?php

namespace Bitrix\Main\Security\Mfa;

abstract class OtpAlgorithm
{
    protected static $type = 'undefined';
    protected $digest = 'sha1';
    protected $digits = 6;
    protected $secret = null;
    protected $appScheme = 'otpauth';
    protected $requireTwoCode = true;
    /**
     * Verify provided input
     *
     * @param string $input Input received from user.
     * @param string $params Synchronized user params, saved for this algorithm (see getSyncParameters).
     * @return array [
     *  bool isSuccess (Valid input or not),
     *  string newParams (Updated user params for this OtpAlgorithm)
     * ]
     */
    public abstract function verify($input, $params = null);
    /**
     * Return synchronized user params for provided inputs
     *
     * @param string $inputA First code.
     * @param string|null $inputB Second code. Must be provided if current OtpAlgorithm required it (see isTwoCodeRequired).
     * @throws OtpException
     * @return string
     */
    public abstract function getSyncParameters($inputA, $inputB);
    /**
     * Require or not _two_ code for synchronize parameters
     *
     * @return bool
     */
    public function isTwoCodeRequired()
    {
    }
    /**
     * Set new secret
     *
     * @param string $secret Secret (binary).
     * @return $this
     */
    public function setSecret($secret)
    {
    }
    /**
     * Return used secret (binary)
     *
     * @return string
     */
    public function getSecret()
    {
    }
    /**
     * Generate provision URI according to KeyUriFormat
     *
     * @link https://code.google.com/p/google-authenticator/wiki/KeyUriFormat
     * @param string $label User label.
     * @param array $opts Additional URI parameters, e.g. ['image' => 'http://example.com/my_logo.png'] .
     * @throws \Bitrix\Main\ArgumentTypeException
     * @return string
     */
    public function generateUri($label, array $opts = array())
    {
    }
    /**
     * Main method, generate OTP value for provided counter
     *
     * @param string|int $counter Counter.
     * @return string
     */
    public function generateOTP($counter)
    {
    }
    /**
     * Convert value to byte string with padding
     *
     * @param string|int $value Value for convert. Must be unsigned integer, e.g. 123, '123', '0x7b', etc.
     * @return string
     */
    protected static function toByte($value)
    {
    }
    /**
     * A timing safe comparison method
     *
     * @param string $expected Expected string (e.g. input from user).
     * @param string $actual Actual string (e.g. generated password).
     * @throws ArgumentTypeException
     * @return bool
     */
    protected function isStringsEqual($expected, $actual)
    {
    }
    /**
     * Returns digest algorithm used to calculate the OTP.
     * Mostly used for generate provision URI
     *
     * @return string
     */
    public function getDigest()
    {
    }
    /**
     * Return digits (password length)
     *
     * @return int
     */
    public function getDigits()
    {
    }
    /**
     * Return OtpAlgorithm type
     *
     * @return string
     */
    public function getType()
    {
    }
    /**
     * Return algorithm scheme
     * Mostly used for generate provision URI
     *
     * @return string
     */
    public function getAppScheme()
    {
    }
}