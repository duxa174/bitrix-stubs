<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Class Error
 * @package Bitrix\Sale\PaySystem
 */
final class Error extends \Bitrix\Main\Error
{
    private const BINDING_LEVEL_BUYER = 10;
    private $bindingLevel = null;
    protected function setBindingLevel($level) : self
    {
    }
    public function isVisibleForBuyer() : bool
    {
    }
    public static function createForBuyer($message, $code = 0, $customData = null) : self
    {
    }
    public static function create($message, $code = 0, $customData = null) : self
    {
    }
}