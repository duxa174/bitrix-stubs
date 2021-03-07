<?php

namespace Bitrix\Main\Web\DOM\Element;

class Input extends \Bitrix\Main\Web\DOM\Element
{
    /**
     * @var string $name
     */
    public $name = null;
    public $value = null;
    public function __construct($name, $value = null)
    {
    }
}