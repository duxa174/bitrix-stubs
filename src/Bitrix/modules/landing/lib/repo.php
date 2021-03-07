<?php

namespace Bitrix\Landing;

class Repo extends \Bitrix\Landing\Internals\BaseTable
{
    /**
     * Internal class.
     * @var string
     */
    public static $internalClass = 'RepoTable';
    /**
     * Create new record and return it new id.
     * @param array $fields Fields array.
     * @return \Bitrix\Main\Result
     */
    public static function add($fields)
    {
    }
    /**
     * Update the record.
     * @param int $id Record id.
     * @param array $fields New fields record.
     * @return \Bitrix\Main\Result
     */
    public static function update($id, $fields = array())
    {
    }
    /**
     * Delete the record.
     * @param int $id Record id.
     * @return \Bitrix\Main\Result
     */
    public static function delete($id)
    {
    }
    /**
     * Get repository.
     * @return array
     */
    public static function getRepository()
    {
    }
    /**
     * Return full info from rest block.
     * @param int $id Block id.
     * @return array
     */
    public static function getBlock($id)
    {
    }
    /**
     * Get row by Id.
     * @param int $id Id.
     * @return Bitrix\Main\DB\Result
     */
    public static function getById($id)
    {
    }
    /**
     * Delete all app blocks from repo.
     * @param string $code App code.
     * @return void
     */
    public static function deleteByAppCode($code)
    {
    }
    /**
     * Return info about installed app(s).
     * @param array|int $id Repo block id(s).
     * @return array
     */
    public static function getAppInfo($id)
    {
    }
    /**
     * Get info about app by code(s) from Repo.
     * @param string|array $code App code(s).
     * @return array
     */
    public static function getAppByCode($code)
    {
    }
}