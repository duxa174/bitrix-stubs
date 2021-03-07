<?php

namespace Bitrix\Main\Engine;

final class InlineAction extends \Bitrix\Main\Engine\Action
{
    /**
     * @var string
     */
    protected $methodName;
    /**
     * InlineAction constructor.
     *
     * @param string $name
     * @param Controller $controller
     * @param array $config
     */
    public function __construct($name, \Bitrix\Main\Engine\Controller $controller, $config = array())
    {
    }
    protected function buildBinder()
    {
    }
}