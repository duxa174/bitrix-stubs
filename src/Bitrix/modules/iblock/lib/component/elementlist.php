<?php

namespace Bitrix\Iblock\Component;

/**
 * @global \CUser $USER
 * @global \CMain $APPLICATION
 */
abstract class ElementList extends \Bitrix\Iblock\Component\Base
{
    private $multiIblockMode = false;
    private $paginationMode = false;
    protected $navigation = false;
    protected $pagerParameters = array();
    /**
     * Multi iblock mode setter.
     * Enable it if you use data from different iblocks.
     *
     * @param $state
     * @return $this
     */
    protected function setMultiIblockMode($state)
    {
    }
    /**
     * Return if multi iblock mode enabled.
     *
     * @return bool
     */
    public function isMultiIblockMode()
    {
    }
    /**
     * Pagination mode setter.
     * Enable it if you use page navigation.
     *
     * @param $state
     * @return $this
     */
    protected function setPaginationMode($state)
    {
    }
    /**
     * Return if pagination mode enabled.
     *
     * @return bool
     */
    public function isPaginationMode()
    {
    }
    public function onPrepareComponentParams($params)
    {
    }
    /**
     * @param array $params
     * @param array $orderRow
     * @param array $default
     * @return array
     */
    protected function prepareElementSortRow(array $params, array $orderRow, array $default)
    {
    }
    protected static function predictElementCountByVariants($variants, $isBigData = false)
    {
    }
    private function makeMagicWithPageNavigation()
    {
    }
    protected function getPaginationParams(&$params)
    {
    }
    protected function getSpecificIblockParams(&$params)
    {
    }
    /**
     * Process iblock component parameters for single iblock with disabled multi-iblock-mode.
     *
     * @param $params
     * @return array
     */
    protected function getMultiIblockParams(&$params)
    {
    }
    /**
     * Process iblock component parameters for single iblock with disabled multi-iblock-mode.
     *
     * @param $params
     * @return array
     */
    protected function getSingleIblockParams(&$params)
    {
    }
    // some logic of \CComponentAjax to execute in component_epilog
    public function prepareLinks(&$data)
    {
    }
    private function checkPcreLimit($data)
    {
    }
    private function isAjaxURL($url)
    {
    }
    protected function initQueryFields()
    {
    }
    protected function initSubQuery()
    {
    }
    protected function getIblockElements($elementIterator)
    {
    }
    protected function modifyDisplayProperties($iblock, &$iblockElements)
    {
    }
    protected function getFilter()
    {
    }
    protected function getSort()
    {
    }
    protected function getCustomSort() : array
    {
    }
    protected function getElementList($iblockId, $products)
    {
    }
    protected function initNavString(\CIBlockResult $elementIterator)
    {
    }
    protected function chooseOffer($offers, $iblockId)
    {
    }
    protected function getFilteredOffersByProperty($iblockId)
    {
    }
    protected function getOffersPropFilter(array $level)
    {
    }
    protected function getAdditionalCacheId()
    {
    }
    protected function getComponentCachePath()
    {
    }
    protected function makeOutputResult()
    {
    }
    public function loadData()
    {
    }
    protected function deferredLoadAction()
    {
    }
    protected function prepareDeferredParams()
    {
    }
    /**
     * Initialization of page navigation parameters.
     */
    protected function initNavParams()
    {
    }
    protected function prepareTemplateParams()
    {
    }
    protected static function parseJsonParameter($jsonString)
    {
    }
    /**
     * Process iblock template parameters for multi iblock mode.
     *
     * @param $params
     */
    protected function getTemplateMultiIblockParams(&$params)
    {
    }
    /**
     * Process iblock template parameters for single iblock with disabled multi-iblock-mode.
     *
     * @param $params
     */
    protected function getTemplateSingleIblockParams(&$params)
    {
    }
    public static function getDefaultVariantId()
    {
    }
    public static function predictRowVariants($lineElementCount, $pageElementCount)
    {
    }
    protected function checkTemplateTheme()
    {
    }
    protected function getTemplateDefaultParams()
    {
    }
    protected function editTemplateData()
    {
    }
    /**
     * Creating sequence of variants to show
     */
    protected function sortItemsByTemplateVariants()
    {
    }
    /**
     * Return array of big data settings.
     *
     * @return array
     */
    protected function getBigDataInfo()
    {
    }
    // getting positions of enlarged elements
    protected function getEnlargedIndexMap()
    {
    }
    public static function getTemplateVariantsMap()
    {
    }
    public function getTemplateSkuPropList()
    {
    }
    protected function editTemplateItems(&$items)
    {
    }
    protected function editTemplateProductPictures(&$item)
    {
    }
    protected function editTemplateJsOffers(&$item)
    {
    }
    protected function editTemplateOfferProps(&$item)
    {
    }
    /**
     * @return void
     */
    protected function initIblockPropertyFeatures()
    {
    }
    /**
     * @param int $iblockId
     * @return void
     */
    protected function loadDisplayPropertyCodes($iblockId)
    {
    }
}