<?php

namespace Sale\Handlers\Delivery\YandexTaxi;

/**
 * Class RateCalculator
 * @package Sale\Handlers\Delivery\YandexTaxi
 * @internal
 */
final class RateCalculator
{
    private const ERROR_CODE = 'DELIVERY_CALCULATION';
    /** @var Api */
    protected $api;
    /** @var ClaimBuilder */
    protected $claimBuilder;
    /**
     * RateCalculator constructor.
     * @param Api $api
     * @param ClaimBuilder $claimBuilder
     */
    public function __construct(\Sale\Handlers\Delivery\YandexTaxi\Api\Api $api, \Sale\Handlers\Delivery\YandexTaxi\ClaimBuilder\ClaimBuilder $claimBuilder)
    {
    }
    /**
     * @param Shipment $shipment
     * @return CalculationResult
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public function calculateRate(\Bitrix\Sale\Shipment $shipment) : \Bitrix\Sale\Delivery\CalculationResult
    {
    }
    /**
     * @param array $errors
     * @return array
     */
    private function getFormattedErrors(array $errors)
    {
    }
}