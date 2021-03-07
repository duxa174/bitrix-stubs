<?php

namespace Bitrix\UI\Buttons;

final class JsHandler implements \JsonSerializable
{
    /**
     * @var string
     */
    private $handler;
    /**
     * @var string|null
     */
    private $context;
    /**
     * JsHandler constructor.
     *
     * @param string $handler
     * @param string|null $context
     */
    public function __construct($handler, $context = null)
    {
    }
    /**
     * @return string
     */
    public function getHandler()
    {
    }
    /**
     * @param string $handler
     *
     * @return JsHandler
     */
    public function setHandler($handler)
    {
    }
    /**
     * @return string|null
     */
    public function getContext()
    {
    }
    /**
     * @param string|null $context
     *
     * @return JsHandler
     */
    public function setContext($context)
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