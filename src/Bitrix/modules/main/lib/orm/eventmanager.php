<?php

namespace Bitrix\Main\ORM;

/**
 * EventManager wrapper for ORM entities
 *
 * @package    bitrix
 * @subpackage main
 */
class EventManager
{
    /**
     * @var EventManager
     */
    protected static $instance;
    /**
     * Singleton constructor
     */
    protected function __construct()
    {
    }
    /**
     * Singleton getter
     *
     * @static
     * @return EventManager
     */
    public static function getInstance()
    {
    }
    /**
     * @param string|Entity|DataManager|EntityObject $entity    ORM Entity, or ORM Table class, or ORM Object class
     * @param string                                 $eventType Constants DataManager::EVENT_ON_BEFORE_ADD etc.
     * @param callable                               $callback  Callback
     * @param bool                                   $includeFile
     * @param int                                    $sort
     *
     * @return int|mixed
     * @throws ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function addEventHandler($entity, $eventType, $callback, $includeFile = false, $sort = 100)
    {
    }
    /**
     * @param string|Entity|DataManager|EntityObject $entity
     * @param string                                 $eventType
     * @param                                        $iEventHandlerKey
     *
     * @return bool
     * @throws ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function removeEventHandler($entity, $eventType, $iEventHandlerKey)
    {
    }
    /**
     * @param string|Entity|DataManager|EntityObject $entity
     * @param string                                 $eventType
     * @param string                                 $toModuleId
     * @param string                                 $toClass
     * @param string                                 $toMethod
     * @param int                                    $sort
     * @param string                                 $toPath
     * @param array                                  $toMethodArg
     *
     * @throws ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function registerEventHandler($entity, $eventType, $toModuleId, $toClass = "", $toMethod = "", $sort = 100, $toPath = "", $toMethodArg = [])
    {
    }
    /**
     * @param string|Entity|DataManager|EntityObject $entity
     * @param string                                 $eventType
     * @param string                                 $toModuleId
     * @param string                                 $toClass
     * @param string                                 $toMethod
     * @param string                                 $toPath
     * @param array                                  $toMethodArg
     *
     * @throws ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function unRegisterEventHandler($entity, $eventType, $toModuleId, $toClass = "", $toMethod = "", $toPath = "", $toMethodArg = [])
    {
    }
    /**
     * @param string|Entity|DataManager|EntityObject $entity
     *
     * @return Entity
     * @throws ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    protected static function obtainEntity($entity)
    {
    }
    /**
     * @param Entity $entity
     * @param string $eventType
     *
     * @return string
     * @throws ArgumentException
     */
    protected static function obtainEventType($entity, $eventType)
    {
    }
}