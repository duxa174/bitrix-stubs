<?php

namespace Bitrix\Main\Engine\ActionFilter;

/**
 * Class CloseSession
 * Be careful by using this feature. You will close session and code below can't work with it until session will be open.
 * @package Bitrix\Main\Engine\ActionFilter
 */
final class CloseSession extends \Bitrix\Main\Engine\ActionFilter\Base
{
    /**
     * @var bool
     */
    private $enabled;
    /**
     * Close session constructor.
     * @param bool $enabled
     */
    public function __construct($enabled = true)
    {
    }
    public function onBeforeAction(\Bitrix\Main\Event $event)
    {
    }
}