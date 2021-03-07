<?php

namespace Bitrix\Sale\Location\Import\Compiler\Db;

class ExportTreeUkrainTable extends \Bitrix\Sale\Location\Import\Compiler\Db\ExportTreeTable
{
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    protected $settlementParent = array();
    protected $types = false;
    protected $typeMap = array(
        1 => 'CITY',
        //| місто              | город                  |
        2 => 'VILLAGE',
        //| смт                | пгт                    |
        3 => 'VILLAGE',
        //| селище             | поселок                |
        4 => 'VILLAGE',
        //| село               | село                   |
        5 => 'VILLAGE',
        //| хутір              | хутор                  |
        6 => 'VILLAGE',
        //| ст.                | ст.                    |
        7 => 'VILLAGE',
        //| санат.             | санат.                 |
        8 => 'VILLAGE',
        //| радгосп            | совхоз                 |
        9 => 'VILLAGE',
        //| вокзал             | вокзал                 |
        10 => 'VILLAGE',
        //| лісництво          | лесничество            |
        11 => 'VILLAGE',
        //| док                | док                    |
        12 => 'VILLAGE',
    );
    public function getMappedType($typeId)
    {
    }
    public function addNode($data)
    {
    }
    public function addRegion($params)
    {
    }
    public function addArea($params)
    {
    }
    public function getNames($id, $type)
    {
    }
    public function getSettlementParentCode($params)
    {
    }
    public function buildFromUADB($options)
    {
    }
    public function create()
    {
    }
    /*
    public function dropCodeIndex()
    {
    	unset($this->codeIndex);
    
    	if(!empty($this->regionCodeIndex))
    		$this->codeIndex = $this->regionCodeIndex;
    }
    
    public function insert($data)
    {
    	if(isset($this->codeIndex[$data['SYS_CODE']])) // already in there
    		return;
    
    	if($data['TYPE_CODE'] == 'REGION')
    		$this->regionCodeIndex[$data['SYS_CODE']] = $this->formatCode($this->exportOffset);
    
    	$this->codeIndex[$data['SYS_CODE']] = $this->formatCode($this->exportOffset);
    
    	$data['CODE'] = $this->codeIndex[$data['SYS_CODE']];
    	$data['PARENT_CODE'] = strlen($data['PARENT_SYS_CODE']) ? $this->codeIndex[$data['PARENT_SYS_CODE']] : '';
    
    	unset($data['PARENT_SYS_CODE']);
    
    	if(is_array($data['LANGNAMES']))
    		$data['LANGNAMES'] = serialize($data['LANGNAMES']);
    
    	if(is_array($data['EXTERNALS']))
    		$data['EXTERNALS'] = serialize($data['EXTERNALS']);
    
    	$this->exportOffset++;
    
    	$this->inserter->insert($data);
    }
    
    public static function getMap()
    {
    	$map = parent::getMap();
    	$map['ZIP'] = array(
    		'data_type' => 'string',
    	);
    
    	return $map;
    }
    */
    public static function getMap()
    {
    }
}