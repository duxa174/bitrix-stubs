<?php

namespace Bitrix\Sale;

class Tax
{
    /** @var OrderBase|null */
    protected $order = null;
    /** @var array */
    protected $list = null;
    /** @var array  */
    protected $availableList = null;
    /** @var array */
    protected $changedValues = array();
    /** @var bool  */
    protected $deliveryTax = null;
    /** @var bool  */
    protected $isClone = false;
    /** @var bool  */
    protected $isExternal = false;
    /**
     * Tax constructor.
     */
    protected function __construct()
    {
    }
    /**
     * @return string
     */
    protected static function getTaxClassName()
    {
    }
    /**
     * @return string
     */
    protected static function getOrderTaxClassName()
    {
    }
    /**
     * @return array
     */
    public function getTaxList()
    {
    }
    /**
     * @param array $list
     */
    public function initTaxList(array $list)
    {
    }
    /**
     * @return OrderBase
     */
    public function getOrder()
    {
    }
    /**
     * Calculation of taxes
     *
     * @return Result
     * @throws Main\ObjectNotFoundException
     */
    public function calculate()
    {
    }
    /**
     * @return Result
     * @throws Main\ObjectNotFoundException
     */
    public function calculateDelivery()
    {
    }
    /**
     * @param array $taxList
     * @return array
     */
    protected function checkModifyTaxList(array $taxList)
    {
    }
    /**
     * @return Result
     * @throws Main\ObjectNotFoundException
     */
    public function save()
    {
    }
    /**
     * @return mixed
     * @throws Main\ArgumentException
     */
    private static function createTaxObject()
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @param OrderBase $order
     *
     * @return Tax
     */
    public static function load(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @return array
     */
    protected function loadList()
    {
    }
    public function resetTaxList()
    {
    }
    public function resetAvailableTaxList()
    {
    }
    /**
     *
     */
    public function refreshData()
    {
    }
    /**
     * @param $userId
     * @return array
     */
    public static function loadExemptList($userId)
    {
    }
    /**
     * @return array
     */
    public function getAvailableList()
    {
    }
    /**
     * @return array
     */
    protected function loadAvailableList()
    {
    }
    /**
     * @param $value
     */
    public function setDeliveryCalculate($value)
    {
    }
    /**
     * @return bool
     */
    public function isDeliveryCalculate()
    {
    }
    /**
     * @internal
     * @param \SplObjectStorage $cloneEntity
     *
     * @return Tax
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
    /**
     * @return bool
     */
    public function isClone()
    {
    }
}