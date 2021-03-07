<?php

namespace Bitrix\Catalog\Product;

final class SystemField
{
    public const CODE_MARKING_CODE_GROUP = 'MARKING_CODE_GROUP';
    private const FIELD_PREFIX = 'UF_';
    private const STORAGE_TABLE_NAME_PREFIX = 'b_hlsys_';
    private const STORAGE_NAME_PREFIX = 'PRODUCT_';
    private const FIELD_ID_PREFIX = 'product_';
    private const FIELD_NAME_PREFIX = 'PRODUCT_';
    /** @var bool */
    private static $highloadInclude = null;
    /** @var bool */
    private static $bitrix24Include = null;
    private static $storageList = [];
    private static $languages = [];
    private static $dictionary = [];
    private static $reverseDictionary = [];
    /** @var array */
    private static $currentFieldSet = null;
    /**
     * @return string
     */
    public static function execAgent()
    {
    }
    /**
     * @return Main\Result
     */
    public static function create()
    {
    }
    /**
     * @return void
     */
    public static function delete()
    {
    }
    /**
     * @return array
     */
    public static function getFieldList()
    {
    }
    /**
     * @param array &$row
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function convertRow(array &$row)
    {
    }
    public static function prepareRow(array &$row)
    {
    }
    /**
     * @return array|null
     */
    public static function getGroupActions()
    {
    }
    /**
     * @param string $fieldId
     * @return array|null
     */
    public static function getGroupActionRequest(string $fieldId)
    {
    }
    /**
     * @param ORM\Event $event
     * @return ORM\EventResult
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function handlerHighloadBlockBeforeDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @param ORM\Event $event
     * @return ORM\EventResult
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function handlerHighloadBlockBeforeUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @return bool
     */
    private static function isExistHighloadBlock()
    {
    }
    /**
     * @return bool
     */
    private static function checkHighloadBlock()
    {
    }
    /**
     * @return bool
     */
    private static function initHighloadBlock()
    {
    }
    /**
     * @return void
     *
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private static function highloadBlockAlert()
    {
    }
    /**
     * @return bool
     */
    private static function initBitrix24()
    {
    }
    /**
     * @return void
     */
    private static function initStorageList()
    {
    }
    /**
     * @return array
     */
    private static function getLanguages()
    {
    }
    /**
     * @param string $code
     * @return string
     */
    private static function getStorageTableName(string $code)
    {
    }
    /**
     * @param string $code
     * @return string
     */
    private static function getStorageName(string $code)
    {
    }
    /**
     * @param string $code
     * @return array|null
     */
    private static function getStorageDescription(string $code)
    {
    }
    /**
     * @param string $code
     * @return array
     */
    private static function getStorageLangTitles(string $code)
    {
    }
    /**
     * @return Main\Result
     */
    private static function createMarkingCodeGroup()
    {
    }
    /**
     * @return bool
     */
    private static function allowedMarkingCodeGroup()
    {
    }
    /**
     * @param array $storage
     * @return Main\Result
     */
    private static function createMarkingCodeGroupField(array $storage)
    {
    }
    /**
     * @return array
     */
    private static function getMarkingCodeGroupStorageFields()
    {
    }
    /**
     * @param array $storage
     * @return Main\Result
     */
    private static function fillMarkingCodeGroups(array $storage)
    {
    }
    /**
     * @param array $block
     * @param array $values
     * @return Main\Result
     */
    private static function transformMarkingCodes(array $block, array $values)
    {
    }
    /**
     * @return array|null
     */
    private static function getMarkingCodeGroupAction()
    {
    }
    private static function getFormRowFieldName(string $field)
    {
    }
    /**
     * @param string $field
     * @return string
     */
    private static function getFormRowFieldId(string $field)
    {
    }
    /**
     * @param array $block
     * @return Main\Result
     */
    private static function createHighloadBlock(array $block)
    {
    }
    /**
     * @param array $block
     * @param array $options
     * @return Main\Result
     */
    private static function createHighloadBlockStorage(array $block, array $options = [])
    {
    }
    /**
     * @param array $block
     * @return Main\Result
     */
    private static function setHighloadBlockTitle(array $block)
    {
    }
    /**
     * @param array $block
     * @return Main\Result
     */
    private static function setHighloadBlockRights(array $block)
    {
    }
    /**
     * @param string $moduleId
     * @param array $filter
     * @return array
     */
    private static function getModuleTasks(string $moduleId, array $filter = [])
    {
    }
    /**
     * @param array $block
     * @return Main\Result
     */
    private static function setHighloadBlockFields(array $block)
    {
    }
    /**
     * @param array $block
     * @param array $values
     * @return Main\Result
     */
    private static function fillHighloadBlock(array $block, array $values)
    {
    }
    /**
     * @param array $field
     * @return Main\Result
     */
    private static function createUserField(array $field)
    {
    }
}