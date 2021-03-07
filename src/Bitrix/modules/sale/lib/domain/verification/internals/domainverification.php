<?php

namespace Bitrix\Sale\Domain\Verification\Internals;

/**
 * Class DomainVerificationTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> DOMAIN string(255) mandatory
 * <li> PATH string(255) mandatory
 * <li> CONTENT string optional
 * <li> ENTITY string(1024) mandatory
 * </ul>
 *
 * @package Bitrix\Main
 **/
class DomainVerificationTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns validators for DOMAIN field.
     *
     * @return array
     * @throws Main\ArgumentTypeException
     */
    public static function validateDomain()
    {
    }
    /**
     * Returns validators for PATH field.
     *
     * @return array
     * @throws Main\ArgumentTypeException
     */
    public static function validatePath()
    {
    }
    /**
     * Returns validators for ENTITY field.
     *
     * @return array
     * @throws Main\ArgumentTypeException
     */
    public static function validateEntity()
    {
    }
}