<?php

namespace Bitrix\Sale\Delivery\Pecom;

/**
 * Class Calculator
 * @package Bitrix\Sale\Delivery\Pecom
 */
class Calculator
{
    protected $arConfig = array();
    protected $arOrder = array();
    protected $profileId = "";
    protected $packsCount = 0;
    /**
     * @param $arOrder
     * @param $arConfig
     * @param string $profileId
     */
    public function __construct($arOrder, $arConfig, $profileId = "")
    {
    }
    /**
     * Returns array wich can include "avia" and/or "auto" or be empty
     * @return array
     */
    public function getCompabilityInfo()
    {
    }
    /**
     * Returns calculations results
     * @return array
     */
    public function getPriceInfo()
    {
    }
    protected function parseCalcResult($jsonInfo)
    {
    }
    protected static function send($strParams)
    {
    }
    protected function createCompParamsStr()
    {
    }
    protected function createCalcParams()
    {
    }
}