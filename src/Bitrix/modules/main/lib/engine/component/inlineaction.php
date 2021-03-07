<?php

namespace Bitrix\Main\Engine\Component;

final class InlineAction extends \Bitrix\Main\Engine\Action
{
    /**
     * @var string
     */
    protected $methodName;
    /**
     * @var Controllerable
     */
    private $controllerable;
    /**
     * InlineAction constructor.
     *
     * @param string $name
     * @param Controllerable $controllerable
     * @param Controller $controller
     * @param array $config
     */
    public function __construct($name, \Bitrix\Main\Engine\Contract\Controllerable $controllerable, \Bitrix\Main\Engine\Controller $controller, $config = array())
    {
    }
    protected function buildBinder()
    {
    }
    public function runWithSourceParametersList()
    {
    }
}