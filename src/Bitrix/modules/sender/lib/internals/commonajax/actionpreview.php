<?php

namespace Bitrix\Sender\Internals\CommonAjax;

/**
 * Class ActionPreview
 * @package Bitrix\Sender\Internals\CommonAjax
 */
class ActionPreview extends \Bitrix\Sender\Internals\CommonAjax\CommonAction
{
    const NAME = 'preview';
    /**
     * On request event handler.
     *
     * @param Main\HttpRequest $request Request.
     * @param Controller\Response $response Response.
     */
    public static function onRequest(\Bitrix\Main\HttpRequest $request, \Bitrix\Sender\Internals\QueryController\Response $response)
    {
    }
}