<?php

class CSaleBasketDiscountConvert extends \CCatalogStepOperations
{
    const SESSION_PREFIX = 'BDC';
    protected $filter = array();
    protected $orderViewUrl = '';
    public function __construct($sessID, $maxExecutionTime, $maxOperationCounter)
    {
    }
    public function setFilter($filter)
    {
    }
    public function runOperation()
    {
    }
    public static function getAllCounter()
    {
    }
    public static function getFilterCounter($filter)
    {
    }
    public static function checkFilter(\Bitrix\Main\HttpRequest $request)
    {
    }
}
class CSaleDiscountReindex extends \CCatalogStepOperations
{
    const SESSION_PREFIX = 'SDR';
    protected $discountEditUrl = '';
    public function __construct($sessID, $maxExecutionTime, $maxOperationCounter)
    {
    }
    public function runOperation()
    {
    }
    public static function getAllCounter()
    {
    }
}
class CSaleDiscountConvertExt extends \CCatalogStepOperations
{
    const SESSION_PREFIX = 'SDC15';
    protected $discountEditUrl = '';
    protected $deliveryCodes = array();
    protected $deliveryRuleId = 'CondSaleDelivery';
    public function __construct($sessID, $maxExecutionTime, $maxOperationCounter)
    {
    }
    public function runOperation()
    {
    }
    public static function getAllCounter()
    {
    }
    protected function getDeliveryCodes()
    {
    }
    protected function convertDelivery(&$condition)
    {
    }
}