<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class Claim
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class Claim extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var Contact */
    protected $emergencyContact;
    /** @var ShippingItem[] */
    protected $items = [];
    /** @var RoutePoints */
    protected $routePoints;
    /** @var string */
    protected $id;
    /** @var string */
    protected $corpClientId;
    /** @var string */
    protected $status;
    /** @var int */
    protected $version;
    /** @var Pricing */
    protected $pricing;
    /** @var bool */
    protected $skipClientNotify;
    /** @var bool */
    protected $skipEmergencyNotify;
    /** @var bool */
    protected $skipDoorToDoor;
    /** @var bool */
    protected $optionalReturn;
    /** @var string */
    protected $comment;
    /** @var string */
    protected $availableCancelState;
    /** @var TransportClassification */
    protected $clientRequirements;
    /** @var TransportClassification[] */
    protected $matchedCars = [];
    /** @var PerformerInfo */
    protected $performerInfo;
    /** @var ErrorMessage[] */
    protected $errorMessages = [];
    /** @var Warning[] */
    protected $warnings = [];
    /** @var string */
    protected $createdTs;
    /** @var string */
    protected $updatedTs;
    /** @var string */
    private $referralSource;
    /**
     * @return Contact
     */
    public function getEmergencyContact()
    {
    }
    /**
     * @param Contact $emergencyContact
     * @return Claim
     */
    public function setEmergencyContact(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Contact $emergencyContact) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return ShippingItem[]
     */
    public function getItems() : array
    {
    }
    /**
     * @param ShippingItem $shippingItem
     * @return Claim
     */
    public function addItem(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\ShippingItem $shippingItem) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return RoutePoints
     */
    public function getRoutePoints() : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RoutePoints
    {
    }
    /**
     * @param RoutePoints $routePoints
     * @return Claim
     */
    public function setRoutePoints(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RoutePoints $routePoints) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return string
     */
    public function getId()
    {
    }
    /**
     * @param string $id
     * @return Claim
     */
    public function setId(string $id) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return string
     */
    public function getCorpClientId()
    {
    }
    /**
     * @param string $corpClientId
     * @return Claim
     */
    public function setCorpClientId(string $corpClientId) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return string
     */
    public function getStatus()
    {
    }
    /**
     * @param string $status
     * @return Claim
     */
    public function setStatus(string $status) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return int
     */
    public function getVersion()
    {
    }
    /**
     * @param int $version
     * @return Claim
     */
    public function setVersion(int $version) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return Pricing
     */
    public function getPricing()
    {
    }
    /**
     * @param Pricing $pricing
     * @return Claim
     */
    public function setPricing(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Pricing $pricing) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return bool
     */
    public function isSkipClientNotify()
    {
    }
    /**
     * @param bool $skipClientNotify
     * @return Claim
     */
    public function setSkipClientNotify(bool $skipClientNotify) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return bool
     */
    public function isSkipEmergencyNotify()
    {
    }
    /**
     * @param bool $skipEmergencyNotify
     * @return Claim
     */
    public function setSkipEmergencyNotify(bool $skipEmergencyNotify) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return bool
     */
    public function isSkipDoorToDoor()
    {
    }
    /**
     * @param bool $skipDoorToDoor
     * @return Claim
     */
    public function setSkipDoorToDoor(bool $skipDoorToDoor) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return bool
     */
    public function isOptionalReturn()
    {
    }
    /**
     * @param bool $optionalReturn
     * @return Claim
     */
    public function setOptionalReturn(bool $optionalReturn) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return string
     */
    public function getComment()
    {
    }
    /**
     * @param string $comment
     * @return Claim
     */
    public function setComment(string $comment) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return string
     */
    public function getAvailableCancelState()
    {
    }
    /**
     * @param string $availableCancelState
     * @return Claim
     */
    public function setAvailableCancelState(string $availableCancelState) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return string
     */
    public function getCreatedTs()
    {
    }
    /**
     * @param string $createdTs
     * @return Claim
     */
    public function setCreatedTs(string $createdTs) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return string
     */
    public function getUpdatedTs()
    {
    }
    /**
     * @param string $updatedTs
     * @return Claim
     */
    public function setUpdatedTs(string $updatedTs) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return TransportClassification
     */
    public function getClientRequirements()
    {
    }
    /**
     * @param TransportClassification $clientRequirements
     * @return Claim
     */
    public function setClientRequirements(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\TransportClassification $clientRequirements) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return TransportClassification[]
     */
    public function getMatchedCars() : array
    {
    }
    /**
     * @param TransportClassification $transportClassification
     * @return Claim
     */
    public function addMatchedCar(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\TransportClassification $transportClassification) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return PerformerInfo
     */
    public function getPerformerInfo()
    {
    }
    /**
     * @param PerformerInfo $performerInfo
     * @return Claim
     */
    public function setPerformerInfo(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\PerformerInfo $performerInfo) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return ErrorMessage[]
     */
    public function getErrorMessages() : array
    {
    }
    /**
     * @param ErrorMessage $error
     * @return Claim
     */
    public function addErrorMessage(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\ErrorMessage $error) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return Warning[]
     */
    public function getWarnings() : array
    {
    }
    /**
     * @param Warning $warning
     * @return Claim
     */
    public function addWarning(\Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Warning $warning) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
    /**
     * @return string
     */
    public function getReferralSource()
    {
    }
    /**
     * @param string $referralSource
     * @return Claim
     */
    public function setReferralSource(string $referralSource) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Claim
    {
    }
}