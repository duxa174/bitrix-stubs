<?php

namespace Bitrix\Sale\Location\Search;

final class ChainTable extends \Bitrix\Main\Entity\DataManager implements \Serializable
{
    const STEP_SIZE = 10000;
    const MTU = 9999;
    protected $procData = array();
    protected $indexInserter = null;
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public function serialize()
    {
    }
    public function unserialize($data)
    {
    }
    public function __construct($parameters = array())
    {
    }
    public function initInsertHandles()
    {
    }
    public function resetProcess()
    {
    }
    public function getOffset()
    {
    }
    public static function cleanUpData()
    {
    }
    public static function getFilterForInitData($parameters = array())
    {
    }
    protected static function rarefact($sorts, $window = 10000)
    {
    }
    public function initializeData()
    {
    }
    public static function createIndex()
    {
    }
    public static function getMap()
    {
    }
}