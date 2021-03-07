<?php

namespace Bitrix\Sale;

/**
 * Class ResultSerializable
 * For easy transfer via rest & store in cache etc.
 * \Bitrix\Main\Result::$data must contain only serializable data.
 * @package Bitrix\Sale
 */
class ResultSerializable extends \Bitrix\Sale\Result implements \Serializable
{
    /**
     * @return string
     */
    public function serialize()
    {
    }
    /**
     * @param string $data
     */
    public function unserialize($data)
    {
    }
}