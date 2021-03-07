<?php

namespace Bitrix\Main\Session\Handlers;

class CookieSessionHandler implements \SessionHandlerInterface
{
    /** @var \Bitrix\Main\Request  */
    private $request;
    /** @var \Bitrix\Main\HttpResponse */
    private $response;
    /** @var int */
    private $lifetime;
    public function __construct(int $lifetime, \Bitrix\Main\Request $request = null)
    {
    }
    public function close()
    {
    }
    public function destroy($sessionId)
    {
    }
    public function gc($maxlifetime)
    {
    }
    public function open($savePath, $name)
    {
    }
    public function read($sessionId)
    {
    }
    public function write($sessionId, $sessionData)
    {
    }
    /**
     * @return \Bitrix\Main\HttpResponse
     */
    public function getResponse() : \Bitrix\Main\HttpResponse
    {
    }
    /**
     * @param \Bitrix\Main\HttpResponse $response
     * @return $this
     */
    public function setResponse($response)
    {
    }
}