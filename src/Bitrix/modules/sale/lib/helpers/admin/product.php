<?php

namespace Bitrix\Sale\Helpers\Admin;

/**
 * Class Product
 * @package Bitrix\Sale\Helpers\Admin
 */
class Product
{
    private $groupByIblock = array();
    private $columnsList = null;
    private $parentsIds = array();
    private $measuresIds = null;
    private $siteId = null;
    private $storesCount = null;
    /** @var $productProvider \IBXSaleProductProvider */
    private $provider = null;
    private $productsIds = array();
    private $tmpId = '';
    private $iblockData = null;
    private $catalogData = null;
    private $resultData = array();
    private $useSliderCard = null;
    /**
     * @param array $productsIds
     * @param $siteId
     * @param array $columnsList
     * @param string $tmpId
     * @return array
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getData(array $productsIds, $siteId, array $columnsList = array(), $tmpId = "")
    {
    }
    /**
     * @param array $productsData
     * @param string $siteId
     * @param int $userId
     * @param array $errors
     * @return array
     * @throws \Bitrix\Main\NotSupportedException
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public static function getProviderData(array $productsData, $siteId, $userId = null, array &$errors = array())
    {
    }
    private function __construct(array $productsIds, $siteId, array $columnsList = array(), $tmpId = "")
    {
    }
    private function getResultData()
    {
    }
    private function fillCatalogData()
    {
    }
    private function fillSetInfo($setIds)
    {
    }
    private function fillIblockData()
    {
    }
    private static function isOffer($productData)
    {
    }
    private function completeResultData()
    {
    }
    private function fillPropsData()
    {
    }
    //creators
    private static function formatProps(array $properties)
    {
    }
    private function createProductPropsValues($productId)
    {
    }
    private function preparePropertyInfo()
    {
    }
    private function getPropertyInfo($fieldId)
    {
    }
    private function createImageUrl($productId)
    {
    }
    private function getImageId(array $product) : int
    {
    }
    private static function createEditPageUrl(array $productData)
    {
    }
    private function fillMeasures()
    {
    }
    private function fillMeasuresRatio()
    {
    }
    private function getStoresData($productId)
    {
    }
    private static function getIblockPropInfo($value, $propData, $arSize = array("WIDTH" => 90, "HEIGHT" => 90), $orderId = 0)
    {
    }
    private static function showImageOrDownloadLink($fileId, $orderId = 0, $arSize = array("WIDTH" => 90, "HEIGHT" => 90))
    {
    }
}