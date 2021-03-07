<?php

namespace Bitrix\Main\Engine\ActionFilter;

/**
 * Class Content
 * @package Bitrix\Main\Engine\ActionFilter
 */
final class ContentType extends \Bitrix\Main\Engine\ActionFilter\Base
{
    const JSON = 'application/json';
    const ERROR_INVALID_CONTENT_TYPE = 'invalid_content_type';
    /** @var array  */
    private $allowedTypes;
    /**
     * ContentType filter constructor.
     *
     * @param array $allowedTypes Allowed types.
     */
    public function __construct(array $allowedTypes = [])
    {
    }
    /**
     * Event `onBeforeAction` handler.
     *
     * @param Event $event Event.
     * @return EventResult|void|null
     */
    public function onBeforeAction(\Bitrix\Main\Event $event)
    {
    }
    protected function setActionSourceParametersToMap(\Bitrix\Main\Engine\JsonPayload $payload)
    {
    }
    protected function getRequestContentType()
    {
    }
}