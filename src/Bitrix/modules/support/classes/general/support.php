<?php

class CAllTicket
{
    const ADD = "ADD";
    const UPDATE = "UPDATE";
    const DELETE = "DELETE";
    const IGNORE = "IGNORE";
    const REOPEN = "REOPEN";
    const NEW_SLA = "NEW_SLA";
    public static function err_mess()
    {
    }
    /***************************************************************
    
    	Группа функций по работе с ролями на модуль
    
    	Идентификаторы ролей:
    
    	D - доступ закрыт
    	R - клиент техподдержки
    	T - сотрудник техподдержки
    	V - демо-доступ
    	W - администратор техподдержки
    
    	*****************************************************************/
    public static function GetDeniedRoleID()
    {
    }
    public static function GetSupportClientRoleID()
    {
    }
    public static function GetSupportTeamRoleID()
    {
    }
    public static function GetDemoRoleID()
    {
    }
    public static function GetAdminRoleID()
    {
    }
    // возвращает true если заданный пользователь имеет заданную роль на модуль
    public static function HaveRole($role, $userID = \false)
    {
    }
    // true - если пользователь имеет роль "администратор техподдержки"
    // false - в противном случае
    public static function IsAdmin($userID = \false)
    {
    }
    // true - если пользователь имеет роль "демо-доступ"
    // false - в противном случае
    public static function IsDemo($userID = \false)
    {
    }
    // true - если пользователь имеет роль "сотрудник техподдержки"
    // false - в противном случае
    public static function IsSupportTeam($userID = \false)
    {
    }
    // true - если пользователь имеет роль "сотрудник техподдержки"
    // false - в противном случае
    public static function IsSupportClient($userID = \false)
    {
    }
    public static function IsOwner($ticketID, $userID = \false)
    {
    }
    // возвращает роли заданного пользователя
    public static function GetRoles(&$isDemo, &$isSupportClient, &$isSupportTeam, &$isAdmin, &$isAccess, &$userID, $checkRights = \true)
    {
    }
    // возвращает массив ID групп для которых задана роль
    // $role - идентификатор роли
    public static function GetGroupsByRole($role)
    {
    }
    // возвращает массив групп с ролью "администратор техподдержки"
    public static function GetAdminGroups()
    {
    }
    // возвращает массив групп с ролью "сотрудник техподдержки"
    public static function GetSupportTeamGroups()
    {
    }
    // возвращает массив EMail адресов всех пользователей имеющих заданную роль
    public static function GetEmailsByRole($role)
    {
    }
    // возвращает массив EMail'ов всех пользователей имеющих роль "администратор"
    public static function GetAdminEmails()
    {
    }
    // возвращает массив EMail'ов всех пользователей имеющих роль "сотрудник техподдержки"
    public static function GetSupportTeamEmails()
    {
    }
    public static function GetSupportTeamAndAdminUsers()
    {
    }
    /*****************************************************************
    				Группа функций общие для всех классов
    	*****************************************************************/
    // проверка полей фильтра
    public static function CheckFilter($arFilter)
    {
    }
    // проверка полей перед вставкой в базу данных
    public static function CheckFields($arFields, $id, $arRequired)
    {
    }
    // предварительно обрабатывает массив значений для вставки в базу данных
    public static function PrepareFields($arFields, $table, $id)
    {
    }
    public static function SplitTicket($arParam)
    {
    }
    /*****************************************************************
    					Группа функций по работе со спамом
    	*****************************************************************/
    public static function MarkMessageAsSpam($messageID, $exactly = "Y", $checkRights = "Y")
    {
    }
    public static function UnMarkMessageAsSpam($messageID, $checkRights = "Y")
    {
    }
    public static function MarkAsSpam($ticketID, $exactly = "Y", $checkRights = "Y")
    {
    }
    public static function UnMarkAsSpam($ticketID, $checkRights = "Y")
    {
    }
    /*****************************************************************
    					Группа функций по управлению обращениями
    	*****************************************************************/
    /*function UpdateLastParams($ticketID, $resetAutoClose=false, $changeLastMessageDate = true, $setReopenDefault = true)
    	{	
    		$err_mess = (CAllTicket::err_mess())."<br>Function: UpdateLastParams<br>Line: ";
    		global $DB, $USER;
    		$ticketID = intval($ticketID);
    		if ($ticketID<=0) return;
    
    		$arFields = array();
    		//if ($resetAutoClose=="Y") $arFields["AUTO_CLOSE_DAYS"] = "null";
    
    		
    		// определим последнего автора
    		$strSql = "
    			SELECT
    				ID,
    				".$DB->DateToCharFunction("DATE_CREATE","FULL")." DATE_CREATE,
    				OWNER_USER_ID,
    				OWNER_GUEST_ID,
    				OWNER_SID
    			FROM
    				b_ticket_message
    			WHERE
    				TICKET_ID=$ticketID
    			AND(NOT(NOT_CHANGE_STATUS='Y'))
    			AND(NOT(IS_HIDDEN='Y'))
    			AND(NOT(IS_LOG='Y'))
    			AND(NOT(IS_OVERDUE='Y'))
    			ORDER BY
    				C_NUMBER desc
    			";
    		$rs = $DB->Query($strSql,false,$err_mess.__LINE__);
    		if ($arLastMess = $rs->Fetch())
    		{
    			$arFields["LAST_MESSAGE_USER_ID"] = $arLastMess["OWNER_USER_ID"];
    			if ($changeLastMessageDate)
    			{
    				$arFields["LAST_MESSAGE_DATE"] = $DB->CharToDateFunction($arLastMess["DATE_CREATE"]);//NN
    			}
    			$arFields["LAST_MESSAGE_GUEST_ID"] = intval($arLastMess["OWNER_GUEST_ID"]);
    			$arFields["LAST_MESSAGE_SID"] = "'".$DB->ForSql($arLastMess["OWNER_SID"],255)."'";
    		}
    
    		// определим количество сообщений
    		$strSql = "
    			SELECT
    				SUM(CASE WHEN IS_HIDDEN='Y' THEN 0 ELSE 1 END) MESSAGES,
    				SUM(TASK_TIME) ALL_TIME
    			FROM
    				b_ticket_message
    			WHERE
    				TICKET_ID = $ticketID
    			and (IS_LOG='N' or IS_LOG is null or ".$DB->Length("IS_LOG")."<=0)
    			and (IS_OVERDUE='N' or IS_OVERDUE is null or ".$DB->Length("IS_OVERDUE")."<=0)
    			";
    		$z = $DB->Query($strSql, false, $err_mess.__LINE__);
    		$zr = $z->Fetch();
    		$arFields["MESSAGES"] = intval($zr["MESSAGES"]);
    		$arFields["PROBLEM_TIME"] = intval($zr["ALL_TIME"]);
    		
    		
    		if ($setReopenDefault)
    			$arFields["REOPEN"] = "'N'";
    			
    		/*
    		AUTO_CLOSE_DAYS
    		LAST_MESSAGE_DATE
    		LAST_MESSAGE_USER_ID
    		LAST_MESSAGE_GUEST_ID
    		LAST_MESSAGE_SID
    		MESSAGES
    		REOPEN
    		PROBLEM_TIME
    		*/
    /*
    				
    		$DB->Update("b_ticket",$arFields,"WHERE ID='".$ticketID."'",$err_mess.__LINE__);		
    	}
    	
    	//$dateType = CTicket::ADD, CTicket::DELETE, CTicket::CURRENT_DATE
    	function UpdateLastParams2($ticketID, $dateType)
    	{
    		global $DB;
    		$strUsers = implode(",", CTicket::GetSupportTeamAndAdminUsers());
    		$err_mess = (CAllTicket::err_mess())."<br>Function: UpdateLastParams2<br>Line: ";
    		$arFields=array();
    		$arFields["D_1_USER_M_AFTER_SUP_M"] = "null";
    		$arFields["ID_1_USER_M_AFTER_SUP_M"] = "null";
    		$arFields["LAST_MESSAGE_BY_SUPPORT_TEAM"] = "'Y'";
    		$arFields["SUPPORT_DEADLINE_NOTIFY"] = "null";
    		$arFields["SUPPORT_DEADLINE"] = "null";
    		$arFields["IS_OVERDUE"] = "'N'";
    		$arFields["IS_NOTIFIED"] = "'N'";
    				
    		// Get last support response
    		$M_ID = 0;
    		$strSql = "
    			SELECT
    				T.ID ID,
    				MAX(TM.ID) M_ID
    			FROM
    				b_ticket T
    				INNER JOIN b_ticket_message TM
    					ON T.ID = TM.TICKET_ID
    						AND T.ID = $ticketID
    						AND TM.OWNER_USER_ID IN($strUsers)
    						AND (NOT(TM.IS_LOG='Y'))
    						AND (NOT(TM.IS_HIDDEN='Y'))
    						AND (NOT(TM.NOT_CHANGE_STATUS='Y'))
    				
    			GROUP BY
    				T.ID";
    				
    		$rs = $DB->Query($strSql, false, $err_mess . __LINE__);
    		if($arrRs = $rs->Fetch())
    		{
    			if(intval($arrRs["M_ID"]) > 0)
    			{
    				$M_ID = intval($arrRs["M_ID"]);
    			}
    		}
    		
    		// Get first user request after last support response
    		$strSql = "
    			SELECT
    				T.SLA_ID,
    				T.DATE_CLOSE,
    				" . $DB->DateToCharFunction("T.DEADLINE_SOURCE_DATE", "FULL") . " DEADLINE_SOURCE_DATE,
    				" . $DB->DateToCharFunction("T.D_1_USER_M_AFTER_SUP_M", "FULL") . " DATE_OLD,
    				T.IS_OVERDUE,
    				SLA.RESPONSE_TIME_UNIT,
    				SLA.RESPONSE_TIME,
    				SLA.NOTICE_TIME_UNIT,
    				SLA.NOTICE_TIME,
    				PZ2.M_ID,
    				PZ2.D_1_USER_M_AFTER_SUP_M
    			FROM
    				b_ticket T
    				INNER JOIN b_ticket_sla SLA
    					ON T.SLA_ID = SLA.ID
    						AND T.ID = $ticketID
    				LEFT JOIN (SELECT
    					TM.ID M_ID,
    					TM.TICKET_ID,
    					" . $DB->DateToCharFunction("TM.DATE_CREATE", "FULL") . " D_1_USER_M_AFTER_SUP_M
    				FROM
    					b_ticket_message TM
    					INNER JOIN (SELECT
    							T.ID ID,
    							MIN(TM.ID) M_ID
    						FROM
    							b_ticket T
    							INNER JOIN b_ticket_message TM
    								ON T.ID = TM.TICKET_ID
    								AND T.ID = $ticketID
    								AND TM.ID > $M_ID
    								AND (NOT(TM.IS_LOG='Y'))
    								AND (NOT(TM.NOT_CHANGE_STATUS='Y'))
    								AND (NOT(TM.IS_HIDDEN='Y'))
    							
    						GROUP BY
    							T.ID) PZ
    						ON TM.ID = PZ.M_ID) PZ2
    						ON T.ID = PZ2.TICKET_ID
    						
    		";
    		//AND (NOT(TM.IS_HIDDEN='Y'))
    		$rs = $DB->Query($strSql, false, $err_mess . __LINE__);
    		if(!($arrRs = $rs->Fetch()))
    		{
    			return;
    		}
    
    		$isOverdue = false;
    		if(intval($arrRs["M_ID"]) > 0)
    		{
    			$arFields["D_1_USER_M_AFTER_SUP_M"] = $DB->CharToDateFunction($arrRs["D_1_USER_M_AFTER_SUP_M"]);
    			$arFields["ID_1_USER_M_AFTER_SUP_M"] = intval($arrRs["M_ID"]);
    			$arFields["LAST_MESSAGE_BY_SUPPORT_TEAM"] = "'N'";
    
    			if($arrRs["IS_OVERDUE"] == "Y" && !(isset($dateType["EVENT"]) && in_array(CTicket::REOPEN, $dateType["EVENT"])))
    			{
    				unset($arFields["SUPPORT_DEADLINE_NOTIFY"]);
    				unset($arFields["SUPPORT_DEADLINE"]);
    				unset($arFields["IS_OVERDUE"]);
    				unset($arFields["IS_NOTIFIED"]);
    				$isOverdue = true;
    			}
    		}
    				
    		if( !$isOverdue && intval($arrRs["DATE_CLOSE"]) <= 0 && $arFields["LAST_MESSAGE_BY_SUPPORT_TEAM"] == "'N'")
    		{
    			$arrRs["ID"] =  $ticketID;
    			CTicketReminder::RecalculateSupportDeadlineForOneTicket($arrRs, $arFields, $dateType);
    		}
    		else
    		{
    			if(isset($dateType["EVENT"]) && is_array($dateType["EVENT"]) && in_array(CTicket::REOPEN, $dateType["EVENT"]))
    			{
    				$arFields["DEADLINE_SOURCE_DATE"] = $DB->CharToDateFunction(GetTime(time() + CTimeZone::GetOffset(),"FULL"));
    			}
    			$DB->Update("b_ticket", $arFields, "WHERE ID='" . $ticketID . "'", $err_mess . __LINE__);
    		}
    				
    	}*/
    public static function UpdateLastParamsN($ticketID, $dateType, $recalculateSupportDeadline = \true, $setReopenDefault = \true)
    {
    }
    public static function UpdateMessages($ticketID)
    {
    }
    public static function GetFileList(&$by, &$order, $arFilter = array(), $checkRights = 'N')
    {
    }
    public static function GetMessageByID($id, $checkRights = "Y", $get_user_name = "Y")
    {
    }
    public static function GetByID($id, $lang = \LANG, $checkRights = "Y", $get_user_name = "Y", $get_extra_names = "Y", $arParams = array())
    {
    }
    public static function getMaxId()
    {
    }
    public static function Delete($ticketID, $checkRights = "Y")
    {
    }
    public static function UpdateOnline($ticketID, $userID = \false, $currentMode = "")
    {
    }
    public static function SetTicket($arFields, $ticketID = "", $checkRights = "Y", $sendEmailToAuthor = "Y", $sendEmailToTechsupport = "Y")
    {
    }
    /*****************************************************************
    									SET
    	*****************************************************************/
    public static function addSupportText($cn)
    {
    }
    public static function EmailsFromStringToArray($emails, $res = \null)
    {
    }
    public static function GetCSupportTableFields($name, $arrOrTable = \CSupportTableFields::C_Array)
    {
    }
    public static function Set_getFilesLinks($arFiles, $lID)
    {
    }
    public static function Set_WriteLog($nf, $v, $mf)
    {
    }
    public static function Set_sendMails($nf, $v, $arFields)
    {
    }
    public static function Set_getResponsibleUser($v, $f, &$arFields)
    {
    }
    public static function Set_getCOUPONandSLA($v, $f, $arFields)
    {
    }
    public static function Set_InitVar(&$arFields, $id, $checkRights, $sendEmailToAuthor, $sendEmailToTechsupport)
    {
    }
    public static function Set($arFields, &$MID, $id = "", $checkRights = "Y", $sendEmailToAuthor = "Y", $sendEmailToTechsupport = "Y")
    {
    }
    /***********************************************
    			Старые функции для совместимости
    	***********************************************/
    public static function GetFUA($site_id)
    {
    }
    public static function GetRefBookValues($type, $site_id = \false)
    {
    }
    public static function GetMessages($ticketID, $arFilter = array(), $checkRights = "Y")
    {
    }
    public static function GetResponsible()
    {
    }
    public static function IsResponsible($userID = \false)
    {
    }
    public static function ExecuteEvents($message, $arFields, $isNew, &$eventType = \false)
    {
    }
    public static function GetResponsibleList($userID, $CMGM = \null, $CMUGM = \null, $SG = \null)
    {
    }
    public static function GetUsersPropertiesArray($arUserIDs = array(), $arGuestIDs = array())
    {
    }
}