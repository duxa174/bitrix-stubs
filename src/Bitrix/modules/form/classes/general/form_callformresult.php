<?php

/***************************************
		Web-form result
***************************************/
class CAllFormResult extends \CFormResult_old
{
    function err_mess()
    {
    }
    function GetFileByAnswerID($RESULT_ID, $ANSWER_ID)
    {
    }
    // return file data by file hash
    function GetFileByHash($RESULT_ID, $HASH)
    {
    }
    // create new event
    function SetEvent($RESULT_ID, $IN_EVENT1 = \false, $IN_EVENT2 = \false, $IN_EVENT3 = \false, $money = "", $currency = "", $goto = "", $chargeback = "N")
    {
    }
    //returns data for questions and answers array
    function GetDataByID($RESULT_ID, $arrFIELD_SID, &$arrRES, &$arrANSWER)
    {
    }
    // return array of result values for component
    function GetDataByIDForHTML($RESULT_ID, $GET_ADDITIONAL = "N")
    {
    }
    // add new form result
    function Add($WEB_FORM_ID, $arrVALUES = \false, $CHECK_RIGHTS = "Y", $USER_ID = \false)
    {
    }
    // update result
    function Update($RESULT_ID, $arrVALUES = \false, $UPDATE_ADDITIONAL = "N", $CHECK_RIGHTS = "Y")
    {
    }
    // set question or field value in existed result
    function SetField($RESULT_ID, $FIELD_SID, $VALUE = \false)
    {
    }
    // delete result
    function Delete($RESULT_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // clear result
    function Reset($RESULT_ID, $DELETE_FILES = \true, $DELETE_ADDITIONAL = "N", $arrException = array())
    {
    }
    // update result status
    function SetStatus($RESULT_ID, $NEW_STATUS_ID, $CHECK_RIGHTS = "Y")
    {
    }
    //send form event notification;
    function Mail($RESULT_ID, $TEMPLATE_ID = \false)
    {
    }
    function GetCount($WEB_FORM_ID)
    {
    }
    // prepare array of parameters for result filter
    function PrepareFilter($WEB_FORM_ID, $arFilter)
    {
    }
    function SetCRMFlag($RESULT_ID, $flag_value)
    {
    }
}