<?php

namespace Bitrix\Sale\Location\Import\Compiler\Db;

class ExportTreeTable extends \Bitrix\Main\Entity\DataManager
{
    const CODE_LENGTH = 10;
    const RECURSION_MAX_DEPTH = 30;
    protected $inserter = null;
    protected $codeIndex = array();
    protected $exportOffset = 1;
    protected $exportPath = array();
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public function __construct()
    {
    }
    public function restoreExportOffset()
    {
    }
    public function setExportOffset($offset)
    {
    }
    public function dropCodeIndex()
    {
    }
    public function insert($data)
    {
    }
    public function doneInsert()
    {
    }
    public function deleteAll()
    {
    }
    public function getLastOccupiedCode()
    {
    }
    public function getNextFreeCode()
    {
    }
    public static function formatCode($value, $length = self::CODE_LENGTH)
    {
    }
    public function getByCode($code)
    {
    }
    public function getPathTo($code)
    {
    }
    public function getWalkPath()
    {
    }
    public function getWalkPathString()
    {
    }
    public function walkInDeep($callbacks, $ignoreThisAndDeeper = array(), $startFrom = '')
    {
    }
    private function waklInDeepBundle($callbacks, $ignoreThisAndDeeper = array(), $parentCode = '', $depth = 1)
    {
    }
    public function create()
    {
    }
    public function dropIndexes()
    {
    }
    public function restoreIndexes()
    {
    }
    public function cleanup()
    {
    }
    public static function switchIndexes($way = true)
    {
    }
    public function output($data, $important = true)
    {
    }
}