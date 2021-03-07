<?php

class CAllTicketReminder
{
    function err_mess()
    {
    }
    function ConvertResponseTimeUnit($rt, $rtu)
    {
    }
    function RecalculateLastMessageDeadline($RSD = \true)
    {
    }
    function RecalculateSupportDeadline($arFilter = array())
    {
    }
    /*$arTicket = ID,SLA_ID,RESPONSE_TIME, D_1_USER_M_AFTER_SUP_M, RESPONSE_TIME_UNIT, NOTICE_TIME, NOTICE_TIME_UNIT,DEADLINE_SOURCE_DATE
    	$dateType = CTicket::ADD, CTicket::UPDATE CTicket::DELETE, CTicket::IGNORE, CTicket::REOPEN, CTicket::NEW_SLA*/
    function RecalculateSupportDeadlineForOneTicket($arTicket, $arFields = array(), $dateType = array("EVENT" => array(\CTicket::IGNORE)))
    {
    }
    function SupportDeadline($arrTicket)
    {
    }
    function SupportDeadlineNotify($arrTicket0)
    {
    }
    function AgentFunction()
    {
    }
    function StartAgent()
    {
    }
}