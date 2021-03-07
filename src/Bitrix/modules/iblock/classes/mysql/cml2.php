<?php

/*
This class is used to parse and load an xml file into database table.
*/
class CIBlockXMLFile
{
    var $_table_name = "";
    var $_sessid = "";
    var $charset = \false;
    var $element_stack = \false;
    var $file_position = 0;
    var $read_size = 10240;
    var $buf = "";
    var $buf_position = 0;
    var $buf_len = 0;
    private $_get_xml_chunk_function = "_get_xml_chunk";
    function __construct($table_name = "b_xml_tree")
    {
    }
    function StartSession($sess_id)
    {
    }
    function GetSessionRoot()
    {
    }
    function EndSession()
    {
    }
    public function GetRoot()
    {
    }
    /*
    This function have to called once at the import start.
    
    return : result of the CDatabase::Query method
    We use drop due to mysql innodb slow truncate bug.
    */
    function DropTemporaryTables()
    {
    }
    function CreateTemporaryTables($with_sess_id = \false)
    {
    }
    function IsExistTemporaryTable()
    {
    }
    function GetCountItemsWithParent($parentID)
    {
    }
    /*
    This function indexes contents of the loaded data for future lookups.
    May be called after tables creation and loading will perform slowly.
    But it is recommented to call this function after all data load.
    This is much faster.
    
    return : result of the CDatabase::Query method
    */
    function IndexTemporaryTables($with_sess_id = \false)
    {
    }
    function Add($arFields)
    {
    }
    function GetFilePosition()
    {
    }
    /*
    Reads portion of xml data.
    
    hFile - file handle opened with fopen function for reading
    NS - will be populated with to members
    	charset parameter is used to recode file contents if needed.
    	element_stack parameters save parsing stack of xml tree parents.
    	file_position parameters marks current file position.
    time_limit - duration of one step in seconds.
    
    NS have to be preserved between steps.
    They automatically extracted from xml file and should not be modified!
    */
    function ReadXMLToDatabase($fp, &$NS, $time_limit = 0, $read_size = 1024)
    {
    }
    /*
    Internal function.
    Used to read an xml by chunks started with "<" and endex with "<"
    */
    function _get_xml_chunk($fp)
    {
    }
    /*
    Internal function.
    Used to read an xml by chunks started with "<" and endex with "<"
    */
    function _get_xml_chunk_mb_orig($fp)
    {
    }
    /*
    Internal function.
    Used to read an xml by chunks started with "<" and endex with "<"
    */
    function _get_xml_chunk_mb($fp)
    {
    }
    /*
    Internal function.
    Stores an element into xml database tree.
    */
    function _start_element($xmlChunk)
    {
    }
    /*
    Internal function.
    Winds tree stack back. Modifies (if neccessary) internal tree structure.
    */
    function _end_element($xmlChunk)
    {
    }
    /*
    Returns an associative array of the part of xml tree.
    Elements with same name on the same level gets an additional suffix.
    For example
    	<a>
    		<b>123</b>
    		<b>456</b>
    	<a>
    will return
    	array(
    		"a => array(
    			"b" => "123",
    			"b1" => "456",
    		),
    	);
    */
    function GetAllChildrenArray($arParent, $handleAttributes = \false)
    {
    }
    function GetList($arOrder = array(), $arFilter = array(), $arSelect = array(), $handleAttributes = \false)
    {
    }
    function Delete($ID)
    {
    }
    public static function UnZip($file_name, $last_zip_entry = "", $start_time = 0, $interval = 0)
    {
    }
}