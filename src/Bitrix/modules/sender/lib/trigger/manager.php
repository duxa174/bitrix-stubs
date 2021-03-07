<?php

namespace Bitrix\Sender\Trigger;

class Manager
{
    public static $debug = false;
    public static $postingId = null;
    /**
     * @param mixed
     * @return void
     */
    public static function handleEvent()
    {
    }
    /**
     * @param array $params
     * @return void
     */
    protected static function processEvent($params)
    {
    }
    /**
     * @param array $chain
     * @param array $data
     * @param bool $setGoal
     * @return void
     */
    protected static function stop($chain, $data, $setGoal)
    {
    }
    /**
     * @param array $chain
     * @return void
     */
    protected static function send($chain)
    {
    }
    /**
     * @param array $emailEvent
     * @return void
     */
    protected static function preventMailEvent(array $emailEvent)
    {
    }
    /**
     * @param array $chain
     * @param Settings $settings
     * @param array $data
     * @return void
     */
    protected static function addRecipient($chain, $settings, $data)
    {
    }
    /**
     * @param bool $activate
     * @return void
     */
    public static function activateAllHandlers($activate = true)
    {
    }
    /**
     * @param array $params
     * @param bool $activate
     * @return void
     */
    public static function actualizeHandler(array $params, $activate = null)
    {
    }
    /**
     * @param array $endpointList
     * @return array
     */
    public static function getFieldsFromEndpoint(array $endpointList)
    {
    }
    /**
     * @param array $fields
     * @return array|null
     */
    public static function getEndpointFromFields(array $fields)
    {
    }
    /**
     * Return array of instances of connector by endpoints array.
     *
     * @param array
     * @return Base[]
     */
    public static function getList(array $endpointList = null)
    {
    }
    /**
     * Return instance of trigger by endpoint array.
     *
     * @param array
     * @return Base|null
     */
    public static function getOnce(array $endpoint)
    {
    }
    /**
     * Return array of triggers information by endpoints array.
     *
     * @param array $endpointList
     * @return array
     */
    public static function getClassList(array $endpointList = null)
    {
    }
    /**
     * @param array $a
     * @param array $b
     * @return int
     */
    public static function sort($a, $b)
    {
    }
    /**
     * @param string $mess
     * @return void
     */
    public static function debug($mess)
    {
    }
    /**
     * @param string $moduleId
     * @param string $eventType
     * @param int $chainId
     * @return string
     */
    public static function getClosedEventAgentName($moduleId, $eventType, $chainId)
    {
    }
    /**
     * @param string $moduleId
     * @param string $eventType
     * @param int $chainId
     * @return string
     */
    public static function fireClosedEventAgent($moduleId, $eventType, $chainId)
    {
    }
    /**
     * @param bool $activate
     * @return void
     */
    public static function actualizeHandlerForChild($activate = null)
    {
    }
    /**
     * @param Event $event
     * @return void
     */
    public static function onAfterMailingChainSend(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param \Bitrix\Main\Event $event
     * @return void
     */
    public static function onAfterPostingSendRecipient(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param array $data
     * @return void
     */
    public static function onAfterRecipientUnsub($data)
    {
    }
    /**
     * @param array $data
     * @return array
     */
    public static function onTriggerList($data)
    {
    }
}