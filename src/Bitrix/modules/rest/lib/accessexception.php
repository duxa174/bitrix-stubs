<?php

namespace Bitrix\Rest;

class AccessException extends \Bitrix\Rest\RestException
{
    const MESSAGE = 'Access denied!';
    const CODE = 'ACCESS_DENIED';
    public function __construct($msg = '', \Exception $previous = null)
    {
    }
}