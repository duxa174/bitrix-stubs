<?php

namespace Sale\Handlers\DiscountPreset;

final class Cumulative extends \Bitrix\Sale\Discount\Preset\BasePreset
{
    const TYPE_FIXED = \Bitrix\Sale\Discount\Actions::VALUE_TYPE_FIX;
    const TYPE_PERCENT = \Bitrix\Sale\Discount\Actions::VALUE_TYPE_PERCENT;
    const TYPE_COUNT_PERIOD_ALL_TIME = \Bitrix\Sale\Discount\CumulativeCalculator::TYPE_COUNT_PERIOD_ALL_TIME;
    const TYPE_COUNT_PERIOD_INTERVAL = \Bitrix\Sale\Discount\CumulativeCalculator::TYPE_COUNT_PERIOD_INTERVAL;
    const TYPE_COUNT_PERIOD_RELATIVE = \Bitrix\Sale\Discount\CumulativeCalculator::TYPE_COUNT_PERIOD_RELATIVE;
    const MARK_DEFAULT_EMPTY_ROW = PHP_INT_MIN;
    public function getTitle()
    {
    }
    public function getDescription()
    {
    }
    /**
     * Tells if preset is available or not. It's possible that preset can't work in some license.
     * @return bool
     */
    public function isAvailable()
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
    public function processShowInputRanges(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    protected function generateJavascript()
    {
    }
    protected function generateRows(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    private function fillValueInsteadMarkedEmpty(&$value)
    {
    }
    protected function generateRow($index, array $range, $style = '')
    {
    }
    protected function generateSelectWithDiscountType($name, $selectedValue)
    {
    }
    protected function buildRangesFromState(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    public function processSaveInputRanges(\Bitrix\Sale\Discount\Preset\State $state)
    {
    }
    protected function getAllowableUserGroups()
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
    /**
     * @return array
     */
    protected function getDefaultRowValues()
    {
    }
}