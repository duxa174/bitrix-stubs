<?php

namespace Bitrix\Report\VisualConstructor\RuntimeProvider;

/**
 * Class Base
 * @package Bitrix\Report\VisualConstructor\RuntimeProvider
 */
abstract class Base implements \Bitrix\Report\VisualConstructor\Internal\Error\IErrorable
{
    private $results = array();
    private $filters = array();
    private $errors = array();
    private $relations = array();
    /**
     * @return array
     */
    protected abstract function availableFilterKeys();
    /**
     * @return \Bitrix\Report\VisualConstructor\Internal\Manager\Base
     */
    protected abstract function getManagerInstance();
    /**
     * @return IProvidable[]
     */
    protected abstract function getEntitiesList();
    /**
     * @return mixed
     */
    protected abstract function getIndices();
    /**
     * Check is available filter in filters list of provider.
     *
     * @param string $filterKey Needle filter key.
     * @return bool
     */
    private function isAvailableFilter($filterKey)
    {
    }
    /**
     * @param string $key Filter key.
     * @param mixed $value Filter value.
     * @return bool
     */
    public function addFilter($key, $value)
    {
    }
    /**
     * @param string $key Key of relation.
     * @return void
     */
    public function addRelation($key)
    {
    }
    /**
     * @return array
     */
    public function getFilters()
    {
    }
    /**
     * @return array
     */
    public function getRelations()
    {
    }
    /**
     * @return $this
     */
    public function execute()
    {
    }
    protected function sortResults(&$result)
    {
    }
    /**
     * @param array $indices Indices for search by filters.
     * @return array
     */
    private function getFilteredValues($indices)
    {
    }
    /**
     * @return array
     */
    public function getErrors()
    {
    }
    /**
     * @param array|mixed $value Value to normalise.
     * @return array
     */
    private function normaliseFilterValue($value)
    {
    }
    /**
     * @param object $entity Entity passed to processor.
     * @return void
     */
    protected function processAvailableRelations($entity)
    {
    }
    protected function callManager()
    {
    }
    /**
     * @return mixed
     */
    public function getFirstResult()
    {
    }
    /**
     * @return array
     */
    public function getResults()
    {
    }
    /**
     * @param array $results Result for setting as result of provider.
     * @return void
     */
    public function setResults($results)
    {
    }
}