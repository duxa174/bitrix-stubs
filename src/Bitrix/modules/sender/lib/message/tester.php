<?php

namespace Bitrix\Sender\Message;

class Tester
{
    const MAX_LAST_CODES = 6;
    const MAX_SEND_CODES = 15;
    /** @var Adapter $message Message. */
    protected $message;
    /** @var string $userOptionLastCodesName User option last codes name. */
    protected static $userOptionLastCodesName = 'last_codes';
    /**
     * Checker constructor.
     *
     * @param Adapter $message Message.
     */
    public function __construct(\Bitrix\Sender\Message\Adapter $message)
    {
    }
    /**
     * Is support.
     *
     * @return bool
     */
    public function isSupport()
    {
    }
    /**
     * Get recipient type.
     *
     * @return int|null
     */
    public function getRecipientType()
    {
    }
    /**
     * Get default code.
     *
     * @return null|string
     */
    protected function getDefaultCode()
    {
    }
    /**
     * @return string
     */
    protected function getUserOptionLastCodesName()
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected function getEmailToMeList()
    {
    }
    /**
     * Get last codes.
     *
     * @return array
     */
    public function getLastCodes()
    {
    }
    /**
     * Set last codes.
     *
     * @param array $list Codes.
     * @return void
     */
    protected function setLastCodes(array $list)
    {
    }
    /**
     * Add last code.
     *
     * @param string $code Code.
     * @return bool
     */
    protected function addLastCode($code)
    {
    }
    /**
     * Prepare codes.
     *
     * @param array $codes Codes.
     * @param bool $isRemoveLast Is remove last item.
     * @return array
     */
    protected function cutCodes(array $codes, $isRemoveLast = false)
    {
    }
    /**
     * Prepare codes.
     *
     * @param array $codes Codes.
     * @param bool $doCut Do cut.
     * @return array
     */
    protected function prepareCodes(array $codes, $doCut = true)
    {
    }
    /**
     * Send test message to recipients.
     *
     * @param array $codes Recipient codes.
     * @param array $parameters Parameters.
     * @return Result
     */
    public function send(array $codes, array $parameters)
    {
    }
}