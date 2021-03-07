<?php

namespace Bitrix\Main\ORM\Data;

class UpdateResult extends \Bitrix\Main\ORM\Data\Result
{
    /** @var int */
    protected $affectedRowsCount;
    /** @var array */
    protected $primary;
    public function __construct()
    {
    }
    public function setAffectedRowsCount(\Bitrix\Main\DB\Connection $connection)
    {
    }
    /**
     * @return int
     */
    public function getAffectedRowsCount()
    {
    }
    public function setPrimary($primary)
    {
    }
    /**
     * @return array
     */
    public function getPrimary()
    {
    }
    /**
     * Returns id of updated record
     * @return array|int|string
     */
    public function getId()
    {
    }
}