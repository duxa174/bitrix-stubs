<?php

namespace Bitrix\Sale\Delivery;

/**
 * Class CalculationResult
 * @package Bitrix\Sale\Delivery
 * Used by delivery services as a calculations result structure
 */
class CalculationResult extends \Bitrix\Sale\ResultSerializable
{
    const PERIOD_TYPE_MIN = "MIN";
    const PERIOD_TYPE_HOUR = "H";
    const PERIOD_TYPE_DAY = "D";
    const PERIOD_TYPE_MONTH = "M";
    /** @var string */
    protected $description = "";
    /** @var string */
    protected $periodDescription = "";
    /** @var int */
    protected $periodFrom = null;
    /** @var int  */
    protected $periodTo = null;
    /** @var string  */
    protected $periodType = self::PERIOD_TYPE_DAY;
    /** @var bool */
    protected $nextStep = false;
    /** @var int */
    protected $packsCount = 0;
    /** @var float */
    protected $extraServicesPrice = 0;
    /** @var float */
    protected $deliveryPrice = 0;
    /** @var string $tmpData */
    protected $tmpData = "";
    /**
     * CalculationResult constructor.
     */
    public function __construct()
    {
    }
    /**	@return float */
    public function getDeliveryPrice()
    {
    }
    /** @param float $price */
    public function setDeliveryPrice($price)
    {
    }
    /** @return float  */
    public function getExtraServicesPrice()
    {
    }
    /** @param float $price */
    public function setExtraServicesPrice($price)
    {
    }
    /**	@return float */
    public function getPrice()
    {
    }
    /** @param string $description */
    public function setDescription($description)
    {
    }
    /** @return string */
    public function getDescription()
    {
    }
    /** @param string $description */
    public function setPeriodDescription($description)
    {
    }
    /** @return string */
    public function getPeriodDescription()
    {
    }
    /**
     * If calculation needs several steps.
     */
    public function setAsNextStep()
    {
    }
    /** @return string */
    public function isNextStep()
    {
    }
    /**	@return int */
    public function getPacksCount()
    {
    }
    /** @param int $count */
    public function setPacksCount($count)
    {
    }
    /**	@return int */
    public function getTmpData()
    {
    }
    /** @param string $data */
    public function setTmpData($data)
    {
    }
    /** @return int */
    public function getPeriodFrom()
    {
    }
    /** @param int $periodFrom */
    public function setPeriodFrom($periodFrom)
    {
    }
    /** @return int */
    public function getPeriodTo()
    {
    }
    /** @param int $periodTo */
    public function setPeriodTo($periodTo)
    {
    }
    /** @return int */
    public function getPeriodType()
    {
    }
    /** @param int $periodType */
    public function setPeriodType($periodType)
    {
    }
}