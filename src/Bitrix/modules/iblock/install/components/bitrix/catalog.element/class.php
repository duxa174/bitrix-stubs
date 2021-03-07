<?php

class CatalogElementComponent extends \Bitrix\Iblock\Component\Element
{
    public function __construct($component = \null)
    {
    }
    /**
     * Processing parameters unique to catalog.element component.
     *
     * @param array $params		Component parameters.
     * @return array
     */
    public function onPrepareComponentParams($params)
    {
    }
    /**
     * Fill additional keys for component cache.
     *
     * @param array &$resultCacheKeys		Cached result keys.
     * @return void
     */
    protected function initAdditionalCacheKeys(&$resultCacheKeys)
    {
    }
    /**
     * Save compatible viewed product in catalog.element only.
     *
     * @return void
     */
    protected function saveViewedProduct()
    {
    }
    /**
     * Save bigdata analytics for catalog.element only.
     *
     * @return void
     */
    protected function sendCounters()
    {
    }
}