<?php

namespace Bitrix\Main\Engine\ActionFilter;

/**
 * Class Cors
 * Set headers for CORS .
 * @package Bitrix\Main\Engine\ActionFilter
 */
final class Cors extends \Bitrix\Main\Engine\ActionFilter\Base
{
    /** @var string|null */
    private $origin;
    /** @var bool */
    private $credentials;
    /**
     * Constructor.
     *
     * @param string|null $origin Origin. NULL - take from Origin header, '*' or like 'https://example.com'.
     * @param bool $credentials Set header `Access-Control-Allow-Credentials`.
     */
    public function __construct(string $origin = null, bool $credentials = false)
    {
    }
    /**
     * Handler of event `onBeforeAction`.
     *
     * @param Main\Event $event Event.
     * return void
     */
    public function onAfterAction(\Bitrix\Main\Event $event)
    {
    }
}