<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class Warning
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class Warning extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var  string */
    protected $source;
    /** @var  string */
    protected $code;
    /** @var string */
    protected $message;
    /**
     * @return string
     */
    public function getSource()
    {
    }
    /**
     * @param string $source
     * @return Warning
     */
    public function setSource(string $source) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Warning
    {
    }
    /**
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * @param string $code
     * @return Warning
     */
    public function setCode(string $code) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Warning
    {
    }
    /**
     * @return string
     */
    public function getMessage()
    {
    }
    /**
     * @param string $message
     * @return Warning
     */
    public function setMessage(string $message) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Warning
    {
    }
}