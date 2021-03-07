<?php

namespace Bitrix\Im;

class Chat
{
    const TYPE_SYSTEM = 'S';
    const TYPE_PRIVATE = 'P';
    const TYPE_OPEN = 'O';
    const TYPE_THREAD = 'T';
    const TYPE_GROUP = 'C';
    const TYPE_OPEN_LINE = 'L';
    const STATUS_UNREAD = 0;
    const STATUS_NOTIFY = 1;
    const STATUS_READ = 2;
    const LIMIT_SEND_EVENT = 30;
    const FILTER_LIMIT = 50;
    public static function getTypes()
    {
    }
    public static function getType($chatData)
    {
    }
    public static function getRelation($chatId, $params = [])
    {
    }
    public static function mute($chatId, $action, $userId = null)
    {
    }
    public static function getMessageCount($chatId, $userId = null)
    {
    }
    public static function hasAccess($chatId)
    {
    }
    /**
     * @param $chatId
     * @param null $userId
     * @param array $options
     * @return array|bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getMessages($chatId, $userId = null, $options = array())
    {
    }
    public static function getUsers($chatId, $options = [])
    {
    }
    /**
     * @param $id
     * @param array $params
     * @return array|bool|mixed
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getById($id, $params = array())
    {
    }
    public static function getList($params = array())
    {
    }
    public static function getListParams($params)
    {
    }
    /**
     * Makes user dialog relation visible in left bar and return this new relation
     *
     * @param $dialogId
     * @param $userId
     *
     * @return array|mixed
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function makeRelationShow($dialogId, $userId)
    {
    }
    public static function toJson($array)
    {
    }
    public static function isUserInChat($chatId, $userId = 0) : bool
    {
    }
    public static function isUserKickedFromChat($chatId, $userId = 0) : bool
    {
    }
}