<?php

namespace Bitrix\Main\Engine\Component;

final class ComponentController extends \Bitrix\Main\Engine\Controller
{
    /**
     * @var \CBitrixComponent
     */
    private $component;
    /**
     * ComponentController constructor.
     *
     * @param Controllerable $component
     */
    public function __construct(\Bitrix\Main\Engine\Contract\Controllerable $component)
    {
    }
    public function configureActions()
    {
    }
    protected function create($actionName)
    {
    }
}