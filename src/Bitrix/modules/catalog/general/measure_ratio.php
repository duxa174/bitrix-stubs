<?php

class CCatalogMeasureRatioAll
{
    protected static $whiteList = array('ID', 'PRODUCT_ID', 'RATIO', 'IS_DEFAULT');
    protected static function checkFields($action, &$arFields)
    {
    }
    /**
     * @deprecated deprecated since catalog 16.0.13
     * @see \Bitrix\Catalog\MeasureRatioTable::add
     * Attention! Method \Bitrix\Catalog\MeasureRatioTable::add very strict checks the input parameters.
     *
     * Add measure ratio for product.
     *
     * @param array $arFields		Measure ratio.
     * @return bool|int
     * @throws Exception
     */
    public static function add($arFields)
    {
    }
    /**
     * @deprecated deprecated since catalog 16.0.13
     * @see \Bitrix\Catalog\MeasureRatioTable::update
     * Attention! Method \Bitrix\Catalog\MeasureRatioTable::update very strict checks the input parameters.
     *
     * Update measure ratio for product by id.
     *
     * @param int $id				Measure ratio id.
     * @param array $arFields		Measure ratio.
     * @return bool|int
     * @throws Exception
     */
    public static function update($id, $arFields)
    {
    }
    /**
     * @deprecated deprecated since catalog 16.0.13
     * @see \Bitrix\Catalog\MeasureRatioTable::delete
     *
     * Delete measure ratio by id.
     *
     * @param int $id		Measure ratio id.
     * @return bool
     * @throws Exception
     */
    public static function delete($id)
    {
    }
}