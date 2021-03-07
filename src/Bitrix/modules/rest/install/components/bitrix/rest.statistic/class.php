<?php

class CRestStatisticComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable
{
    const PREFIX = 'data_';
    const PREFIX_HOURS_PROPS_CODE = 'HOUR_';
    const LAST_HOURS_PROPS_CODE = 23;
    const PAGE_LIMIT = 20;
    /**
     * Check required params.
     *
     * @throws SystemException
     * @throws LoaderException
     */
    protected function checkRequiredParams()
    {
    }
    public function onPrepareComponentParams($params)
    {
    }
    protected function listKeysSignedParameters()
    {
    }
    /**
     * @throws ArgumentException
     * @throws ObjectPropertyException
     * @throws SystemException
     * @throws ArgumentException
     */
    private function getAllApp()
    {
    }
    /**
     * @throws ArgumentException
     * @throws ObjectPropertyException
     * @throws SystemException
     * @throws ArgumentException
     */
    private function getAllPasswordApp()
    {
    }
    /**
     * @return array
     * @throws ObjectException
     */
    protected function getFilter()
    {
    }
    protected function getGridHeader()
    {
    }
    protected function getGridSort($oldSort)
    {
    }
    protected function getGridFilterHeader()
    {
    }
    protected function prepareGraphsData($itemsStat)
    {
    }
    /**
     * @param $type string
     *
     * @throws SystemException
     */
    protected function processResultData($type = 'grid')
    {
    }
    public function executeComponent()
    {
    }
    public function getChartDataAction()
    {
    }
    public function configureActions()
    {
    }
}