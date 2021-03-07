<?php

namespace Bitrix\Main\Engine\ActionFilter;

final class Csrf extends \Bitrix\Main\Engine\ActionFilter\Base
{
    const ERROR_INVALID_CSRF = 'invalid_csrf';
    /**
     * @var bool
     */
    private $enabled;
    /**
     * @var string
     */
    private $tokenName;
    /**
     * @var bool
     */
    private $returnNew;
    /**
     * Csrf constructor.
     *
     * @param bool $enabled
     * @param string $tokenName
     * @param bool $returnNew
     */
    public function __construct($enabled = true, $tokenName = 'sessid', $returnNew = true)
    {
    }
    /**
     * List allowed values of scopes where the filter should work.
     * @return array
     */
    public function listAllowedScopes()
    {
    }
    public function onBeforeAction(\Bitrix\Main\Event $event)
    {
    }
}