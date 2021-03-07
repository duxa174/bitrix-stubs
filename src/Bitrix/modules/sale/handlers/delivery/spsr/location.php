<?php

namespace Sale\Handlers\Delivery\Spsr;

final class Location extends \Bitrix\Sale\Location\Comparator\Mapper
{
    const EXTERNAL_SERVICE_CODE = 'SPSR';
    const CSV_FILE_PATH = '/bitrix/modules/sale/handlers/delivery/spsr/location.csv';
    protected $tmpTable = null;
    protected $serviceId = 0;
    public function __construct()
    {
    }
    protected function getLocationsRequest($cityName = '', $countryName = '')
    {
    }
    protected function mapByNames($startId = 0, $timeout = 0)
    {
    }
    public static function install()
    {
    }
    public function mapStepless()
    {
    }
    public function map($stage, $step = '', $progress = 0, $timeout = 0)
    {
    }
    protected function calculateProgress($id, $maxId, $progress, $minProgress, $maxProgress)
    {
    }
}