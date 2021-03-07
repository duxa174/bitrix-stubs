<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class Check
 * @package Bitrix\Sale\Cashbox
 */
abstract class Check
{
    const EVENT_ON_CHECK_PREPARE_DATA = 'OnSaleCheckPrepareData';
    const PARAM_FISCAL_DOC_NUMBER = 'fiscal_doc_number';
    const PARAM_FISCAL_DOC_ATTR = 'fiscal_doc_attribute';
    const PARAM_FISCAL_RECEIPT_NUMBER = 'fiscal_receipt_number';
    const PARAM_FN_NUMBER = 'fn_number';
    const PARAM_SHIFT_NUMBER = 'shift_number';
    const PARAM_REG_NUMBER_KKT = 'reg_number_kkt';
    const PARAM_DOC_TIME = 'doc_time';
    const PARAM_DOC_SUM = 'doc_sum';
    const PARAM_CALCULATION_ATTR = 'calculation_attribute';
    const CALCULATED_SIGN_INCOME = 'income';
    const CALCULATED_SIGN_CONSUMPTION = 'consumption';
    const SHIPMENT_TYPE_NONE = '';
    const PAYMENT_TYPE_CASH = 'cash';
    const PAYMENT_TYPE_ADVANCE = 'advance';
    const PAYMENT_TYPE_CASHLESS = 'cashless';
    const PAYMENT_TYPE_CREDIT = 'credit';
    const PAYMENT_OBJECT_COMMODITY = 'commodity';
    const PAYMENT_OBJECT_EXCISE = 'excise';
    const PAYMENT_OBJECT_JOB = 'job';
    const PAYMENT_OBJECT_SERVICE = 'service';
    const PAYMENT_OBJECT_PAYMENT = 'payment';
    const SUPPORTED_ENTITY_TYPE_PAYMENT = 'payment';
    const SUPPORTED_ENTITY_TYPE_SHIPMENT = 'shipment';
    const SUPPORTED_ENTITY_TYPE_ALL = 'all';
    const SUPPORTED_ENTITY_TYPE_NONE = 'none';
    /** @var array $fields */
    private $fields = array();
    /** @var array $cashboxList */
    private $cashboxList = array();
    /** @var CollectableEntity[] $entities */
    private $entities = array();
    /** @var array $relatedEntities */
    private $relatedEntities = array();
    /**
     * @throws Main\NotImplementedException
     * @return string
     */
    public static function getType()
    {
    }
    /**
     * @throws Main\NotImplementedException
     * @return string
     */
    public static function getCalculatedSign()
    {
    }
    /**
     * @throws Main\NotImplementedException
     * @return string
     */
    public static function getName()
    {
    }
    /**
     * @param string $handler
     * @return null|Check
     */
    public static function create($handler)
    {
    }
    /**
     * Check constructor.
     */
    private function __construct()
    {
    }
    /**
     * @param $name
     * @return mixed
     */
    public function getField($name)
    {
    }
    /**
     * @param $name
     * @param $value
     */
    public function setField($name, $value)
    {
    }
    /**
     * @return string
     */
    public function getUrl()
    {
    }
    /**
     * @param array $cashboxList
     */
    public function setAvailableCashbox(array $cashboxList)
    {
    }
    /**
     * @param array $entities
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectNotFoundException
     */
    public function setEntities(array $entities)
    {
    }
    /**
     * @param array $entities
     * @throws Main\NotSupportedException
     */
    public function setRelatedEntities(array $entities)
    {
    }
    /**
     * @param $entities
     * @throws Main\NotImplementedException
     * @throws Main\NotSupportedException
     */
    protected function checkRelatedEntities($entities)
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getRelatedEntities()
    {
    }
    /**
     * @return array|CollectableEntity[]
     * @throws Main\SystemException
     */
    public function getEntities()
    {
    }
    /**
     * @return Main\Entity\AddResult|Main\Entity\UpdateResult
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws \Exception
     */
    public function save()
    {
    }
    /**
     * @param $cashboxId
     */
    public function linkCashbox($cashboxId)
    {
    }
    /**
     * @param $settings
     */
    public function init($settings)
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\LoaderException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getDataForCheck()
    {
    }
    /**
     * @param array $entities
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function extractDataFromEntitiesInternal(array $entities)
    {
    }
    /**
     * @param string $markingCode
     * @param string $markingCodeGroup
     * @return string
     */
    protected function buildTag1162(string $markingCode, string $markingCodeGroup) : string
    {
    }
    /**
     * @param $code
     * @return array
     */
    private function parseMarkingCode(string $code) : array
    {
    }
    /**
     * @param $string
     * @param $size
     * @return string
     */
    protected function convertToBinaryFormat($string, $size) : string
    {
    }
    /**
     * @param $string
     * @return string
     */
    protected function convertCharsToHex($string) : string
    {
    }
    /**
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\LoaderException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function extractData()
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function extractDataInternal()
    {
    }
    /**
     * @param Shipment $shipment
     * @return int
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\SystemException
     */
    protected function getDeliveryVatId(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param BasketItem $basketItem
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function getProductVatId(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param $productId
     * @return int
     * @throws Main\LoaderException
     */
    private function getVatIdByProductId($productId)
    {
    }
    /**
     * @param $vatRate
     * @return int|mixed
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getVatIdByVatRate($vatRate)
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\LoaderException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function validate()
    {
    }
    /**
     * @param $data
     * @return bool
     */
    private function isCorrectSum($data)
    {
    }
    /**
     * @return string
     */
    public static function getSupportedEntityType()
    {
    }
    /**
     * @return string
     */
    public static function getSupportedRelatedEntityType()
    {
    }
    /**
     * @deprecated use method extractData() instead
     *
     * @param array $entities
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\LoaderException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function extractDataFromEntities(array $entities)
    {
    }
}