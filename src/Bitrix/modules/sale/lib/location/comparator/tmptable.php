<?php

namespace Bitrix\Sale\Location\Comparator;

/**
 * Class TmpTable
 * Helps to store temporary locations data during locations map with external services.
 * @package Bitrix\Sale\Location\Comparator
 */
final class TmpTable
{
    protected $name = 'b_sale_loc_map_tmp';
    protected $connection = null;
    protected $serviceId = 0;
    /**
     * TmpTable constructor.
     * @param int $serviceId External service id.
     * @param string $tableName
     * @throws ArgumentNullException
     */
    public function __construct($serviceId, $tableName = "")
    {
    }
    /**
     * @param int $startId Start position.
     * @return \Bitrix\Main\DB\Result
     */
    public function getUnmappedLocations($startId = 0)
    {
    }
    /**
     * @param int $locationId Internal location id.
     * @param string $xmlId External location id.
     * @throws ArgumentNullException
     */
    public function markMapped($locationId, $xmlId)
    {
    }
    /**
     * If we have mapped locations mark this in tmp table
     */
    public function markAllMapped()
    {
    }
    /**
     * @param array $data
     * @return \Bitrix\Main\DB\Result
     * @throws ArgumentNullException
     * @throws ArgumentTypeException
     */
    public function create(array $data)
    {
    }
    /**
     * Drops table
     */
    public function drop()
    {
    }
    /**
     * @return bool
     */
    public function isExist()
    {
    }
    /**
     * @param array $data Data to save
     * @return int Quantity of saved rows.
     * @throws ArgumentNullException
     * @throws ArgumentTypeException
     */
    public function saveData(array $data)
    {
    }
    /**
     * @return int Max row id.
     */
    public function getMaxId()
    {
    }
}