<?php

namespace Bitrix\Main\Engine\Contract;

interface FallbackActionInterface
{
    public const ACTION_NAME = \Bitrix\Main\Engine\FallbackAction::ACTION_NAME;
    /**
     * @param string $actionName
     * @return mixed
     */
    public function fallbackAction($actionName);
}