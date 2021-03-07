<?php

namespace Bitrix\Im;

class Janus
{
    const PLUGIN_VIDEOROOM = 'janus.plugin.videoroom';
    const USER_AGENT = 'Bitrix IM';
    protected static $serverAddress = 'https://testphone.bitrix.info:8089/janus';
    protected static $apiSecret = 'eaff35df4cf027ffb36300d9b9604d8f';
    //protected static $serverAddress = 'https://cp.perevozov.bx:8089/janus';
    //protected static $apiSecret = 'bitrix';
    protected $transaction = null;
    protected $sessionId = '';
    protected $pluginEndpoints = array();
    public function __construct()
    {
    }
    /**
     * @param array $config
     * @return string|false Returns room id or false in case of failure
     */
    public function createRoom(array $config = array())
    {
    }
    /**
     * @return Result
     */
    public function login()
    {
    }
    /**
     * @return bool
     */
    protected function isLogged()
    {
    }
    /**
     * @param string $pluginName
     * @return Result
     */
    public function attachToPlugin($pluginName)
    {
    }
    /**
     * @param $pluginName
     * @return bool
     */
    protected function isAttachedToPlugin($pluginName)
    {
    }
    /**
     * @param array $request
     * @param string $pluginName
     * @return Result
     */
    protected function query(array $request, $pluginName = '')
    {
    }
    /**
     * @return string
     */
    public static function getServerAddress()
    {
    }
    /**
     * @return string
     */
    public static function getApiSecret()
    {
    }
}