<?php

namespace Bitrix\Main\ORM\Fields;

/**
 * @package    bitrix
 * @subpackage main
 */
class ArrayField extends \Bitrix\Main\ORM\Fields\ScalarField
{
    /** @var string  json, serialize, custom */
    protected $serializationType;
    /** @var callable */
    protected $encodeFunction;
    /** @var callable */
    protected $decodeFunction;
    public function __construct($name, $parameters = [])
    {
    }
    /**
     * Sets json serialization format
     *
     * @return $this
     */
    public function configureSerializationJson()
    {
    }
    /**
     * Sets php serialization format
     *
     * @return $this
     */
    public function configureSerializationPhp()
    {
    }
    /**
     * Custom encode handler
     *
     * @param callable $callback
     *
     * @return $this
     */
    public function configureSerializeCallback($callback)
    {
    }
    /**
     * Custom decode handler
     *
     * @param $callback
     *
     * @return $this
     */
    public function configureUnserializeCallback($callback)
    {
    }
    /**
     * @param array $value
     *
     * @return string
     */
    public function encode($value)
    {
    }
    /**
     * @param string $value
     *
     * @return array
     */
    public function decode($value)
    {
    }
    /**
     * @param $value
     *
     * @return mixed
     * @throws \Bitrix\Main\ArgumentException
     */
    public function encodeJson($value)
    {
    }
    /**
     * @param $value
     *
     * @return mixed
     * @throws \Bitrix\Main\ArgumentException
     */
    public function decodeJson($value)
    {
    }
    /**
     * @param $value
     *
     * @return string
     */
    public function encodePhp($value)
    {
    }
    /**
     * @param $value
     *
     * @return array
     */
    public function decodePhp($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return array
     */
    public function cast($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return mixed|string
     * @throws \Bitrix\Main\SystemException
     */
    public function convertValueFromDb($value)
    {
    }
    /**
     * @param mixed $value
     *
     * @return string
     * @throws \Bitrix\Main\SystemException
     */
    public function convertValueToDb($value)
    {
    }
    /**
     * @return string
     */
    public function getGetterTypeHint()
    {
    }
    /**
     * @return string
     */
    public function getSetterTypeHint()
    {
    }
}