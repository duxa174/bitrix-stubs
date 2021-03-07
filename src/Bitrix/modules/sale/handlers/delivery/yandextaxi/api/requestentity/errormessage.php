<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class ErrorMessage
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class ErrorMessage extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var  string */
    protected $code;
    /** @var string */
    protected $message;
    /**
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * @param string $code
     * @return ErrorMessage
     */
    public function setCode(string $code) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\ErrorMessage
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
     * @return ErrorMessage
     */
    public function setMessage(string $message) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\ErrorMessage
    {
    }
}