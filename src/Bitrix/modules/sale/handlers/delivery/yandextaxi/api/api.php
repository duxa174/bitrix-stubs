<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api;

/**
 * Class Api
 * @package Sale\Handlers\Delivery\YandexTaxi\Api
 * @internal
 */
final class Api
{
    private const LOG_SOURCE = 'api';
    /** @var Transport\Client */
    private $transport;
    /** @var ClaimReader */
    private $claimReader;
    /** @var EventBuilder */
    private $eventBuilder;
    /** @var Logger */
    private $logger;
    /**
     * Api constructor.
     * @param Transport\Client $transport
     * @param ClaimReader $claimReader
     * @param EventBuilder $eventBuilder
     * @param Logger $logger
     */
    public function __construct(\Sale\Handlers\Delivery\YandexTaxi\Api\Transport\Client $transport, \Sale\Handlers\Delivery\YandexTaxi\Api\ClaimReader\ClaimReader $claimReader, \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\EventBuilder $eventBuilder, \Sale\Handlers\Delivery\YandexTaxi\Common\Logger $logger)
    {
    }
    /**
     * @param Estimation $estimation
     * @return PriceResult
     * @throws \Bitrix\Main\ArgumentException
     */
    public function checkPrice(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Estimation $estimation) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\PriceResult
    {
    }
    /**
     * @param Claim $claim
     * @return SingleClaimResult
     * @throws \Bitrix\Main\ArgumentException
     */
    public function createClaim(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim $claim) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\SingleClaimResult
    {
    }
    /**
     * @param string $claimId
     * @param int $version
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     */
    public function acceptClaim(string $claimId, int $version) : \Bitrix\Main\Result
    {
    }
    /**
     * @param string $claimId
     * @param int $version
     * @param string $cancelState
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     */
    public function cancelClaim(string $claimId, int $version, string $cancelState) : \Bitrix\Main\Result
    {
    }
    /**
     * @param string $claimId
     * @return SingleClaimResult
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getClaim(string $claimId) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\SingleClaimResult
    {
    }
    /**
     * @param SearchOptions $searchOptions
     * @param bool $onlyActive
     * @return MultiClaimResult
     * @throws \Bitrix\Main\ArgumentException
     */
    public function searchClaims(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\SearchOptions $searchOptions, $onlyActive = false) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\MultiClaimResult
    {
    }
    /**
     * @param SearchOptions $searchOptions
     * @return MultiClaimResult
     * @throws \Bitrix\Main\ArgumentException
     */
    public function searchActiveClaims(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\SearchOptions $searchOptions) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\MultiClaimResult
    {
    }
    /**
     * @param string $claimId
     * @return PhoneResult
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getPhone(string $claimId) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\PhoneResult
    {
    }
    /**
     * @param $cursor
     * @return ApiResult\Journal\Result
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getJournalRecords($cursor) : \Sale\Handlers\Delivery\YandexTaxi\Api\ApiResult\Journal\Result
    {
    }
    /**
     * @param $result
     * @param int $statusCode
     * @param string $method
     * @return mixed
     */
    private function respondStatusError($result, int $statusCode, string $method)
    {
    }
    /**
     * @param $result
     * @return mixed
     */
    private function respondTransportError($result)
    {
    }
    /**
     * @return Transport\Client
     */
    public function getTransport() : \Sale\Handlers\Delivery\YandexTaxi\Api\Transport\Client
    {
    }
}