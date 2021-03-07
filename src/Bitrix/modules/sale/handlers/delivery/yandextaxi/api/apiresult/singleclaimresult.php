<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult;

/**
 * Class SingleClaimResult
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult
 * @internal
 */
final class SingleClaimResult extends \Bitrix\Main\Result
{
    /** @var Claim */
    private $claim;
    /**
     * @param Claim $claim
     * @return $this
     */
    public function setClaim(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim $claim)
    {
    }
    /**
     * @return Claim
     */
    public function getClaim()
    {
    }
}