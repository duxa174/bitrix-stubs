<?php

class CSupportTableFields
{
    const VT_NUMBER = "number";
    const VT_STRING = "string";
    const VT_Y_N = "Y_N";
    const VT_Y_N_NULL = "Y_N_NULL";
    const VT_DATE = "date";
    const VT_DATE_TIME = "datetime";
    const JS_HREF = 1;
    const JS_HREF_ALERT = 2;
    const JS_IN_QUOTES = 3;
    const JS_EVENT = 4;
    const ATTRIBUTE = 5;
    const ATTRIBUTE_EX = 6;
    const HREF_LOCATION = 7;
    const ID = 8;
    const NOT_NULL = 1;
    const NOT_DEFAULT = 2;
    const ONLY_CHANGED = 3;
    const MORE0 = 4;
    const NOT_EMTY_STR = 5;
    const ALL = \null;
    const C_Array = 1;
    const C_Table = 2;
    protected $_arFieldsTypes = array();
    /*
    		array(
    			"aaa" => array(
    				"TYPE" => self::VT_STRING, 
    				"DEF_VAL" => null, 
    				"MAX_STR_LEN" => 255, 
    				"AUTO_CALCULATED" => true, 
    				"LIST" => array("q1","q2") 
    			) 
    		)*/
    protected $_arFields = array();
    //array(0 => array("aaa" => null))
    protected $_arModifiedFields = array();
    //array(0 => array("aaa", "bbb"))
    protected $_classType = self::C_Array;
    protected $_currentRow = 0;
    protected $_resetNextF = \false;
    protected $_sortFields = array();
    static function Convert($type, $value, $op)
    {
    }
    static function ConvertForSQL($type, $value)
    {
    }
    static function ConvertForHTML($type, $place, $value, $op)
    {
    }
    function SortMethod($a, $b)
    {
    }
    public function __construct($f, $arOrTable = self::C_Array)
    {
    }
    public function checkRow($row)
    {
    }
    public function First()
    {
    }
    public function Last()
    {
    }
    public function ResetNext()
    {
    }
    public function Next()
    {
    }
    public function Previous()
    {
    }
    public function Row($row)
    {
    }
    public function CleanVar($row = \null, $removeExistingRows = \false)
    {
    }
    public function RemoveExistingRows()
    {
    }
    public function __set($name, $value)
    {
    }
    public function AddRow()
    {
    }
    /* заполнить поля из массива
    		$sf = "Имя поля,Имя поля2,..."
    		$sf = array("Имя поля", "Имя поля2",...) */
    public function SortRow($sf)
    {
    }
    //$notNull = array(self::NOT_NULL, self::MORE0, self::NOT_EMTY_STR)
    public function Set($name, $value, $notNull = array(), $row = \null, $isModified = \true)
    {
    }
    public function SetCurrentTime($name, $row = \null)
    {
    }
    /* заполнить поля из массива
    		$fields = CSupportTableFields::ALL
    		$fields = "Имя поля,Имя поля2,..."
    		$fields = array("Имя поля", "Имя поля2",...)
    		$fields = array("Имя поля" => "Имя поля в массиве", "Имя поля2" => "Имя поля в массиве2",...)
    		$notNull = array(self::NOT_EMTY_STR, self::MORE0, self::NOT_EMTY_STR) */
    public function FromArray($arr, $fields = self::ALL, $notNull = array(), $row = \null)
    {
    }
    /* заполнить поля из массива
    		$fields = CSupportTableFields::ALL
    		$fields = "Имя поля,Имя поля2,..."
    		$fields = array("Имя поля", "Имя поля2",...)
    		$fields = array("Имя поля" => "Имя поля в массиве", "Имя поля2" => "Имя поля в массиве2",...)
    		$notNull = array(self::NOT_EMTY_STR, self::MORE0, self::NOT_EMTY_STR) */
    public function FromTable($table, $fields = self::ALL, $notNull = array(), $removeExistingRows = \false)
    {
    }
    public function __get($name)
    {
    }
    public function Get($name, $row = \null)
    {
    }
    /*Выгрузить перечисленные поля в массив
    		$notNull = array(self::NOT_NULL, self::NOT_DEFAULT, self::ONLY_CHANGED)
    		$fields = CSupportTableFields::ALL
    		$fields = "Имя поля,Имя поля2,..."
    		$fields = array("Имя поля", "Имя поля2",...)
    		$fields = array("Имя поля" => "Имя поля в массиве", "Имя поля2" => "Имя поля в массиве2",...)*/
    public function ToArray($fields = self::ALL, $notNull = array(), $forSQL = \false, $row = \null)
    {
    }
    public function GetFieldForOutput($name, $place, $whiteList = array("http", "ftp", "/"), $row = \null)
    {
    }
    public function GetColumn($name)
    {
    }
}