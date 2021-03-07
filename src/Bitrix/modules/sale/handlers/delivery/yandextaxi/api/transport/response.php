<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\Transport;

/**
 * Class Response
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\Transport
 * @internal
 */
final class Response
{
    /** @var int */
    private $status;
    /** @var array */
    private $body;
    /**
     * Response constructor.
     * @param int $status
     * @param array $body
     */
    public function __construct(int $status, array $body)
    {
    }
    /**
     * @return int
     */
    public function getStatus() : int
    {
    }
    /**
     * @return array
     */
    public function getBody() : array
    {
    }
}