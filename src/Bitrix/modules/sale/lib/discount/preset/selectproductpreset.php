<?php

namespace Bitrix\Sale\Discount\Preset;

abstract class SelectProductPreset extends \Bitrix\Sale\Discount\Preset\BasePreset
{
    protected function init()
    {
    }
    protected function renderElementBlock(\Bitrix\Sale\Discount\Preset\State $state, $inputName = 'discount_product', $multi = true)
    {
    }
    protected function renderSectionBlock(\Bitrix\Sale\Discount\Preset\State $state, $inputName = 'discount_section', $multi = true)
    {
    }
    protected function renderSections(\Bitrix\Sale\Discount\Preset\State $state, $inputName, $multi = true)
    {
    }
    protected function getSectionsFromConditions(array $conditions = null)
    {
    }
    protected function getProductsFromConditions(array $conditions = null)
    {
    }
    protected function generateSectionConditions($sectionIds, $logic = 'Equal')
    {
    }
    protected function generateProductConditions($productIds, $logic = 'Equal')
    {
    }
    protected function generateSectionActions($sectionIds)
    {
    }
    protected function generateProductActions($productIds)
    {
    }
    protected function generateProductsData($productIds, $siteId)
    {
    }
    protected function validateSectionsAndProductsState(\Bitrix\Sale\Discount\Preset\State $state, \Bitrix\Main\ErrorCollection $errorCollection)
    {
    }
    private function cleanIds($ids)
    {
    }
}