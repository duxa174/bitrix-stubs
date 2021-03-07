<?php

namespace Bitrix\Sender\Integration\Crm\Connectors;

/**
 * Class Client
 * @package Bitrix\Sender\Integration\Crm\Connectors
 */
class Client extends \Bitrix\Sender\Connector\BaseFilter
{
    const PRODUCT_SOURCE_ORDERS_ALL = "ORDERS_ALL";
    const PRODUCT_SOURCE_ORDERS_PAID = "ORDERS_PAID";
    const PRODUCT_SOURCE_ORDERS_UNPAID = "ORDERS_UNPAID";
    const PRODUCT_SOURCE_DEALS_ALL = "DEALS_ALL";
    const PRODUCT_SOURCE_DEALS_PROCESS = "DEALS_PROCESS";
    const PRODUCT_SOURCE_DEALS_SUCCESS = "DEALS_SUCCESS";
    const PRODUCT_SOURCE_DEALS_FAILURE = "DEALS_FAILURE";
    const API_VERSION = 3;
    const YES = 'Y';
    const NO = 'N';
    const DEAL_CATEGORY_ID = "DEAL_CATEGORY_ID";
    private $crmEntityFilter = null;
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Get queries.
     *
     * @return Entity\Query[]
     */
    public function getQueries($selectList = [])
    {
    }
    protected function getContactQuery($selectList = [])
    {
    }
    protected function getCompanyQuery()
    {
    }
    protected function addCrmEntityReferences(\Bitrix\Main\Entity\Query $query)
    {
    }
    /**
     * Add filter to exclude contacts/companies who has deals/orders in $filterValue period
     * @param Entity\Query $query Modifying query.
     * @param array $filterValue No purchases period.
     * @param array $productSource Purchases source (deal, order, etc).
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\ObjectException
     * @throws \Bitrix\Main\SystemException
     */
    protected function addNoPurchasesFilter($query, $filterValue, $productSource)
    {
    }
    protected function prepareQueryCollection(\Bitrix\Main\Entity\Query $query)
    {
    }
    protected function getQueryCollectionForProductsFilter(\Bitrix\Main\Entity\Query $query, $productIds, $productSource)
    {
    }
    protected function getCrmReferencedEntityFilter($entityTypeName)
    {
    }
    protected function getCrmEntityFilter($entityTypeName, $isReferenced = false)
    {
    }
    protected static function getCrmDocumentTypes()
    {
    }
    /**
     * Get data count by type.
     *
     * @return array
     */
    protected function getDataCountByType()
    {
    }
    /**
     * Get data.
     *
     * @return array|\Bitrix\Main\DB\Result
     */
    public function getData()
    {
    }
    /**
     * Get personalize field list.
     *
     * @return array
     */
    public static function getPersonalizeList()
    {
    }
    public static function getDealCategoryList()
    {
    }
    public static function getDealCategoryStageList()
    {
    }
    /**
     * Get filter fields.
     *
     * @return array
     */
    public static function getUiFilterFields()
    {
    }
    /**
     * Get filter presets.
     *
     * @return array
     */
    public static function getUiFilterPresets()
    {
    }
    /**
     * Return true if support view of result.
     *
     * @return bool
     */
    public function isResultViewable()
    {
    }
    protected function onInitResultView()
    {
    }
    protected function getProductSkuIds($productIds)
    {
    }
    public function getUiFilterId()
    {
    }
    /**
     * Get fields for statistic
     * @return array
     */
    public function getStatFields()
    {
    }
}