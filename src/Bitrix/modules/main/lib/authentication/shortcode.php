<?php

namespace Bitrix\Main\Authentication;

class ShortCode
{
    /** @var Context */
    protected $context;
    protected $type;
    /** @var Internal\EO_UserAuthCode */
    protected $code;
    protected $checkInterval = 300;
    //seconds, a half of the real time window
    protected $resendInterval = 60;
    //seconds
    /**
     * ShortCode constructor.
     * @param Context $context Contains userId
     * @param string $type Currently 'email' only
     */
    public function __construct(\Bitrix\Main\Authentication\Context $context, $type = \Bitrix\Main\Authentication\Internal\UserAuthCodeTable::TYPE_EMAIL)
    {
    }
    /**
     * Generates a 6-number code.
     * @return bool|string
     */
    public function generate()
    {
    }
    /**
     * Verifies the 6-number code.
     * @param string $code
     * @return Main\Result
     */
    public function verify($code)
    {
    }
    /**
     * Checks if previous dispatch time is outside the interval.
     * @return Main\Result
     */
    public function checkDateSent()
    {
    }
    /**
     * Saves last sent date.
     * @return bool
     */
    public function saveDateSent()
    {
    }
    /**
     * @return Main\EO_User
     */
    public function getUser()
    {
    }
    /**
     * @param int $userId
     */
    public static function deleteByUser($userId)
    {
    }
    protected function load()
    {
    }
}