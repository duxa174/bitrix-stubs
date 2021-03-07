<?php

namespace Bitrix\Sale\Location\Comparator;

/**
 * Class MapResult
 * @package Bitrix\Sale\Location\Comparator
 */
class MapResult
{
    protected $lastProcessedId = 0;
    protected $supportedCount = 0;
    protected $mapped = array();
    protected $notFound = array();
    protected $duplicated = array();
    public function setSupportedCount($count)
    {
    }
    public function setLastProcessedId($id)
    {
    }
    public function getLastProcessedId()
    {
    }
    public function getSupportedCount()
    {
    }
    public function getDuplicated()
    {
    }
    public function getNotFound()
    {
    }
    public function getMapped()
    {
    }
    public function addNotFound($eLocId, $eLocName)
    {
    }
    public function addDuplicated($eLocId, $eLocName, $bLocId)
    {
    }
    public function addMapped($eLocId, $eLocName, $bLocId)
    {
    }
    protected function getLocationChain($locationId)
    {
    }
}