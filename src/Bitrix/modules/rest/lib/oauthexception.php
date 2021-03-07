<?php

namespace Bitrix\Rest;

class OAuthException extends \Bitrix\Rest\RestException
{
    protected $result;
    /**
     * OAuthException constructor.
     * @param string|array $oauthResult
     * @param \Exception|null $previous
     */
    public function __construct($oauthResult, \Exception $previous = null)
    {
    }
    public function getErrorCode()
    {
    }
}