<?php

class CAppleMessage extends \CPushMessage
{
    protected const DEFAULT_PAYLOAD_MAXIMUM_SIZE = 2048;
    protected const APPLE_RESERVED_NAMESPACE = 'aps';
    protected const JSON_OPTIONS = \JSON_HEX_TAG | \JSON_HEX_AMP | \JSON_HEX_APOS | \JSON_HEX_QUOT | \JSON_UNESCAPED_UNICODE;
    protected $_bAutoAdjustLongPayload = \true;
    protected $payloadMaxSize;
    public function __construct($sDeviceToken = \null, $maxPayloadSize = 2048)
    {
    }
    public function setAutoAdjustLongPayload($bAutoAdjust)
    {
    }
    public function getAutoAdjustLongPayload()
    {
    }
    protected function getAlertData()
    {
    }
    protected function _getPayload()
    {
    }
    public function getPayload()
    {
    }
    public function getBatch()
    {
    }
}
class CApplePush extends \CPushService
{
    protected $sandboxModifier;
    protected $productionModifier;
    /**
     * CApplePush constructor.
     */
    public function __construct()
    {
    }
    /**
     * Gets the batch for Apple push notification service
     *
     * @param array $messageData
     *
     * @return bool|string
     */
    public function getBatch($messageData = array())
    {
    }
    /**
     * Returns message instance
     *
     * @param $token
     *
     * @return CAppleMessage
     */
    function getMessageInstance($token)
    {
    }
    /**
     * Gets batch  with ;1; modifier only for sandbox server
     *
     * @param $appMessages
     *
     * @return string
     */
    public function getSandboxBatch($appMessages)
    {
    }
    /**
     * Gets batch  with ;2; modifier only for production server
     *
     * @param $appMessages
     *
     * @return string
     */
    public function getProductionBatch($appMessages)
    {
    }
    public static function shouldBeSent($messageRowData)
    {
    }
}
class CAppleVoipMessage extends \CAppleMessage
{
    protected function getAlertData()
    {
    }
}
class CApplePushVoip extends \CApplePush
{
    /**
     * CApplePushVoip constructor.
     */
    public function __construct()
    {
    }
    /**
     * Returns message instance
     *
     * @param $token
     *
     * @return CAppleMessage
     */
    function getMessageInstance($token)
    {
    }
    public static function shouldBeSent($messageRowData)
    {
    }
}