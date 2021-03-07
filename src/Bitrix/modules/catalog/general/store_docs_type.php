<?php

abstract class CCatalogDocsTypes
{
    protected static $clearAutoCache = array();
    /** The method of conducting a document, distributes products to warehouses, according to the document type.
     * @param $documentId
     * @param $userId
     * @param $currency
     * @param $contractorId
     * @return mixed
     */
    abstract function conductDocument($documentId, $userId, $currency, $contractorId);
    /** Method cancels an instrument and perform the reverse action of conducting a document.
     * @param $documentId
     * @param $userId
     * @return mixed
     */
    abstract function cancellationDocument($documentId, $userId);
    /** The method checks the correctness of the data warehouse. If successful, enrolling \ debits to the storage required amount of product.
     * @param $arFields
     * @param $userId
     * @return array|bool
     */
    protected function distributeElementsToStores($arFields, $userId)
    {
    }
    /** The method works with barcodes. If necessary, check the uniqueness of multiple barcodes.
     * @param $arFields
     * @param $userId
     * @return bool|int
     */
    protected function applyBarCode($arFields, $userId)
    {
    }
    protected function checkTotalAmount($elementId, $name = '')
    {
    }
    protected function checkAmountField($arDocElement, $name = '')
    {
    }
    protected static function isNeedClearPublicCache($currentQuantity, $newQuantity, $quantityTrace, $canBuyZero, $ratio = 1)
    {
    }
    protected static function clearPublicCache($productID, $productInfo = array())
    {
    }
}
class CAllCatalogArrivalDocsType extends \CCatalogDocsTypes
{
    /** The method returns an array of fields needed for this type of document.
     * @return array
     */
    public static function getFields()
    {
    }
    /**
     * @param $documentId
     * @param $userId
     * @param $currency
     * @param $contractorId
     * @return array|bool
     */
    public function conductDocument($documentId, $userId, $currency, $contractorId)
    {
    }
    /**
     * @param $documentId
     * @param $userId
     * @return array|bool
     */
    public function cancellationDocument($documentId, $userId)
    {
    }
}
class CCatalogArrivalDocs extends \CAllCatalogArrivalDocsType
{
}
class CAllCatalogMovingDocsType extends \CCatalogDocsTypes
{
    /** The method returns an array of fields needed for this type of document.
     * @return array
     */
    public static function getFields()
    {
    }
    /**
     * @param $documentId
     * @param $userId
     * @param $currency
     * @param $contractorId
     * @return array|bool
     */
    public function conductDocument($documentId, $userId, $currency, $contractorId)
    {
    }
    /**
     * @param $documentId
     * @param $userId
     * @return array|bool
     */
    public function cancellationDocument($documentId, $userId)
    {
    }
}
class CCatalogMovingDocs extends \CAllCatalogMovingDocsType
{
}
class CAllCatalogReturnsDocsType extends \CCatalogDocsTypes
{
    /** The method returns an array of fields needed for this type of document.
     * @return array
     */
    public static function getFields()
    {
    }
    /**
     * @param $documentId
     * @param $userId
     * @param $currency
     * @param $contractorId
     * @return array|bool
     */
    public function conductDocument($documentId, $userId, $currency, $contractorId)
    {
    }
    /**
     * @param $documentId
     * @param $userId
     * @return array|bool
     */
    public function cancellationDocument($documentId, $userId)
    {
    }
}
class CCatalogReturnsDocs extends \CAllCatalogReturnsDocsType
{
}
class CAllCatalogDeductDocsType extends \CCatalogDocsTypes
{
    /** The method returns an array of fields needed for this type of document.
     * @return array
     */
    public static function getFields()
    {
    }
    /**
     * @param $documentId
     * @param $userId
     * @param $currency
     * @param $contractorId
     * @return array|bool
     */
    public function conductDocument($documentId, $userId, $currency, $contractorId)
    {
    }
    /**
     * @param $documentId
     * @param $userId
     * @return array|bool
     */
    public function cancellationDocument($documentId, $userId)
    {
    }
}
class CCatalogDeductDocs extends \CAllCatalogDeductDocsType
{
}
class CAllCatalogUnReservedDocsType extends \CCatalogDocsTypes
{
    /** The method returns an array of fields needed for this type of document.
     * @return array
     */
    public static function getFields()
    {
    }
    /**
     * @param $documentId
     * @param $userId
     * @param $currency
     * @param $contractorId
     * @return bool
     */
    public function conductDocument($documentId, $userId, $currency, $contractorId)
    {
    }
    /**
     * @param $documentId
     * @param $userId
     * @return bool
     */
    public function cancellationDocument($documentId, $userId)
    {
    }
}
class CCatalogUnReservedDocs extends \CAllCatalogUnReservedDocsType
{
}