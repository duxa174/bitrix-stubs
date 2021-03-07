<?php

namespace Bitrix\Main\Engine\ActionFilter;

final class ClosureWrapper extends \Bitrix\Main\Engine\ActionFilter\Base
{
    /**
     * @var Closure
     */
    private $closure;
    /**
     * ClosureActionFilter constructor.
     * @param Closure $closure
     */
    public function __construct(\Closure $closure)
    {
    }
    public function onBeforeAction(\Bitrix\Main\Event $event)
    {
    }
    public function onAfterAction(\Bitrix\Main\Event $event)
    {
    }
}