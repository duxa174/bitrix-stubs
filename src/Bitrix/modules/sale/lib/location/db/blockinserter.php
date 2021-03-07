<?php

namespace Bitrix\Sale\Location\DB;

class BlockInserter
{
    protected $tableName = '';
    protected $tableMap = array();
    protected $fldVector = array();
    protected $insertHead = '';
    protected $insertTail = '';
    protected $index = 0;
    protected $bufferSize = 0;
    protected $buffer = '';
    protected $map = array();
    protected $autoIncFld = false;
    protected $dbType = false;
    protected $mtu = 0;
    protected $dbConnection = null;
    protected $dbHelper = null;
    protected $callbacks = array();
    const RED_LINE = 100;
    public function __construct($parameters = array())
    {
    }
    // this method is buggy when table is empty
    public function initIndexFromField($fld = 'ID')
    {
    }
    public function getIndex()
    {
    }
    public function dropAutoIncrementRestrictions()
    {
    }
    public function restoreAutoIncrementRestrictions()
    {
    }
    public function resetAutoIncrementFromIndex()
    {
    }
    public function insert($row)
    {
    }
    public function flush()
    {
    }
}