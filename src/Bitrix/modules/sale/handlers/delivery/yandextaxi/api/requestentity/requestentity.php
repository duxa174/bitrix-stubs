<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class Base
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
abstract class RequestEntity implements \JsonSerializable
{
    /**
     * @return array
     */
    public function jsonSerialize()
    {
    }
    /**
     * @param string $name
     * @return string
     */
    protected function castToUnderscore(string $name)
    {
    }
}