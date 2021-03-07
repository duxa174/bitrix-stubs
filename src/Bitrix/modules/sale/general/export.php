<?php

class CSaleExport
{
    const DEFAULT_VERSION = 2.05;
    const PARTIAL_VERSION = 2.1;
    const CONTAINER_VERSION = 3;
    const LAST_ORDER_PREFIX = 'LAST_ORDER_ID';
    const DIVIDER_NUMBER_POSITION = 100000;
    static $versionSchema;
    static $crmMode;
    static $currency;
    static $measures;
    static $orderTax;
    static $arResultStat = array();
    static $xmlVersion = "1.0";
    static $xmlEncoding = "windows-1251";
    static $xmlRootName = "<?xml version=\"#version#\" encoding=\"#encoding#\"?>";
    static $typeDocument = "";
    static $deliveryAdr = "";
    static $siteNameByOrder = "";
    static $documentsToLog;
    protected static $lid = \null;
    protected static function getParentEntityTypeId()
    {
    }
    protected static function load($id)
    {
    }
    public static function getParentEntityTable()
    {
    }
    protected static function getPaymentTable()
    {
    }
    protected static function getShipmentTable()
    {
    }
    protected static function getBasketTable()
    {
    }
    protected static function getEntityChangeTable()
    {
    }
    protected static function getEntityMarker()
    {
    }
    protected static function getPersonType()
    {
    }
    protected static function getUserTimeStapmX(array $arOrder)
    {
    }
    protected static function getUserXmlId(array $arOrder, array $arProp)
    {
    }
    protected static function updateEmptyUserXmlId(array $arOrder, array $arProp)
    {
    }
    protected static function resolveEntityTypeId($typeDocument, array $document)
    {
    }
    protected static function getStatusInfoByStatusId($id)
    {
    }
    /**
     * @param $value
     * @return string
     */
    protected static function toText($value)
    {
    }
    public static function getNumberBasketPosition($basketId)
    {
    }
    public static function setLanguage($value)
    {
    }
    static function setXmlEncoding($encoding)
    {
    }
    static function getXmlRootName()
    {
    }
    static function getCmrXmlRootNameParams()
    {
    }
    static function getDeliveryAddress()
    {
    }
    static function setDeliveryAddress($deliveryAdr)
    {
    }
    static function setVersionSchema($versionSchema = \false)
    {
    }
    static function setCrmMode($crmMode)
    {
    }
    static function setCurrencySchema($currency)
    {
    }
    static function getVersionSchema()
    {
    }
    /**
     * @return int|null
     */
    public static function getCashBoxOneCId()
    {
    }
    static function isExportFromCRM($arOptions)
    {
    }
    static function getEndTime($time_limit)
    {
    }
    static function checkTimeIsOver($time_limit, $end_time)
    {
    }
    static function getOrderPrefix()
    {
    }
    function getAccountNumberShopPrefix()
    {
    }
    function getSalePaySystem()
    {
    }
    function getSaleDelivery()
    {
    }
    static function getCatalogStore()
    {
    }
    static function getOrderDeliveryItem($arOrder, $bVat, $vatRate, $vatSum)
    {
    }
    static function getCatalogMeasure()
    {
    }
    static function setCatalogMeasure($arMeasures)
    {
    }
    static function setOrderSumTaxMoney($orderTax)
    {
    }
    static function getSaleExport()
    {
    }
    static function prepareSaleProperty($arOrder, $bExportFromCrm, $bCrmModuleIncluded, $paySystems, $delivery, &$locationStreetPropertyValue, \Bitrix\Sale\Order $order)
    {
    }
    static function prepareSalePropertyRekv(\Bitrix\Sale\IBusinessValueProvider $entity, $agentParams, $arProp, $locationStreetPropertyValue = '')
    {
    }
    static function getSite()
    {
    }
    static function setSiteNameByOrder($arOrder)
    {
    }
    static function getPayment($arOrder)
    {
    }
    static function getShipment($arOrder)
    {
    }
    protected static function getLastOrderExported($timeUpdate)
    {
    }
    /**
     * @return array
     */
    protected static function prepareFilter($arFilter = array())
    {
    }
    /**
     * @param array $arOrder
     */
    protected static function saveExportParams(array $arOrder)
    {
    }
    protected static function getLastDateUpdateByParams(array $params)
    {
    }
    /**
     * @param array $params
     * @return \Bitrix\Sale\Result
     */
    public function export(array $params)
    {
    }
    static function ExportOrders2Xml($arFilter = array(), $nTopCount = 0, $currency = "", $crmMode = \false, $time_limit = 0, $version = \false, $arOptions = array())
    {
    }
    function UnZip($file_name, $last_zip_entry = "", $interval = 0)
    {
    }
    static function getOrderTax(\Bitrix\Sale\Order $order)
    {
    }
    static function getOrderSumTaxMoney($arOrderTaxAll)
    {
    }
    static function getXmlOrderTax($arOrderTaxAll)
    {
    }
    static function getXmlOrderDiscount($arOrder)
    {
    }
    static function getShipmentsStoreList(\Bitrix\Sale\Order $order)
    {
    }
    static function getXmlSaleStore($arShipmentStore, $arStore)
    {
    }
    function getXmlSaleStoreBasket($arOrder, $arStore)
    {
    }
    /**
     * @param string $code
     * @return string
     */
    public static function normalizeExternalCode($code)
    {
    }
    protected static function outputXmlMarkingCodeGroup($arBasket)
    {
    }
    protected static function outputXmlMarkingCode($shipmentItemId, $order)
    {
    }
    protected static function outputXmlUnit($arBasket)
    {
    }
    static function getXmlBasketItems($type, $arOrder, $arFilter, $arSelect = array(), $arShipment = array(), $order = \null)
    {
    }
    static function getXmlSaleProperties($arOrder, $arShipment, $arPayment, $agent, $agentParams, $bExportFromCrm)
    {
    }
    static function getXmlRekvProperties($agent, $agentParams)
    {
    }
    static function OutputXmlRekvProperties($agent, $agentParams)
    {
    }
    static function getXmlContragents($arOrder = array(), $arProp = array(), $agent = array(), $arOptions = array())
    {
    }
    static function OutputXmlDocumentsByType($typeDocument, $xmlResult, $arOrder, $documents, \Bitrix\Sale\Order $order = \null, $agentParams, $arProp, $locationStreetPropertyValue)
    {
    }
    static function OutputXmlSiteName($arOrder)
    {
    }
    static function OutputXmlDeliveryAddress()
    {
    }
    static function OutputXmlDocumentRemove($typeDocument, $document)
    {
    }
    static function OutputXmlDocument($typeDocument, $xmlResult, $document = array())
    {
    }
    static function ExportContragents($arOrder = array(), $arProp = array(), $agent = array(), $arOptions = array())
    {
    }
    public static function getFormatDate($value)
    {
    }
    public static function isFormattedDateFields($type, $field)
    {
    }
    public static function getFormattedDateFields()
    {
    }
    /** @deprecated */
    private static $systemCodes = array(
        // !!! Make sure these codes are in sync with system codes in BusinessValueConsumer1C !!!
        //  'new bizval name'            => 'old 1c name'
        \Bitrix\Sale\BusinessValue::INDIVIDUAL_DOMAIN => array('BUYER_PERSON_NAME' => 'FULL_NAME', 'BUYER_PERSON_NAME_FIRST' => 'NAME', 'BUYER_PERSON_NAME_SECOND' => 'SECOND_NAME', 'BUYER_PERSON_NAME_LAST' => 'SURNAME', 'BUYER_PERSON_NAME_AGENT' => 'AGENT_NAME', 'BUYER_PERSON_NAME_CONTACT' => 'CONTACT_PERSON', 'BUYER_PERSON_BIRTHDAY' => 'BIRTHDAY', 'BUYER_PERSON_GENDER' => 'MALE', 'BUYER_PERSON_INN' => 'INN', 'BUYER_PERSON_KPP' => 'KPP', 'BUYER_PERSON_ADDRESS' => 'ADDRESS_FULL', 'BUYER_PERSON_ZIP' => 'INDEX', 'BUYER_PERSON_COUNTRY' => 'COUNTRY', 'BUYER_PERSON_REGION' => 'REGION', 'BUYER_PERSON_STATE' => 'STATE', 'BUYER_PERSON_TOWN' => 'TOWN', 'BUYER_PERSON_CITY' => 'CITY', 'BUYER_PERSON_STREET' => 'STREET', 'BUYER_PERSON_HOUSING' => 'BUILDING', 'BUYER_PERSON_BUILDING' => 'HOUSE', 'BUYER_PERSON_APARTMENT' => 'FLAT', 'BUYER_PERSON_PHONE' => 'PHONE', 'BUYER_PERSON_EMAIL' => 'EMAIL', 'BUYER_PERSON_F_ADDRESS_FULL' => 'F_ADDRESS_FULL', 'BUYER_PERSON_F_INDEX' => 'F_INDEX', 'BUYER_PERSON_F_COUNTRY' => 'F_COUNTRY', 'BUYER_PERSON_F_REGION' => 'F_REGION', 'BUYER_PERSON_F_STATE' => 'F_STATE', 'BUYER_PERSON_F_TOWN' => 'F_TOWN', 'BUYER_PERSON_F_CITY' => 'F_CITY', 'BUYER_PERSON_F_STREET' => 'F_STREET', 'BUYER_PERSON_F_BUILDING' => 'F_BUILDING', 'BUYER_PERSON_F_HOUSE' => 'F_HOUSE', 'BUYER_PERSON_F_FLAT' => 'F_FLAT'),
        \Bitrix\Sale\BusinessValue::ENTITY_DOMAIN => array('BUYER_COMPANY_NAME' => 'FULL_NAME', 'BUYER_COMPANY_NAME_AGENT' => 'AGENT_NAME', 'BUYER_COMPANY_NAME_CONTACT' => 'CONTACT_PERSON', 'BUYER_COMPANY_INN' => 'INN', 'BUYER_COMPANY_KPP' => 'KPP', 'BUYER_COMPANY_ADDRESS' => 'ADDRESS_FULL', 'BUYER_COMPANY_ZIP' => 'INDEX', 'BUYER_COMPANY_COUNTRY' => 'COUNTRY', 'BUYER_COMPANY_REGION' => 'REGION', 'BUYER_COMPANY_STATE' => 'STATE', 'BUYER_COMPANY_TOWN' => 'TOWN', 'BUYER_COMPANY_CITY' => 'CITY', 'BUYER_COMPANY_STREET' => 'STREET', 'BUYER_COMPANY_HOUSING' => 'BUILDING', 'BUYER_COMPANY_BUILDING' => 'HOUSE', 'BUYER_COMPANY_APARTMENT' => 'FLAT', 'BUYER_COMPANY_PHONE' => 'PHONE', 'BUYER_COMPANY_EMAIL' => 'EMAIL', 'BUYER_COMPANY_EGRPO' => 'EGRPO', 'BUYER_COMPANY_OKVED' => 'OKVED', 'BUYER_COMPANY_OKDP' => 'OKDP', 'BUYER_COMPANY_OKOPF' => 'OKOPF', 'BUYER_COMPANY_OKFC' => 'OKFC', 'BUYER_COMPANY_OKPO' => 'OKPO', 'BUYER_COMPANY_BANK_ACCOUNT' => 'ACCOUNT_NUMBER', 'BUYER_COMPANY_BANK_NAME' => 'B_NAME', 'BUYER_COMPANY_BANK_BIK' => 'B_BIK', 'BUYER_COMPANY_BANK_ADDRESS_FULL' => 'B_ADDRESS_FULL', 'BUYER_COMPANY_BANK_INDEX' => 'B_INDEX', 'BUYER_COMPANY_BANK_COUNTRY' => 'B_COUNTRY', 'BUYER_COMPANY_BANK_REGION' => 'B_REGION', 'BUYER_COMPANY_BANK_STATE' => 'B_STATE', 'BUYER_COMPANY_BANK_TOWN' => 'B_TOWN', 'BUYER_COMPANY_BANK_CITY' => 'B_CITY', 'BUYER_COMPANY_BANK_STREET' => 'B_STREET', 'BUYER_COMPANY_BANK_BUILDING' => 'B_BUILDING', 'BUYER_COMPANY_BANK_HOUSE' => 'B_HOUSE', 'BUYER_COMPANY_F_ADDRESS_FULL' => 'F_ADDRESS_FULL', 'BUYER_COMPANY_F_INDEX' => 'F_INDEX', 'BUYER_COMPANY_F_COUNTRY' => 'F_COUNTRY', 'BUYER_COMPANY_F_REGION' => 'F_REGION', 'BUYER_COMPANY_F_STATE' => 'F_STATE', 'BUYER_COMPANY_F_TOWN' => 'F_TOWN', 'BUYER_COMPANY_F_CITY' => 'F_CITY', 'BUYER_COMPANY_F_STREET' => 'F_STREET', 'BUYER_COMPANY_F_BUILDING' => 'F_BUILDING', 'BUYER_COMPANY_F_HOUSE' => 'F_HOUSE', 'BUYER_COMPANY_F_FLAT' => 'F_FLAT'),
    );
    function GetList($order = array("ID" => "DESC"), $filter = array(), $group = \false, $arNavStartParams = \false, $select = array())
    {
    }
    /**
     * @param \Bitrix\Sale\IBusinessValueProvider $entity
     * @return array
     */
    protected static function getProvidersInstanceByEntity(\Bitrix\Sale\IBusinessValueProvider $entity)
    {
    }
    /**
     * @deprecated
     * @param \Bitrix\Sale\Order $order
     * @return array
     */
    protected function getProvidersInstanceByOrder(\Bitrix\Sale\Order $order)
    {
    }
    protected static function getProviderInstanceByProviderCode(\Bitrix\Sale\IBusinessValueProvider $entity, $providerCode)
    {
    }
    function GetByID($ID)
    {
    }
    /** @deprecated */
    private static function logError($itemId, $message, \Bitrix\Main\Result $result = \null)
    {
    }
    /** @deprecated */
    private static function setMap($personTypeId, array $map1C, $itemId)
    {
    }
    /** @deprecated */
    public static function migrateToBusinessValues()
    {
    }
    static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    static function Add($arFields)
    {
    }
    static function Update($ID, $arFields)
    {
    }
    static function deleteREKV($typeId)
    {
    }
    function Delete($ID)
    {
    }
    /**
     * @param $name
     *
     * @return string
     */
    public static function getTagName($name)
    {
    }
    /**
     * @param array $fields
     * @return \Bitrix\Main\ORM\Data\AddResult
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectException
     */
    public static function log(array $fields)
    {
    }
}
final class ExportOneCCRM extends \CSaleExport
{
    protected static function getParentEntityTypeId()
    {
    }
    protected static function load($id)
    {
    }
    public static function getParentEntityTable()
    {
    }
    protected static function getPaymentTable()
    {
    }
    protected static function getShipmentTable()
    {
    }
    protected static function getBasketTable()
    {
    }
    protected static function getEntityChangeTable()
    {
    }
    protected static function getEntityMarker()
    {
    }
    protected static function getPersonType()
    {
    }
    public static function normalizeExternalCode($xml)
    {
    }
    protected static function getUserTimeStapmX(array $arOrder)
    {
    }
    protected static function getUserXmlId(array $arOrder, array $arProp)
    {
    }
    protected static function resolveEntityTypeId($typeDocument, array $document)
    {
    }
    protected static function getStatusInfoByStatusId($id)
    {
    }
}