<?php

namespace Bitrix\Calendar\ICal\Parser;

class FactoryComponents
{
    /**
     * @var string
     */
    private $componentName;
    /**
     * @var BasicComponent
     */
    private $component;
    public static function createInstance(string $componentName) : \Bitrix\Calendar\ICal\Parser\FactoryComponents
    {
    }
    public function __construct(string $componentName)
    {
    }
    public function createComponent($properties, $subComponents) : \Bitrix\Calendar\ICal\Parser\FactoryComponents
    {
    }
    public function getComponent()
    {
    }
    private function getStandardComponent($properties) : \Bitrix\Calendar\ICal\Basic\Observance
    {
    }
    private function getCalendarComponent($properties, $subComponents) : \Bitrix\Calendar\ICal\Parser\Calendar
    {
    }
    private function getEventComponent($properties, $subComponents) : \Bitrix\Calendar\ICal\Parser\Event
    {
    }
    private function getTimezoneComponent($properties, $subComponents) : \Bitrix\Calendar\ICal\Parser\Timezone
    {
    }
}