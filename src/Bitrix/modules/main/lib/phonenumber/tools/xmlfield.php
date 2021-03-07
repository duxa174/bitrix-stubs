<?php

namespace Bitrix\Main\PhoneNumber\Tools;

class XmlField
{
    /** @var string */
    protected $name = '';
    /** @var bool */
    protected $multiple = false;
    /** @var \Bitrix\Main\PhoneNumber\Tools\XmlParser */
    protected $subParser = null;
    public function __construct($name, array $options = array())
    {
    }
    public function getName()
    {
    }
    public function isMultiple()
    {
    }
    /**
     * @return \Bitrix\PropertiesService\XmlParser|null
     */
    public function getSubParser()
    {
    }
    /**
     * Modifier for the field value.
     *
     * @param mixed $value
     * @return mixed
     */
    public function decodeValue($value)
    {
    }
    public static function getClass()
    {
    }
}