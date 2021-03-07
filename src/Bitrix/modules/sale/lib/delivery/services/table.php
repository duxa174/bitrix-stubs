<?php

namespace Bitrix\Sale\Delivery\Services;

/**
 * Class Table
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CODE string(50) optional
 * <li> PARENT_ID int optional
 * <li> NAME string(255) mandatory
 * <li> ACTIVE string(1) mandatory
 * <li> DESCRIPTION string(255) optional
 * <li> SORT int mandatory
 * <li> LOGOTIP int optional
 * <li> CONFIG string mandatory
 * <li> CURRENCY string(3) mandatory
 * <li> STORE string(255) optional
 * <li> CLASS_NAME string(255) optional
 * </ul>
 *
 * @package Bitrix\Sale\Delivery *
 **/
class Table extends \Bitrix\Main\Entity\DataManager
{
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function validateCode()
    {
    }
    public static function validateName()
    {
    }
    public static function validateCurrency()
    {
    }
    public static function validateClassName()
    {
    }
    /* Deprecated methods moved to manager. Will be removed in future versions. */
    /**
     * @deprecated use Services\Manager::getIdByCode()
     */
    public static function getIdByCode($code)
    {
    }
    /**
     * @deprecated use Services\Manager::getCodeById()
     */
    public static function getCodeById($id)
    {
    }
    /**
     * @param mixed $primary
     *	@return DeleteResult
     * @throws \Exception
     */
    public static function delete($primary)
    {
    }
}