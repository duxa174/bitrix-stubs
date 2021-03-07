<?php

namespace Sale\Handlers\Delivery\YandexTaxi\ClaimBuilder;

/**
 * Class Result
 * @package Sale\Handlers\Delivery\YandexTaxi
 * @internal
 */
final class Result extends \Bitrix\Main\Result
{
    /** @var Claim */
    private $claim;
    /**
     * @return Claim
     */
    public function getClaim()
    {
    }
    /**
     * @param Claim $claim
     * @return Result
     */
    public function setClaim(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim $claim) : \Sale\Handlers\Delivery\YandexTaxi\ClaimBuilder\Result
    {
    }
}