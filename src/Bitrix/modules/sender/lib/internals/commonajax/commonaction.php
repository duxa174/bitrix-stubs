<?php

namespace Bitrix\Sender\Internals\CommonAjax;

/**
 * Class ActionGetTemplate
 * @package Bitrix\Sender\Internals\CommonAjax
 */
abstract class CommonAction
{
    const NAME = 'unknown';
    /**
     * Get action instance.
     *
     * @return Controller\Action
     */
    public static function get()
    {
    }
    /**
     * Get action requesting uri.
     *
     * @param string $controllerUri Controller uri.
     * @param array $parameters Parameters.
     * @return string
     */
    public static function getRequestingUri($controllerUri, array $parameters = array())
    {
    }
    /**
     * On request event handler.
     *
     * @param HttpRequest $request Request.
     * @param Controller\Response $response Response.
     */
    public static function onRequest(\Bitrix\Main\HttpRequest $request, \Bitrix\Sender\Internals\QueryController\Response $response)
    {
    }
}