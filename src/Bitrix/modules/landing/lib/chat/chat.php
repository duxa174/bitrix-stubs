<?php

namespace Bitrix\Landing\Chat;

class Chat extends \Bitrix\Landing\Internals\BaseTable
{
    /**
     * Internal class.
     * @var string
     */
    public static $internalClass = 'ChatTable';
    /**
     * Check file id and returns id.
     * @param int $avatarId Avatar (file) id.
     * @return int
     */
    protected static function getAvatarId($avatarId)
    {
    }
    /**
     * Creates new record and return it.
     * @param array $fields Fields array.
     * @return \Bitrix\Main\ORM\Data\AddResult
     */
    public static function add($fields)
    {
    }
    /**
     * Returns records of table.
     * @param array $params Params array like ORM style.
     * @return \Bitrix\Main\DB\Result
     */
    public static function getList($params = [])
    {
    }
    /**
     * Return chat row by id.
     * @param int $id Chat id.
     * @return array
     */
    public static function getRow($id) : array
    {
    }
    /**
     * Updates record.
     * @param int $id Record key.
     * @param array $fields Fields array.
     * @return \Bitrix\Main\Result
     */
    public static function update($id, $fields = [])
    {
    }
    /**
     * Returns chat members ids.
     * @param int $chatId Chat id.
     * @return array
     */
    public static function getMembersId(int $chatId) : array
    {
    }
    /**
     * Invite current user to the chat and returns IM chat id.
     * @param int $internalId Internal chat id.
     * @return int
     */
    public static function joinChat(int $internalId) : int
    {
    }
}