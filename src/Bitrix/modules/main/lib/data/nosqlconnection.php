<?php

namespace Bitrix\Main\Data;

abstract class NosqlConnection extends \Bitrix\Main\Data\Connection
{
    public abstract function get($key);
    public abstract function set($key, $value);
}