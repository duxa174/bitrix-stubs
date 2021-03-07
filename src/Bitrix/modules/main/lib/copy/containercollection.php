<?php

namespace Bitrix\Main\Copy;

/**
 * Class for to store containers that will be used for copying.
 *
 * @package Bitrix\Main\Copy
 */
class ContainerCollection extends \Bitrix\Main\Type\Dictionary
{
    protected function addContainer(\Bitrix\Main\Copy\Container $container, $offset = null)
    {
    }
    public function offsetSet($offset, $value)
    {
    }
}