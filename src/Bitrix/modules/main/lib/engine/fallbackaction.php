<?php

namespace Bitrix\Main\Engine;

final class FallbackAction extends \Bitrix\Main\Engine\Action
{
    public const ACTION_NAME = 'fallback';
    public const ACTION_METHOD = 'fallbackAction';
    /** @var string */
    private $originalActionName;
    public function __construct($name, \Bitrix\Main\Engine\Controller $controller, $config = [])
    {
    }
    protected function buildBinder()
    {
    }
}