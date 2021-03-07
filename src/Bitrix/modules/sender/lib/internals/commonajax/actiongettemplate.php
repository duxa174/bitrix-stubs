<?php

namespace Bitrix\Sender\Internals\CommonAjax;

/**
 * Class ActionGetTemplate
 * @package Bitrix\Sender\Internals\CommonAjax
 */
class ActionGetTemplate extends \Bitrix\Sender\Internals\CommonAjax\CommonAction
{
    const NAME = 'getTemplate';
    /**
     * Get action instance.
     *
     * @return Controller\Action
     */
    public static function get()
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