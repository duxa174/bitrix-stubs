<?php

namespace Bitrix\Pull;

class Event
{
    const SHARED_CHANNEL = 0;
    private static $backgroundContext = false;
    private static $messages = array();
    private static $deferredMessages = array();
    private static $push = array();
    private static $error = false;
    public static function add($recipient, array $parameters, $channelType = \CPullChannel::TYPE_PRIVATE)
    {
    }
    private static function addEvent($recipient, $parameters, $channelType = \CPullChannel::TYPE_PRIVATE)
    {
    }
    private static function addMessage(array &$destination, array $channels, array $parameters)
    {
    }
    private static function addPush($users, $parameters)
    {
    }
    private static function processDeferredMessages()
    {
    }
    private static function executeEvent($parameters)
    {
    }
    private static function executePushEvent($parameters)
    {
    }
    public static function send()
    {
    }
    public static function executeEvents()
    {
    }
    public static function executePushEvents()
    {
    }
    public static function onAfterEpilog()
    {
    }
    public static function sendInBackground()
    {
    }
    public static function getChannelIds($users, $type = \CPullChannel::TYPE_PRIVATE)
    {
    }
    public static function getUserIds($channels)
    {
    }
    private static function prepareParameters($parameters)
    {
    }
    private static function preparePushParameters($parameters)
    {
    }
    public static function getParamsCode($params)
    {
    }
    private static function getEntitiesByType($recipient)
    {
    }
    private static function getBytes($variable)
    {
    }
    private static function isChannelEntity($entity)
    {
    }
    public static function getLastError()
    {
    }
}