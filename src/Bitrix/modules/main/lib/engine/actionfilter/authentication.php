<?php

namespace Bitrix\Main\Engine\ActionFilter;

final class Authentication extends \Bitrix\Main\Engine\ActionFilter\Base
{
    const ERROR_INVALID_AUTHENTICATION = 'invalid_authentication';
    /**
     * @var bool
     */
    private $enableRedirect;
    public function __construct($enableRedirect = false)
    {
    }
    public function onBeforeAction(\Bitrix\Main\Event $event)
    {
    }
}