<?php

namespace Bitrix\Sale\Exchange\Integration\Rest\Client;

class TokenClient extends \Bitrix\Sale\Exchange\Integration\Rest\Client\Base
{
    /** @var Integration\Entity\Token token */
    protected $token;
    public function __construct(\Bitrix\Sale\Exchange\Integration\Entity\Token $token)
    {
    }
    protected function refreshAccessToken()
    {
    }
}