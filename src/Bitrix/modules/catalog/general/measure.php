<?php

/**
 * Class CCatalogMeasureAll
 */
class CCatalogMeasureAll
{
    const DEFAULT_MEASURE_CODE = 796;
    protected static $defaultMeasure = \null;
    /**
     * @param string $action
     * @param array $arFields
     * @param int $id
     * @return bool
     */
    protected static function checkFields($action, &$arFields, $id = 0)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.5.12
     * @see \Bitrix\Catalog\MeasureTable:add
     *
     * @param array $arFields
     * @return bool|int
     */
    public static function add($arFields)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.5.12
     * @see \Bitrix\Catalog\MeasureTable:update
     *
     * @param int $id
     * @param array $arFields
     * @return bool|int
     */
    public static function update($id, $arFields)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.5.12
     * @see \Bitrix\Catalog\MeasureTable:delete
     *
     * @param int $id
     * @return bool
     */
    public static function delete($id)
    {
    }
    public static function getDefaultMeasure($getStub = \false, $getExt = \false)
    {
    }
    private static function convertErrors(\Bitrix\Main\Entity\Result $result)
    {
    }
}
/**
 * Class CCatalogMeasureResult
 */
class CCatalogMeasureResult extends \CDBResult
{
    /**
     * @param $res
     */
    public function __construct($res)
    {
    }
    /**
     * @return array
     */
    function Fetch()
    {
    }
}