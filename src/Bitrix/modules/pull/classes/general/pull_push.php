<?php

/**
 * Class CPullPush
 * @deprecated use Bitrix\Pull\Model\PushTable
 * @see \Bitrix\Pull\Model\PushTable
 */
class CPullPush
{
    /**
     * @deprecated use Bitrix\Pull\Model\PushTable::getList
     * @see Bitrix\Pull\Model\PushTable::getList
     * @param array $arOrder
     * @param array $arFilter
     * @param array $arSelect
     * @param array $arNavStartParams
     * @return \Bitrix\Main\DB\Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function GetList($arOrder = [], $arFilter = [], $arSelect = [], $arNavStartParams = [])
    {
    }
    /**
     * @deprecated use Bitrix\Pull\Model\PushTable::add
     * @see Bitrix\Pull\Model\PushTable::add
     * @param array $arFields
     * @return int
     * @throws Exception
     */
    public static function Add($arFields = array())
    {
    }
    public static function getUniqueHash($user_id, $app_id)
    {
    }
    /**
     * @deprecated use Bitrix\Pull\Model\PushTable::update
     * @see Bitrix\Pull\Model\PushTable::update
     * @param $ID
     * @param array $arFields
     * @return int
     * @throws Exception
     */
    public static function Update($ID, $arFields = array())
    {
    }
    /**
     * @deprecated use Bitrix\Pull\Model\PushTable::delete
     * @see Bitrix\Pull\Model\PushTable::delete
     * @param bool $ID
     * @return bool
     * @throws Exception
     */
    public static function Delete($ID = \false)
    {
    }
    public static function cleanTokens()
    {
    }
}
class CPushManager
{
    const SEND_IMMEDIATELY = 'IMMEDIATELY';
    const SEND_IMMEDIATELY_SILENT = 'IMMEDIATELY_SILENT';
    const SEND_DEFERRED = 'DEFERRED';
    const SEND_SKIP = 'SKIP';
    const RECORD_NOT_FOUND = 'NOT_FOUND';
    public const DEFAULT_APP_ID = "Bitrix24";
    public static $pushServices = \false;
    protected static $appAliases = [];
    private $remoteProviderUrl;
    public function __construct()
    {
    }
    public static function DeleteFromQueueByTag($userId, $tag, $appId = self::DEFAULT_APP_ID)
    {
    }
    /**
     * @param $arParams
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function AddQueue($arParams)
    {
    }
    private static function prepareSend($userId, $fields, $type = self::SEND_IMMEDIATELY)
    {
    }
    /**
     * @param $userId
     * @param array $options
     * @param string $appId
     * @return array|bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function GetDeviceInfo($userId, $options = array(), $appId = self::DEFAULT_APP_ID)
    {
    }
    private function getUniqueHashes($userId, $appId)
    {
    }
    private function getAppIDAliases($appId)
    {
    }
    protected function shouldSendMessage(&$message)
    {
    }
    /**
     * @param array $arMessages
     * @param array $arDevices
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function SendMessage($arMessages = [], $arDevices = [])
    {
    }
    public function sendBatch($batch)
    {
    }
    public static function DeleteFromQueueBySubTag($userId, $tag, $appId = self::DEFAULT_APP_ID)
    {
    }
    public static function SendAgent()
    {
    }
    public function getServices()
    {
    }
    public function sendBadges($userId = \null, $appId = self::DEFAULT_APP_ID)
    {
    }
}