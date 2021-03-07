<?php

namespace Bitrix\Sale\Exchange;

/**
 * Class ProfileImport
 * @package Bitrix\Sale\Exchange
 * @internal
 * @deprecated
 */
class ProfileImport extends \Bitrix\Sale\Exchange\Entity\UserImportBase
{
    /**
     * ProfileImport constructor.
     */
    public function __construct()
    {
    }
    /**
     * @return int
     */
    public function getOwnerTypeId()
    {
    }
    /**
     * @param array $fields
     * @return Sale\Result
     * @throws Main\ArgumentException
     */
    public function load(array $fields)
    {
    }
    /**
     * @return null|string
     */
    public function getPersonalTypeId()
    {
    }
    /**
     * @return null|string
     */
    public function getUserId()
    {
    }
    /**
     * @return int|null
     */
    public function getId()
    {
    }
    /**
     * @return int|null
     */
    public function profileGetId()
    {
    }
    /**
     * @return bool
     */
    public function isImportable()
    {
    }
    /**
     * @param array $params
     * @return Sale\Result
     */
    public function add(array $params)
    {
    }
    /**
     * @param array $params
     * @return Sale\Result
     */
    public function update(array $params)
    {
    }
    /**
     * Deletes row in entity table by primary key
     * @param array|null $params
     * @return Sale\Result
     */
    public function delete(array $params = null)
    {
    }
    /**
     * @param array $fields
     * @return Sale\Result
     */
    protected function checkFields(array $fields)
    {
    }
    /**
     * @param array $fields
     * @return array|bool|false|mixed|null
     */
    public static function getUserProfile(array $fields)
    {
    }
    /**
     * @param $profileId
     * @return array|bool
     */
    public static function getFieldsUserProfile($profileId)
    {
    }
    /**
     * @param array $fields
     * @return mixed
     */
    public function initFieldsProfile(array $fields, &$arErrors)
    {
    }
    /**
     * @param $code
     * @return array
     * @deprecated
     */
    public static function getUserByCode($code)
    {
    }
    /**
     * @return string
     */
    public static function getFieldExternalId()
    {
    }
    /**
     * @param array $fields
     */
    public function refreshData(array $fields)
    {
    }
}