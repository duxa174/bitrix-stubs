<?php

namespace Bitrix\Main;

class EventManager
{
    /**
     * @var EventManager
     */
    protected static $instance;
    protected $handlers = array();
    protected $isHandlersLoaded = false;
    protected static $cacheKey = "b_module_to_module";
    protected function __construct()
    {
    }
    /**
     * @static
     * @return EventManager
     */
    public static function getInstance()
    {
    }
    protected function addEventHandlerInternal($fromModuleId, $eventType, $callback, $includeFile, $sort, $version)
    {
    }
    public function addEventHandler($fromModuleId, $eventType, $callback, $includeFile = false, $sort = 100)
    {
    }
    /**
     * @param $fromModuleId
     * @param $eventType
     * @param $callback
     * @param bool $includeFile
     * @param int $sort
     * @return int
     */
    public function addEventHandlerCompatible($fromModuleId, $eventType, $callback, $includeFile = false, $sort = 100)
    {
    }
    public function removeEventHandler($fromModuleId, $eventType, $iEventHandlerKey)
    {
    }
    public function unRegisterEventHandler($fromModuleId, $eventType, $toModuleId, $toClass = "", $toMethod = "", $toPath = "", $toMethodArg = array())
    {
    }
    public function registerEventHandler($fromModuleId, $eventType, $toModuleId, $toClass = "", $toMethod = "", $sort = 100, $toPath = "", $toMethodArg = array())
    {
    }
    public function registerEventHandlerCompatible($fromModuleId, $eventType, $toModuleId, $toClass = "", $toMethod = "", $sort = 100, $toPath = "", $toMethodArg = array())
    {
    }
    protected function registerEventHandlerInternal($fromModuleId, $eventType, $toModuleId, $toClass, $toMethod, $sort, $toPath, $toMethodArg, $version)
    {
    }
    protected function formatEventName($arEvent)
    {
    }
    protected function loadEventHandlers()
    {
    }
    protected function clearLoadedHandlers()
    {
    }
    public function findEventHandlers($eventModuleId, $eventType, array $filter = null)
    {
    }
    public function send(\Bitrix\Main\Event $event)
    {
    }
    protected function sendToEventHandler(array $handler, \Bitrix\Main\Event $event)
    {
    }
}