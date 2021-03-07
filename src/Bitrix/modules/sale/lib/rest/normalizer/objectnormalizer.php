<?php

namespace Bitrix\Sale\Rest\Normalizer;

/**
 * Class ObjectNormalizer
 * @package Bitrix\Sale\Rest\Normalizer
 * нотация всех ключей в результате должна быть SNAKE_CASE
 */
class ObjectNormalizer
{
    protected $externalFields;
    protected $fields;
    protected $order;
    public function __construct(array $data = [])
    {
    }
    public function init(\Bitrix\Sale\Order $order)
    {
    }
    public function orderNormalize()
    {
    }
    public function basketNormalize()
    {
    }
    public function propertiesValueNormalize()
    {
    }
    public function paymentsNormalize()
    {
    }
    public function shipmentsNormalize()
    {
    }
    public function applyDiscountNormalize()
    {
    }
    public function taxNormalize()
    {
    }
    public function tradeBindingsNormalize()
    {
    }
    public function getFields()
    {
    }
    /**
     * @return \Bitrix\Sale\Order
     */
    protected function getOrder()
    {
    }
}