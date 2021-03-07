<?php

namespace Bitrix\Sale\Exchange\Integration\Manager;

class Statistic
{
    const STATISTIC_IMPORT_PACKAGE_LIMIT = 1000;
    const LOGGER_DAYS_INTERVAL = 1;
    protected $app;
    protected $collection;
    protected $exchange;
    public function __construct()
    {
    }
    /**
     * @return Collection
     */
    public function getCollection() : \Bitrix\Sale\Exchange\Integration\Service\Container\Collection
    {
    }
    public function isOn()
    {
    }
    public function modify()
    {
    }
    protected function getStatisticsStartDate()
    {
    }
    protected function getProvider()
    {
    }
    protected function prepareParamsByProviderFields($provider)
    {
    }
    protected function getListByParams($provider)
    {
    }
    protected function resolveStatusId($fields)
    {
    }
    protected function deleteOldEffectedRows()
    {
    }
    protected function addEffectedRows(array $fields)
    {
    }
}