<?php

namespace Bitrix\Main\Security\Mfa;

class TotpAlgorithm extends \Bitrix\Main\Security\Mfa\OtpAlgorithm
{
    const SYNC_WINDOW = 180;
    protected static $type = 'totp';
    protected $interval = 30;
    // ToDo: option here! May be just merge with HOTP window?
    protected $window = 2;
    protected $requireTwoCode = false;
    public function __construct()
    {
    }
    /**
     * @inheritDoc
     */
    public function verify($input, $params = null, $time = null)
    {
    }
    /**
     * @inheritDoc
     */
    public function generateUri($label, array $opts = array())
    {
    }
    /**
     * Make OTP counter from provided timestamp
     *
     * @param int $timestamp Timestamp.
     * @return int
     */
    public function timecode($timestamp)
    {
    }
    /**
     * @param int $interval
     * @return $this
     */
    public function setInterval($interval)
    {
    }
    /**
     * Return used interval in counter generation
     *
     * @return int
     */
    protected function getInterval()
    {
    }
    /**
     * @param int $window
     * @return $this
     */
    public function setWindow($window)
    {
    }
    /**
     * @inheritDoc
     */
    public function getSyncParameters($inputA, $inputB)
    {
    }
}