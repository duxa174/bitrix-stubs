<?php

class CGoogleMessage extends \CPushMessage
{
    const DEFAULT_PAYLOAD_MAXIMUM_SIZE = 4096;
    public function __construct($sDeviceToken = \null)
    {
    }
    /**
     * Returns batch of the message
     * @return string
     */
    public function getBatch()
    {
    }
    public function getPayload()
    {
    }
}
class CGooglePush extends \CPushService
{
    function __construct()
    {
    }
    /**
     * Returns the final batch for the Android's push notification
     *
     * @param array $messageData
     *
     * @return bool|string
     */
    public function getBatch($messageData = array())
    {
    }
    /**
     * Gets message instance
     * @param $token
     *
     * @return CGoogleMessage
     */
    function getMessageInstance($token)
    {
    }
    public static function shouldBeSent($messageRowData)
    {
    }
}
class CGooglePushInteractive extends \CGooglePush
{
    function __construct()
    {
    }
}