<?php

namespace Bitrix\Iblock\LandingSource;

class Element
{
    const SELECTOR_ENTITY = 'element';
    const FIELD_ALLOWED_SELECT = 0x1;
    const FIELD_ALLOWED_ORDER = 0x2;
    const FIELD_ALLOWED_ALL = self::FIELD_ALLOWED_SELECT | self::FIELD_ALLOWED_ORDER;
    protected static $catalogIncluded = null;
    /**
     * @param Main\Event $event
     * @return Main\EventResult
     */
    public static function onBuildSourceListHandler(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param array $iblocks
     * @return array
     */
    protected static function getCatalogs(array $iblocks = [])
    {
    }
    /**
     * @return array
     */
    protected static function getElementFields()
    {
    }
    /**
     * @return array
     */
    protected static function getProductFields()
    {
    }
    /**
     * @param int $iblockId
     * @return array
     */
    protected static function getIblockProperties($iblockId)
    {
    }
    /**
     * @return array
     */
    protected static function getProductActionList()
    {
    }
    /**
     * @param array $actions
     * @return array
     */
    protected static function getLinkDefinition(array $actions)
    {
    }
    /**
     * @param array $fields
     * @return array
     */
    protected static function getOrderFields(array $fields)
    {
    }
    /**
     * @param array $fields
     * @return array
     */
    protected static function getShowedFields(array $fields)
    {
    }
    /**
     * @param array $property
     * @return bool
     */
    protected static function checkImageProperty(array $property)
    {
    }
}