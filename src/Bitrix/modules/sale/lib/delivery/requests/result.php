<?php

namespace Bitrix\Sale\Delivery\Requests;

/**
 * Class Result
 * @package Bitrix\Sale\Delivery\Requests
 */
class Result extends \Bitrix\Main\Result
{
    protected $messages = array();
    /** @var RequestResult[] || ShipmentResult[]  */
    protected $results = array();
    /**
     * Result constructor.
     */
    public function __construct()
    {
    }
    /**
     * @param Message $message
     */
    public function addMessage(\Bitrix\Sale\Delivery\Requests\Message $message)
    {
    }
    /**
     * @return Message[]
     */
    public function getMessages()
    {
    }
    /**
     * @return array|MessagesCollection
     */
    public function getMessagesCollection()
    {
    }
    /**
     * @return array
     */
    public function getMessagesMessages()
    {
    }
    /**
     * Adds array of Message objects
     *
     * @param Message[] $messages
     * @return $this
     */
    public function addMessages(array $messages)
    {
    }
    /**
     * @return array
     */
    public function getResults()
    {
    }
    /**
     * @return ShipmentResult[]
     */
    public function getShipmentResults()
    {
    }
    /**
     * @return RequestResult[]
     */
    public function getRequestResults()
    {
    }
    /**
     * @param array $results
     */
    public function setResults($results)
    {
    }
    /**
     * @param Result
     */
    public function addResult(\Bitrix\Sale\Delivery\Requests\Result $result)
    {
    }
    /**
     * @param Result[] $results
     */
    public function addResults(array $results)
    {
    }
}
class MessagesCollection extends \Bitrix\Main\ErrorCollection
{
}
class Message extends \Bitrix\Main\Error
{
}