<?php

class CSaleGiftMainProductsComponent extends \CBitrixComponent
{
    protected $componentId = '';
    public function __construct($component = \null)
    {
    }
    public function getComponentId()
    {
    }
    /**
     * Event called from includeComponent before component execution.
     *
     * <p>Takes component parameters as argument and should return it formatted as needed.</p>
     * @param array[string]mixed $arParams
     * @return array[string]mixed
     *
     */
    public function onPrepareComponentParams($params)
    {
    }
    private function makeMagicWithPageNavigation()
    {
    }
    private function getElementIdByOffer($offerId)
    {
    }
    private function getSectionIdByElement($elementId, $iblockId)
    {
    }
    public function executeComponent()
    {
    }
    private function removeSku(array $elementIds = array())
    {
    }
    private function getDataMainProducts()
    {
    }
    /**
     * @param $elementIds
     * @param $sectionIds
     * @return string
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    private function getState($elementIds, $sectionIds)
    {
    }
}