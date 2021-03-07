<?php

namespace Bitrix\Main\Engine;

final class ClosureAction extends \Bitrix\Main\Engine\Action
{
    /**
     * @var callable
     */
    protected $callable;
    /**
     * ClosureAction constructor.
     *
     * @param string $name
     * @param Controller $controller
     * @param callable $callable
     * @param array $config
     */
    public function __construct($name, \Bitrix\Main\Engine\Controller $controller, $callable, $config = array())
    {
    }
    protected function buildBinder()
    {
    }
}