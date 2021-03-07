<?php

namespace Bitrix\Main\DB;

class MssqlResult extends \Bitrix\Main\DB\Result
{
    /** @var \Bitrix\Main\ORM\Fields\ScalarField[]  */
    private $resultFields = null;
    /**
     * @param resource $result Database-specific query result.
     * @param Connection $dbConnection Connection object.
     * @param \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery Helps to collect debug information.
     */
    public function __construct($result, \Bitrix\Main\DB\Connection $dbConnection = null, \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery = null)
    {
    }
    /**
     * Returns an array of fields according to columns in the result.
     *
     * @return \Bitrix\Main\ORM\Fields\ScalarField[]
     */
    public function getFields()
    {
    }
    /**
     * Returns the number of rows in the result.
     *
     * @return integer
     */
    public function getSelectedRowsCount()
    {
    }
    /**
     * Returns next result row or false.
     *
     * @return array|false
     */
    protected function fetchRowInternal()
    {
    }
}