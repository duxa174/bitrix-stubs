<?php

class CALLSaleProduct
{
    public static $arProductIblockInfoCache = array();
    static function GetProductSkuProps($ID, $IBLOCK_ID = '', $getExt = \false)
    {
    }
    /**
     * get sku for product.
     *
     * @param integer $USER_ID				User.
     * @param string  $LID					Site.
     * @param integer $PRODUCT_ID			Product id.
     * @param string  $PRODUCT_NAME			Product name.
     * @param string CURRENCY				Currency.
     * @param array $arProduct				Iblock list.
     * @return array|false
     */
    function GetProductSku($USER_ID, $LID, $PRODUCT_ID, $PRODUCT_NAME = '', $CURRENCY = '', $arProduct = array())
    {
    }
    /**
     * Returns product iblock data by array of PRODUCT_ID
     * Uses self::$arProductIblockInfoCache for result caching
     * Requires array of IDs for better performance when working with multiple items
     *
     * @param array $arProductId array of integer PRODUCT_ID
     * @return array
     */
    public static function GetProductListIblockInfo($arProductId)
    {
    }
    /** @deprecated */
    function RefreshProductList()
    {
    }
    /**
     * Returns list of recommended products for specific product.
     *
     * @param int $USER_ID							User id.
     * @param string $LID							Site id.
     * @param array $arFilterRecomendet				Recomendation filter.
     * @param string $recomMore						Get more.
     * @param int $cntProductDefault				Max count.
     * @return array
     */
    function GetRecommendetProduct($USER_ID, $LID, $arFilterRecomendet = array(), $recomMore = 'N', $cntProductDefault = 2)
    {
    }
}
class CAllSaleViewedProduct
{
    /**
     * Updates viewed product info for user
     *
     * @param int $ID - code field for update
     * @param array $arFields - parameters for update
     * @return true false
     */
    public function Update($ID, $arFields)
    {
    }
    /**
     * The agent function delete old viewed
     *
     * @param
     * @return true false
     */
    public function ClearViewed()
    {
    }
}