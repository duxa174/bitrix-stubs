<?php

namespace Bitrix\Seo;

/**
 * Class AdvEntity
 *
 * Interface for Yandex.Direct and Google AdWords local data mirrors. Contains common fields defeinitions.
 *
 * Implemented fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ENGINE_ID int mandatory
 * <li> XML_ID string(255) mandatory
 * <li> LAST_UPDATE datetime optional
 * <li> SETTINGS string optional
 * </ul>
 *
 * @package Bitrix\Seo
 **/
class AdvEntity extends \Bitrix\Main\Entity\DataManager
{
    const ACTIVE = 'Y';
    const INACTIVE = 'N';
    protected static $skipRemoteUpdate = false;
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    public static function setSkipRemoteUpdate($value)
    {
    }
    public static function onBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onBeforeUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
}