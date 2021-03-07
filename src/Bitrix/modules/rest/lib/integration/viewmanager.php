<?php

namespace Bitrix\Rest\Integration;

abstract class ViewManager
{
    public function __construct(\Bitrix\Main\Engine\Action $controllerAction)
    {
    }
    /**
     * @return \Bitrix\Main\Engine\Action
     */
    public function getControllerAction()
    {
    }
    /**
     * @param Controller $controller
     * @return Base
     */
    public abstract function getView(\Bitrix\Main\Engine\Controller $controller);
}