<?php

namespace Bitrix\Highloadblock;

/**
 * Class description
 * @package    bitrix
 * @subpackage highloadblock
 */
class HighloadBlockTable extends \Bitrix\Main\Entity\DataManager
{
    private const ENTITY_ID_PREFIX = 'HLBLOCK_';
    private const ENTITY_ID_MASK = '/^HLBLOCK_(\\d+)$/';
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    public static function getObjectClass()
    {
    }
    public static function getMap()
    {
    }
    /**
     * @param array $data
     *
     * @return Entity\AddResult
     * @throws \Bitrix\Main\SystemException
     */
    public static function add(array $data)
    {
    }
    /**
     * @param mixed $primary
     * @param array $data
     *
     * @return Entity\UpdateResult
     */
    public static function update($primary, array $data)
    {
    }
    /**
     * @param mixed $primary
     *
     * @return Main\DB\Result|Entity\DeleteResult
     */
    public static function delete($primary)
    {
    }
    /**
     * @param array|int|string $hlblock Could be a block, ID or NAME of block.
     * @return array|null
     */
    public static function resolveHighloadblock($hlblock)
    {
    }
    /**
     * @param array|int|string $hlblock Could be a block, ID or NAME of block.
     *
     * @return Entity\Base
     * @throws \Bitrix\Main\SystemException
     */
    public static function compileEntity($hlblock)
    {
    }
    /**
     * @param string|int $id
     * @return string
     */
    public static function compileEntityId($id)
    {
    }
    public static function OnBeforeUserTypeAdd($field)
    {
    }
    public static function onAfterUserTypeAdd($field)
    {
    }
    public static function OnBeforeUserTypeDelete($field)
    {
    }
    protected static function compileUtmEntity(\Bitrix\Main\Entity\Base $hlentity, $userfield)
    {
    }
    public static function getUtmEntityClassName(\Bitrix\Main\Entity\Base $hlentity, $userfield)
    {
    }
    public static function getMultipleValueTableName($hlblock, $userfield)
    {
    }
    public static function validateName()
    {
    }
    public static function validateTableName()
    {
    }
    public static function validateTableExisting($value, $primary, array $row, \Bitrix\Main\Entity\Field $field)
    {
    }
}