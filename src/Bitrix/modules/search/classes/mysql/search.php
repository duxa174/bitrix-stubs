<?php

class CSearch extends \CAllSearch
{
    /*
    var $arForumTopics = array();
    
    function DBNavStart()
    {
    	//total rows count
    	$this->NavRecordCount = mysql_num_rows($this->result);
    	if($this->NavRecordCount < 1)
    		return;
    
    	if($this->NavShowAll)
    		$this->NavPageSize = $this->NavRecordCount;
    
    	//calculate total pages depend on rows count. start with 1
    	$this->NavPageCount = floor($this->NavRecordCount/$this->NavPageSize);
    	if($this->NavRecordCount % $this->NavPageSize > 0)
    		$this->NavPageCount++;
    
    	//page number to display. start with 1
    	$this->NavPageNomer = ($this->PAGEN < 1 || $this->PAGEN > $this->NavPageCount? ($_SESSION[$this->SESS_PAGEN] < 1 || $_SESSION[$this->SESS_PAGEN] > $this->NavPageCount? 1:$_SESSION[$this->SESS_PAGEN]):$this->PAGEN);
    
    	//rows to skip
    	$NavFirstRecordShow = $this->NavPageSize * ($this->NavPageNomer-1);
    	$NavLastRecordShow = $this->NavPageSize;
    
    	if($this->SqlTraceIndex)
    	{
    		list($usec, $sec) = explode(" ", microtime());
    		$start_time = ((float)$usec + (float)$sec);
    	}
    
    	while($NavFirstRecordShow > 0)
    	{
    		if(($res = mysql_fetch_array($this->result, MYSQL_ASSOC)))
    		{
    			if(
    				$res["MODULE_ID"] == "forum"
    				&& array_key_exists($res["PARAM2"], $this->arForumTopics)
    			)
    				$this->NavRecordCount--; //eat forum topic duplicates
    			elseif(
    				$res["module"] == "forum"
    				&& array_key_exists($res["param2"], $this->arForumTopics)
    			)
    				$this->NavRecordCount--; //eat forum topic duplicates
    			else
    				$NavFirstRecordShow--;
    
    			if($res["MODULE_ID"] == "forum")
    				$this->arForumTopics[$res["PARAM2"]] = true;
    			elseif($res["module"] == "forum")
    				$this->arForumTopics[$res["param2"]] = true;
    		}
    		else
    		{
    			break;
    		}
    	}
    
    	$temp_arrray = array();
    	while($NavLastRecordShow > 0)
    	{
    		if(($res = mysql_fetch_array($this->result, MYSQL_ASSOC)))
    		{
    			if(
    				$res["MODULE_ID"] == "forum"
    				&& array_key_exists($res["PARAM2"], $this->arForumTopics)
    			)
    				$this->NavRecordCount--; //eat forum topic duplicates
    			elseif(
    				$res["module"] == "forum"
    				&& array_key_exists($res["param2"], $this->arForumTopics)
    			)
    				$this->NavRecordCount--; //eat forum topic duplicates
    			else
    			{
    				if($this->arUserMultyFields)
    					foreach($this->arUserMultyFields as $FIELD_NAME=>$flag)
    						if($res[$FIELD_NAME])
    							$res[$FIELD_NAME] = unserialize($res[$FIELD_NAME]);
    				$temp_arrray[] = $res;
    				$NavLastRecordShow--;
    			}
    
    			if($res["MODULE_ID"] == "forum")
    				$this->arForumTopics[$res["PARAM2"]] = true;
    			elseif($res["module"] == "forum")
    				$this->arForumTopics[$res["param2"]] = true;
    		}
    		else
    		{
    			break;
    		}
    	}
    
    	//Adjust total pages depend on rows count. start with 1
    	$this->NavPageCount = floor($this->NavRecordCount/$this->NavPageSize);
    	if($this->NavRecordCount % $this->NavPageSize > 0)
    		$this->NavPageCount++;
    
    	if($this->SqlTraceIndex)
    	{
    		list($usec, $sec) = explode(" ", microtime());
    		$end_time = ((float)$usec + (float)$sec);
    		$exec_time = round($end_time-$start_time, 10);
    		$GLOBALS["DB"]->arQueryDebug[$this->SqlTraceIndex - 1]["TIME"] += $exec_time;
    		$GLOBALS["DB"]->timeQuery += $exec_time;
    	}
    
    	$this->nSelectedCount = $this->NavRecordCount;
    	$this->arResult = $temp_arrray;
    }
    */
    function MakeSQL($query, $strSqlWhere, $strSort, $bIncSites, $bStem)
    {
    }
    function tagsMakeSQL($query, $strSqlWhere, $strSort, $bIncSites, $bStem, $limit = 100)
    {
    }
    public static function ReindexLock()
    {
    }
    public static function OnLangDelete($lang)
    {
    }
    public static function FormatDateString($strField)
    {
    }
    public static function FormatLimit($strSql, $limit)
    {
    }
    public static function CleanFreqCache($ID)
    {
    }
    public static function IndexTitle($arLID, $ID, $sTitle)
    {
    }
    public static function RegisterStem($stem)
    {
    }
    public static function StemIndex($arLID, $ID, $sContent)
    {
    }
    public static function TagsIndex($arLID, $ID, $sContent)
    {
    }
    public static function UpdateSite($ID, $arSITE_ID)
    {
    }
}
class CSearchQuery extends \CAllSearchQuery
{
    var $cnt = 0;
    function BuildWhereClause($word)
    {
    }
}