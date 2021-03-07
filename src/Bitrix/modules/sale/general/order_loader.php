<?php

class CSaleOrderLoader
{
    const DEFUALT_VERSION = 2.05;
    const PARTIAL_VERSION = 2.1;
    const DEBUG_FILE = "1c_order_exchange.log";
    const DEBUG_MODE = \true;
    /** @var Sale\Exchange\ImportOneCBase  */
    public $importer;
    var $strError = "";
    var $SumFormat = ".";
    var $QuantityFormat = ".";
    var $sdp = "";
    var $arParams = array();
    var $bNewVersion = \false;
    var $arPersonTypesIDs = array();
    var $arExportInfo = array();
    var $arIBInfo = array();
    public $crmCompatibleMode = \false;
    public $marked_code = '[1C_Exchange:Order.deducted]';
    public $delimiter_reason = "&nbsp;&nbsp;<br/>";
    static $useStoreControl = \null;
    static $operationType = "";
    static $documentType = "";
    static $versionSchema = "";
    public $strErrorDocument = "";
    public $version1C = "";
    public $xmlid1C = "";
    public $orderIdOrig = "";
    public $modifyItem = array();
    public $needModifyItem = array();
    public function getSiteId()
    {
    }
    function deleteDocumentShipment(\Bitrix\Sale\Shipment $shipment)
    {
    }
    function deleteDocumentPayment(\Bitrix\Sale\Payment $payment)
    {
    }
    public function afterShippedCompatible1C(\Bitrix\Sale\Order $order)
    {
    }
    public function setMarkedOrder(\Bitrix\Sale\Order $order)
    {
    }
    public function unMarkedOrder(\Bitrix\Sale\Order $order)
    {
    }
    public function isMarkedOrder(\Bitrix\Sale\Order $order)
    {
    }
    public function createPaymentCompatible1C(\Bitrix\Sale\Order $order, $arDocument)
    {
    }
    public function beforePaidCompatible1C(\Bitrix\Sale\Order $order)
    {
    }
    public function afterPaidCompatible1C(\Bitrix\Sale\Order $order)
    {
    }
    public function getPaymentCompatible1CByOrder(\Bitrix\Sale\Order $order)
    {
    }
    public function createEntityCompatible1C(\Bitrix\Sale\Order $order, $arDocument)
    {
    }
    public function updateEntityCompatible1C(\Bitrix\Sale\Order $order, $arDocument)
    {
    }
    public function getLogFileDir()
    {
    }
    public function getLogFilePath()
    {
    }
    public function logMessage($message = '')
    {
    }
    public function getTimeStampString()
    {
    }
    public static function onBeforeUpdateOrderWithoutShipmentsPayments(\Bitrix\Main\Event $event)
    {
    }
    public static function onBeforeSaveOrderWithoutShipmentsPayments(\Bitrix\Main\Event $event)
    {
    }
    function getDocumentId($type, $code, $xmlId1CDocument)
    {
    }
    function getOrderIdByDocument($orderCode)
    {
    }
    function addBasketForShipment($arDocument, $newBasketItems, \Bitrix\Sale\Shipment $shipment)
    {
    }
    function updateOrderWithoutShipmentsPayments(array $arOrder)
    {
    }
    function saveOrderCompatibility($arDocument, $arAditFields = array())
    {
    }
    function Paid(\Bitrix\Sale\Payment $payment, $arDocument)
    {
    }
    function Ship(\Bitrix\Sale\Shipment $shipment, $arDocument)
    {
    }
    function saveOrder($arDocument, $orderFields, $arAditFields)
    {
    }
    function addProduct($arDocument, $documentBasketItems, $documentShipmentItems, \Bitrix\Sale\Shipment $shipment)
    {
    }
    function updatePaymentFromDocument(array $arDocument, \Bitrix\Sale\Payment $payment)
    {
    }
    function addPaymentFromDocumentByOrder(array $arDocument, \Bitrix\Sale\Order $order)
    {
    }
    function addOrderWithoutShipmentsPayments(array $arDocument, $addOrderField = array())
    {
    }
    function addShipmentFromDocumentByOrder(array $arDocument, \Bitrix\Sale\Order $order)
    {
    }
    function updateShipmentQuantityFromDocument(array $arDocument, \Bitrix\Sale\Shipment $shipment)
    {
    }
    function deleteShipmentItemsByDocument($arDocument, \Bitrix\Sale\Shipment $shipment)
    {
    }
    function updateShipmentNeedQuantity($externalQuantity, \Bitrix\Sale\BasketItem $basketItem, \Bitrix\Sale\Shipment $shipment, $shipmentItemFields)
    {
    }
    function updateShipmentNeedQuantityFromBasketItems($needQuantityWithoutSystem, $needQuantity, \Bitrix\Sale\BasketItem $basketItem, \Bitrix\Sale\Shipment $shipment)
    {
    }
    function updateShipmentItemQuantity($needQuantity, \Bitrix\Sale\BasketItem $basketItem, \Bitrix\Sale\Shipment $shipment)
    {
    }
    function setShipmentItemQuantity($needQuantity, \Bitrix\Sale\BasketItem $basketItem, \Bitrix\Sale\Shipment $shipment)
    {
    }
    function updateShipmentNeedQuantityFromSystem($Quantity, \Bitrix\Sale\BasketItem $basketItem, \Bitrix\Sale\Shipment $shipment)
    {
    }
    function updateBasketNeedExternalQuantity($externalQuantity, $availableQuantityByProducts, \Bitrix\Sale\BasketItem $basketItem, \Bitrix\Sale\Shipment $shipment)
    {
    }
    function setDocumentType($operationType)
    {
    }
    function setOperationType($type)
    {
    }
    function setVersion1C($version1C)
    {
    }
    function setXMLDocumentID($xmlid)
    {
    }
    function setOrderIdOriginal($code)
    {
    }
    function getVersion1C()
    {
    }
    function getXMLDocumentID()
    {
    }
    function getOrderIdOriginal()
    {
    }
    function checkConditionForShipmentByBasket(\Bitrix\Sale\BasketItem $basketItem, \Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @return bool|int
     */
    protected static function getDefaultPaySystem()
    {
    }
    function checkPSOnStatusPaymentOrder()
    {
    }
    function checkVersion1C(\Bitrix\Sale\Shipment $shipment)
    {
    }
    function setVersionSchema($versionSchema = \false)
    {
    }
    function setPersonTypesID()
    {
    }
    function setExportInfo()
    {
    }
    function getPersonType($arOrder)
    {
    }
    function getExportInfo($arOrder)
    {
    }
    function prepareOrderFields($arOrder)
    {
    }
    function getOrderTaxList($arOrder)
    {
    }
    function getBasketProperty($item)
    {
    }
    function getOrderProperty($arAgent, $orderFields, $arOrder)
    {
    }
    function getOptionNameByType()
    {
    }
    function getVersionSchema()
    {
    }
    function addNeedModifyItem($type, $id)
    {
    }
    function addModifyItem($type, $id)
    {
    }
    function getProductChangePrice($itemID, $priceNew = \null)
    {
    }
    function getAvailableSystemQuentityProduct(\Bitrix\Sale\BasketItem $basketItem, \Bitrix\Sale\Shipment $shipment)
    {
    }
    function getAvailableQuentityProduct(\Bitrix\Sale\BasketItem $basketItem, \Bitrix\Sale\Shipment $shipment)
    {
    }
    function getUserByProperty($arOrder)
    {
    }
    function elementHandler($path, $attr)
    {
    }
    function existsBasketItem(\Bitrix\Sale\BasketItem $basketItem, array $item = array())
    {
    }
    protected function getXMLStream(\CXMLFileStream $fileStream)
    {
    }
    protected function nodeHandlerPartialVersion($arDocument)
    {
    }
    public function nodeHandlerDefaultModuleOneCCRM(\CDataXML $dataXml)
    {
    }
    public function nodeHandlerDefaultModuleOneC(\CDataXML $dataXml)
    {
    }
    function nodeHandler(\CDataXML $dataXml, \CXMLFileStream $fileStream)
    {
    }
    function ToFloat($str)
    {
    }
    function ToInt($str)
    {
    }
    function collectDocumentInfo($value)
    {
    }
    function collectAgentInfo($data = array())
    {
    }
    function prepareProduct4Basket($itemID, $arItem, $orderId, $orderInfo)
    {
    }
    function documentMustHaveProducts($arDocument)
    {
    }
    function oldSaveOrder($arOrder, $option = array())
    {
    }
    public static function setStatus($id, $statusId, $isInvoice)
    {
    }
}