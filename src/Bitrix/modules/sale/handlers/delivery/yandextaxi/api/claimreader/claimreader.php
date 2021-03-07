<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\ClaimReader;

/**
 * Class ClaimReader
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\ClaimReader
 * @internal
 */
final class ClaimReader
{
    /**
     * @param array $response
     * @return Result
     */
    public function readFromArray(array $response) : \Sale\Handlers\Delivery\YandexTaxi\Api\ClaimReader\Result
    {
    }
    /**
     * @param array $node
     * @return ErrorMessage
     */
    private function buildErrorMessage(array $node) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\ErrorMessage
    {
    }
    /**
     * @param array $node
     * @return Warning
     */
    private function buildWarning(array $node) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Warning
    {
    }
    /**
     * @param array $node
     * @return RoutePoint
     */
    private function buildRoutePoint(array $node) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RoutePoint
    {
    }
    /**
     * @param array $node
     * @return Contact
     */
    private function buildContact(array $node) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Contact
    {
    }
    /**
     * @param array $node
     * @return Address
     */
    private function buildAddress(array $node) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Address
    {
    }
    /**
     * @param array $node
     * @return TransportClassification
     */
    private function buildTransportClassification(array $node) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\TransportClassification
    {
    }
}