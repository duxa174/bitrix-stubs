<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult;

/**
 * Class MultiClaimResult
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult
 * @internal
 */
final class MultiClaimResult extends \Bitrix\Main\Result
{
    /** @var Claim[] */
    private $claims = [];
    /**
     * @param Claim $claim
     * @return $this
     */
    public function addClaim(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim $claim)
    {
    }
    /**
     * @return Claim[]
     */
    public function getClaims() : array
    {
    }
}