<?php

namespace Bitrix\Pull\SharedServer;

class Config
{
    const DEFAULT_SERVER = "rtc-cloud.bitrix.info";
    const HOSTNAME_URL = "/hostname";
    const SERVER_LIST_URL = "/servers";
    const REGISTER_URL = "/register-client/";
    const PUB_URL = "/pub/";
    const SUB_URL = "/subws/";
    const REST_URL = "/rest/";
    const SERVER_ADDRESS = 'shared_server_address';
    const SHARED_SERVER_KEY = 'shared_server_key';
    const IS_REGISTERED_ON_SHARED_SERVER = 'registered_on_shared_server';
    public static function getServerAddress()
    {
    }
    public static function setServerAddress($serverAddress)
    {
    }
    public static function getRegisterUrl()
    {
    }
    /**
     * Returns url for publishing events.
     *
     * @return string
     */
    public static function getPublishUrl()
    {
    }
    /**
     * Returns url for receiving events with long polling transport.
     *
     * @return string
     */
    public static function getLongPollingUrl()
    {
    }
    /**
     * Returns url for receiving events with websocket transport.
     *
     * @return string
     */
    public static function getWebSocketUrl()
    {
    }
    /**
     *
     */
    public static function getWebPublishUrl()
    {
    }
    public static function getServerVersion()
    {
    }
    public static function setSignatureKey($signatureKey)
    {
    }
    public static function getSignatureKey()
    {
    }
    public static function setRegistered($isRegistered)
    {
    }
    public static function isRegistered()
    {
    }
}