<?php

namespace Bitrix\Sale\Exchange\Integration\Service\Batchable;

abstract class Base
{
    const ANALITICS_ORIGINATOR_ID = 'bitrix.cms.sync';
    protected $collection;
    public function __construct()
    {
    }
    public abstract function getSrcEntityTypeId();
    public abstract function getDstEntityTypeId();
    public abstract function init($params);
    public static abstract function proxyAdds(array $list);
    protected function relationLoad()
    {
    }
    public function relationListDstEntity()
    {
    }
    public function relationDeleteByDstEntity($dstEntityList)
    {
    }
    public function relationVoid()
    {
    }
    public function relationRefreshByDstEntity($list)
    {
    }
    protected static function relationEntityList($filter = [])
    {
    }
    /*protected function clientRelation($params, $typeName)
    	{
    		$list = $params[$typeName];
    		$client = static::factoryClient($typeName);
    
    		return $this->relationEntityList([
    				'SRC_ENTITY_ID' => array_keys($list),
    				'SRC_ENTITY_TYPE_ID' => $client->getSrcEntityTypeId(),
    				'DST_ENTITY_TYPE_ID' => $client->getDstEntityTypeId()]
    		);
    	}*/
    protected static function clientRelation($indexes, $typeName)
    {
    }
    protected static function factoryClient($typeName)
    {
    }
    protected static function getIndexesFromParams(array $params)
    {
    }
    protected static function getIndexesContactFromParams($contacts)
    {
    }
    protected static function getContactItemsFromIndexes($indexes)
    {
    }
    protected static function prepareFieldsAdds($fields)
    {
    }
    protected function addsFromParams(array $params)
    {
    }
    public function adds()
    {
    }
    public function getCollection()
    {
    }
}