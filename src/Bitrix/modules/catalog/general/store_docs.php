<?php

class CAllCatalogDocs
{
    static $types = array("A" => "CCatalogArrivalDocs", "M" => "CCatalogMovingDocs", "R" => "CCatalogReturnsDocs", "D" => "CCatalogDeductDocs", "U" => "CCatalogUnReservedDocs");
    /**
     * @param $id
     * @param $arFields
     * @return bool
     */
    public static function update($id, $arFields)
    {
    }
    /**
     * @param $id
     * @return bool
     */
    public static function delete($id)
    {
    }
    /**
     * @param $action
     * @param $arFields
     * @return bool
     */
    protected function checkFields($action, &$arFields)
    {
    }
    /**
     * @param $documentId
     * @param int $userId
     * @return bool|string
     */
    public static function conductDocument($documentId, $userId = 0)
    {
    }
    /**
     * @param $documentId
     * @param int $userId
     * @return array|bool|string
     */
    public static function cancellationDocument($documentId, $userId = 0)
    {
    }
    public static function OnIBlockElementDelete($productID)
    {
    }
    public static function OnCatalogStoreDelete($storeID)
    {
    }
    public static function OnBeforeIBlockElementDelete($productID)
    {
    }
}