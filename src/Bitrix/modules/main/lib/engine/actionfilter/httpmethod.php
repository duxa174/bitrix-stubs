<?php

namespace Bitrix\Main\Engine\ActionFilter;

final class HttpMethod extends \Bitrix\Main\Engine\ActionFilter\Base
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const ERROR_INVALID_HTTP_METHOD = 'invalid_http_method';
    /**
     * @var array
     */
    private $allowedMethods;
    /**
     * HttpMethodFilter constructor.
     * @param array $allowedMethods
     */
    public function __construct(array $allowedMethods = array(self::METHOD_GET))
    {
    }
    /**
     * List allowed values of scopes where the filter should work.
     * @return array
     */
    public function listAllowedScopes()
    {
    }
    /**
     * @return bool
     */
    public function containsPostMethod()
    {
    }
    public function onBeforeAction(\Bitrix\Main\Event $event)
    {
    }
}