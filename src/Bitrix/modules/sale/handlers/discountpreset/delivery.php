<?php

namespace Sale\Handlers\DiscountPreset;

class Delivery extends \Bitrix\Sale\Discount\Preset\SelectProductPreset
{
    public function getTitle()
    {
    }
    public function getDescription()
    {
    }
    /**
     * @return int
     */
    public function getCategory()
    {
    }
    public function getFirstStepName()
    {
    }
    public function processShowInputName(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function processSaveInputName(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    /**
     * @param $siteId
     *
     * @return \Bitrix\Sale\Delivery\Services\Base[]
     */
    protected function getDeliverySystems($siteId)
    {
    }
    protected function getLabelDiscountValue()
    {
    }
    public function processShowInputAmount(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    protected function renderDiscountValue(\Bitrix\Sale\Discount\Preset\State $state, $currency)
    {
    }
    public function processSaveInputAmount(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function processShowCommonSettings(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function processSaveCommonSettings(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function generateState(array $discountFields)
    {
    }
    public function generateDiscount(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
}