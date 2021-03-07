<?php

namespace Bitrix\Main\Engine\Contract;

interface RoutableAction
{
    /**
     * @return string|Controller
     */
    public static function getControllerClass();
    /**
     * @return string
     */
    public static function getDefaultName();
}