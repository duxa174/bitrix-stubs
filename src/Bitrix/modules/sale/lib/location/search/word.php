<?php

namespace Bitrix\Sale\Location\Search;

final class WordTable extends \Bitrix\Main\Entity\DataManager implements \Serializable
{
    protected $procData = array();
    protected $word2LocationInserter = null;
    protected $dictionaryInserter = null;
    protected $dictionaryIndex = array();
    const STEP_SIZE = 10000;
    const MTU = 9999;
    public function serialize()
    {
    }
    public function unserialize($data)
    {
    }
    public static function getFilePath()
    {
    }
    // this for keeping word dictionary
    public static function getTableName()
    {
    }
    // this for keeping links between location-and-word-id
    public static function getTableNameWord2Location()
    {
    }
    // this for merge, temporal table
    public static function getTableNamePositionTemporal()
    {
    }
    public function __construct($parameters)
    {
    }
    public function initInsertHandles()
    {
    }
    public function resetProcess()
    {
    }
    public static function cleanUpData()
    {
    }
    public static function createIndex()
    {
    }
    public static function parseWords($words)
    {
    }
    public static function parseString($query)
    {
    }
    public function setOffset($offset)
    {
    }
    public function getOffset()
    {
    }
    public function setPosition($position)
    {
    }
    public function getPosition()
    {
    }
    public function onBeforeDictionaryFlush()
    {
    }
    public static function getFilterForInitData($parameters = array())
    {
    }
    public function initializeData()
    {
    }
    public function resort()
    {
    }
    public static function mergeResort()
    {
    }
    public static function getIdByWord($word)
    {
    }
    public static function getBoundsByWord($word)
    {
    }
    public static function getWordsByBounds($inf, $sup)
    {
    }
    public static function getBoundsForPhrase($phrase)
    {
    }
    public static function getMap()
    {
    }
}