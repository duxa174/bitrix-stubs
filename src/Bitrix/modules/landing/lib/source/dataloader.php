<?php

namespace Bitrix\Landing\Source;

abstract class DataLoader
{
    protected $config = ['select' => [], 'filter' => [], 'order' => [], 'limit' => 0, 'internal_filter' => []];
    protected $options = [];
    /** @var Seo */
    protected $seo = null;
    public function __construct()
    {
    }
    /**
     * @param array $config
     * @return void
     */
    public function setConfig(array $config)
    {
    }
    /**
     * @param array $options
     * @return void
     */
    public function setOptions(array $options)
    {
    }
    /**
     * @return array
     */
    public abstract function getElementListData();
    /**
     * @param mixed $element
     * @return array
     */
    public abstract function getElementData($element);
    /**
     * @param mixed $filter
     * @return array
     */
    public function normalizeFilter($filter)
    {
    }
    /**
     * @param mixed $filter
     * @return string
     */
    public function calculateFilterHash($filter)
    {
    }
    /**
     * @param mixed $filter
     * @return string
     */
    public function getFilterHash($filter)
    {
    }
    /**
     * Returns showed fields list, if exists.
     *
     * @return array|null
     */
    protected function getSelectFields()
    {
    }
    /**
     * Returns showed fields prepared list.
     *
     * @return array
     */
    protected function getPreparedSelectFields()
    {
    }
    /**
     * Returns user filter, if exists.
     *
     * @return array|null
     */
    protected function getFilter()
    {
    }
    /**
     * Returns prepared filter.
     *
     * @param array $fields
     * @return array
     */
    protected function getPreparedFilter(array $fields)
    {
    }
    /**
     * Returns element order.
     *
     * @return array|null
     */
    protected function getOrder()
    {
    }
    /**
     * Returns max element count for showing.
     *
     * @return int
     */
    protected function getLimit()
    {
    }
    /**
     * Returns additional user-uncontrolled filter. Can be absent.
     *
     * @return array|null
     */
    protected function getInternalFilter()
    {
    }
    /**
     * Returns settings option, if exists.
     *
     * @param string $index Option name.
     * @return mixed|null
     */
    protected function getSettingsValue($index)
    {
    }
    /**
     * Returns additinal option value, if exists.
     *
     * @param string $index Option name.
     * @return mixed|null
     */
    protected function getOptionsValue($index)
    {
    }
    /**
     * @return Seo
     */
    public function getSeo()
    {
    }
    /**
     * @param string $name
     * @return string|null
     */
    public function getSeoProperty($name)
    {
    }
    /**
     * @return string|null
     */
    public function getSeoTitle()
    {
    }
}