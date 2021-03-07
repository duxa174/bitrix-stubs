<?php

class CSaleProduct extends \CALLSaleProduct
{
    /*
     * Returns list of products ordered with the specific product
     *
     * @param int $ID - product id (sku ID or parent product ID are also supported)
     * @param int $minCNT - number of times products should have been ordered to be returned in the result
     * @param int $limit - serialized data saved in the database for the record of this type
     * @param boolean $getParentOnly - return only parent product ID
     * @return dbres
     */
    function GetProductList($ID, $minCNT, $limit, $getParentOnly = \false)
    {
    }
    function GetBestSellerList($by = "AMOUNT", $arFilter = array(), $arOrderFilter = array(), $limit = 0)
    {
    }
    function GetFilterOperation($key, $value)
    {
    }
}
/**
 * Class CSaleViewedProduct
 * @deprecated
 */
class CSaleViewedProduct extends \CAllSaleViewedProduct
{
    /**
     * The function add viewed product
     *
     * @param array $arFields - params for add
     * @return true false
     */
    public static function Add($arFields)
    {
    }
    /**
     * Return viewed products.
     *
     * @param array $arOrder				Sorting params.
     * @param array $arFilter				Filter params.
     * @param bool|array $arGroupBy			Group params.
     * @param bool|array $arNavStartParams	Navy params.
     * @param array $arSelectFields			Select fields.
     * @return bool|CDBResult
     */
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    /**
     * The function delete old viewed
     *
     * @param
     * @return true false
     */
    public function _ClearViewed()
    {
    }
    /**
     * The function clear viewed product for user
     *
     * @param int $FUSER_ID - inner basket user code
     * @param int $LIMIT - fields count for delete
     * @return true false
     */
    public function DeleteForUser($FUSER_ID, $LIMIT = \NULL)
    {
    }
}