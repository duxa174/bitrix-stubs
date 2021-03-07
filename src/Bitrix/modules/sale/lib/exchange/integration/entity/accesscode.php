<?php

namespace Bitrix\Sale\Exchange\Integration\Entity;

class AccessCode
{
    protected $oauthClient;
    public function __construct(\Bitrix\Sale\Exchange\Integration\OAuth\Client $oauthClient)
    {
    }
    public function create(array $fields)
    {
    }
}