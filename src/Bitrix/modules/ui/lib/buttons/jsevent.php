<?php

namespace Bitrix\UI\Buttons;

final class JsEvent implements \JsonSerializable
{
    /**
     * @var string
     */
    private $event;
    /**
     *
     * @param string $event
     */
    public function __construct($event)
    {
    }
    /**
     * @return string
     */
    public function getEvent()
    {
    }
    /**
     * @param string $event
     *
     * @return $this
     */
    public function setEvent($event)
    {
    }
    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
    }
}