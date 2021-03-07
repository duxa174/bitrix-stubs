<?php

namespace Sale\Handlers\DiscountPreset;

class ConnectedProduct extends \Bitrix\Sale\Discount\Preset\SelectProductPreset
{
    const TYPE_PRODUCT = 'p';
    const TYPE_SECTION = 's';
    const PREDICTION_TEXT_TYPE_ACTION = 'a';
    const PREDICTION_TEXT_TYPE_CONDITION = 'c';
    protected function init()
    {
    }
    public function getSort()
    {
    }
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
    public function processShowProductForDiscount(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function processSaveProductForDiscount(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function processShowProductWhenDiscount(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function processSaveProductWhenDiscount(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function processShowCommonSettings(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function processSaveCommonSettings(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    /**
     * @param array $discountFields
     * @return State
     * @throws Main\ArgumentException
     */
    public function generateState(array $discountFields)
    {
    }
    private function generatePredictions(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function generateDiscount(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function getDescribedDataProductCondition(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function getDescribedDataProductAction(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function getPredictionText(\Bitrix\Sale\Discount\Preset\State $state, $type)
    {
    }
}