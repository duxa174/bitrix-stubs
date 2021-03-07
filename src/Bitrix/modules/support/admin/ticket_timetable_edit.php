<?php

class CSupportPage
{
    const AJAX_VAR_NAME = "MY_AJAX";
    const LIST_URL = "ticket_timetable_list.php";
    const SHOW_FORM_SETTINGS = \true;
    const SHOW_USER_FIELDS = \false;
    const DEFAULT_TIME = "00:00";
    const DEFAULT_TIME_INPUT_ROW = 1;
    static $needShowInterface = \true;
    static $needSave = \false;
    static $canNotRead = \false;
    static $objCAdminForm = \null;
    //$tabControl
    static $notSaved = \true;
    static $isErrors = \false;
    static $id = 0;
    static $timeTableFields = \null;
    static $timeTableSheduleFields = \null;
    static $postTimeTableFields = \null;
    static $postTimeTableSheduleFields = \null;
    static function ProcessAJAX()
    {
    }
    static function GetPost()
    {
    }
    static function Save()
    {
    }
    static function Read()
    {
    }
    static function GetArrayOfTabs()
    {
    }
    static function DoActions()
    {
    }
    static function ShowErrors()
    {
    }
    static function ShowMenu()
    {
    }
    static function Show()
    {
    }
    static function TimeToStr($t)
    {
    }
    static function StrToTime($t)
    {
    }
    static function ArrSheduleInObj($arr)
    {
    }
    static function ObjInArrShedule()
    {
    }
    /*static function ShowClock($arrREQ, $jsonON = false)
    	{
    		global $APPLICATION;
    		
    		if(!isset($arrREQ["CClockAJAXData"]) || !is_array($arrREQ["CClockAJAXData"]) || (count($arrREQ["CClockAJAXData"]) <= 0) ||  !CSupportTools::array_keys_exists("i,j", $arrREQ["CClockAJAXData"]))
    		{
    			return false;
    		}
    		$arr = $arrREQ["CClockAJAXData"];
    		$i = intval($arr["i"]);
    		$j = intval($arr["j"]);
    		$val = array(
    			1 => (isset($arr["ValF"]) && strlen($arr["ValF"]) > 0) ? CUtil::JSEscape($arr["ValF"]) : self::DEFAULT_TIME,
    			2 => (isset($arr["ValT"]) && strlen($arr["ValT"]) > 0) ? CUtil::JSEscape($arr["ValT"]) : self::DEFAULT_TIME,
    		);
    		$ft = array(
    			1 => "FROM",
    			2 => "TILL",
    		);
    		
    		require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/tools/clock.php");
    		$clock = array();
    		for($k = 1; $k < 3; $k++)
    		{
    			ob_start();
    			CClock::Show(
    				array(
    					'inputId' => ("MINUTE_" . $ft[$k] . "_" .$i . "_" . $j),
    					'inputName' => "ArrShedule[$i][CUSTOM_TIME][$j][MINUTE_" . $ft[$k] . "]",
    					'view' => "label", //"inline","label","select",
    					'showIcon' => true,
    					'initTime' => $val[$k],
    					'am_pm_mode' => false,
    					//'step' => 5
    				)
    			);
    
    			$clock[$k] = ob_get_contents();
    			ob_end_clean();
    		}
    		
    		if($jsonON)	
    		{
    			$res = array( 
    				$clock[1],
    				'<nobr>&nbsp;-&nbsp;</nobr>',
    				$clock[2],
    				'<a title="' . GetMessage("MAIN_ADMIN_MENU_COPY") . '" href="javascript: Copy(' . $i . ',' . $j . ')"><img src="/bitrix/images/support/copy.gif" width="15" height="15" border=0 hspace="2" alt="' . GetMessage("MAIN_ADMIN_MENU_COPY") . '"></a>'
    			);
    			
    			if (ToUpper(SITE_CHARSET) !== 'UTF-8')
    			{
    				$res0 = array();
    				foreach($res as $k => $v)
    				{
    					$res0[$k] = $APPLICATION->ConvertCharset($v, SITE_CHARSET, 'utf-8');
    				}
    				$res = $res0;
    			}
    			$res = json_encode($res);	
    		}
    		else
    		{
    			$res = '
    				<td>' . $clock[1] . '</td>
    				<td nowrap="" valign="middle" align="center"><nobr>&nbsp;-&nbsp;</nobr></td>
    				<td>' . $clock[2] . '</td>
    				<td>
    					<a title="' . GetMessage("MAIN_ADMIN_MENU_COPY") . '" href="javascript: Copy(' . $i . ',' . $j . ')"><img src="/bitrix/images/support/copy.gif" width="15" height="15" border=0 hspace="2" alt="' . GetMessage("MAIN_ADMIN_MENU_COPY") . '"></a>
    				</td>';
    		}
    
    		return $res;
    	}*/
}
function Tab1($adminForm)
{
}
function Tab2_JS()
{
}
function Tab2($adminForm, $arShedule)
{
}