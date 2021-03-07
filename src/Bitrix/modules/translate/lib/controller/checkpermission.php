<?php

namespace Bitrix\Translate\Controller;

class CheckPermission extends \Bitrix\Main\Engine\ActionFilter\Base
{
    const ERROR_ACCESS_DENIED = 'access_denied';
    /**
     * @var string
     */
    private $checkLevel;
    /**
     * Permission constructor.
     *
     * @param string $checkLevel Level checking for.
     */
    public function __construct($checkLevel = 'auth')
    {
    }
    /**
     * Performs permissions checking.
     *
     * @param Main\Event $event Event object.
     *
     * @return Main\EventResult|null
     */
    public function onBeforeAction(\Bitrix\Main\Event $event)
    {
    }
}