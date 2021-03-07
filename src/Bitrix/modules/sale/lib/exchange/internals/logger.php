<?php

namespace Bitrix\Sale\Exchange\Internals;

class Logger
{
    /** @var  Fields */
    protected $fields;
    public function __construct()
    {
    }
    /**
     * @return static
     */
    public static function getCurrent()
    {
    }
    /**
     * @param $name
     * @param $value
     */
    public function setField($name, $value)
    {
    }
    /**
     * @param $name
     * @return null|string
     */
    public function getField($name)
    {
    }
    /**
     * @return \Bitrix\Main\Entity\AddResult|null
     */
    public function save()
    {
    }
    /**
     * @param array $params
     * @return \Bitrix\Main\ORM\Data\AddResult
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function log(array $params)
    {
    }
}