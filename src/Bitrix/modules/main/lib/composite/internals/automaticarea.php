<?php

namespace Bitrix\Main\Composite\Internals;

class AutomaticArea
{
    /** @var \CBitrixComponent */
    private $component = null;
    private $started = false;
    /** @var  AutomaticArea */
    private static $currentArea = null;
    public function __construct($component)
    {
    }
    public function start()
    {
    }
    public function end()
    {
    }
    public function getFrameType()
    {
    }
    public static function getFrameTypes()
    {
    }
    /**
     * @return AutomaticArea
     */
    public static function getCurrentArea()
    {
    }
    private function isFirstLevelComponent()
    {
    }
}