<?php

class CForm_old
{
    function GetFileValue($RESULT_ID, $ANSWER_ID)
    {
    }
    function Show($WEB_FORM_VARNAME, $arrVALUES = \false, $SHOW_TEMPLATE = \false, $PREVIEW = "N")
    {
    }
    function IsOldVersion()
    {
    }
    function GetClosedFields($WEB_FORM_ID, $arrFields)
    {
    }
    function GetByVarname($VARNAME)
    {
    }
    function GetResultList($WEB_FORM_ID, &$by, &$order, $arFilter = array(), &$is_filtered, $CHECK_RIGHTS = "Y", $records_limit = \false)
    {
    }
    function GetResultByID($RESULT_ID)
    {
    }
    function GetResultFields($RESULT_ID, $arrFIELD_VARNAME, &$arrRES, &$arrANSWER)
    {
    }
    function GetResultValuesFromDB($RESULT_ID, $GET_ADDITIONAL = "N")
    {
    }
    function Add($WEB_FORM_ID, $arrVALUES = \false, $CHECK_RIGHTS = "Y", $USER_ID = \false)
    {
    }
    function Update($RESULT_ID, $arrVALUES = \false, $UPDATE_ADDITIONAL = "N", $CHECK_RIGHTS = "Y")
    {
    }
    function SetResultField($RESULT_ID, $FIELD_VARNAME, $VALUE)
    {
    }
    function GetResultPermission($RESULT_ID, &$CURRENT_STATUS_ID)
    {
    }
    function AddResultAnswer($arFields)
    {
    }
    function UpdateResultField($arFields, $RESULT_ID, $FIELD_ID)
    {
    }
    function DeleteResult($ID, $CHECK_RIGHTS = "Y")
    {
    }
    function ResetResult($ID, $WEB_FORM_ID, $DELETE_IMAGES = \true, $DELETE_ADDITIONAL = "N", $arrException = array())
    {
    }
    function ShowResult($RESULT_ID, $TEMPLATE = "", $TEMPLATE_TYPE = "show", $SHOW_ADDITIONAL = "N", $SHOW_ANSWER_VALUE = "Y", $SHOW_STATUS = "N")
    {
    }
    function EditResult($RESULT_ID, $arrVALUES, $TEMPLATE = "", $EDIT_ADDITIONAL = "N", $EDIT_STATUS = "N")
    {
    }
    function SetResultStatus($WEB_FORM_ID, $RESULT_ID, $NEW_STATUS_ID, $CHECK_RIGHTS = "Y")
    {
    }
    function Mail($RESULT_ID, $TEMPLATE_ID = "")
    {
    }
    function GetResultsCount($WEB_FORM_ID)
    {
    }
    function PrepareResultFilter($WEB_FORM_ID, $arFilter)
    {
    }
    function SetEvent($RESULT_ID, $IN_EVENT1 = \false, $IN_EVENT2 = \false, $IN_EVENT3 = \false, $money = "", $currency = "", $goto = "", $chargeback = "N")
    {
    }
    function GetFieldList($WEB_FORM_ID, $additional, &$by, &$order, $arFilter = array(), &$is_filtered)
    {
    }
    function GetFieldByID($ID)
    {
    }
    function GetFieldByVarname($SID)
    {
    }
    function DeleteField($WEB_FORM_ID, $ID, $CHECK_RIGHTS = "Y")
    {
    }
    function ResetField($WEB_FORM_ID, $ID, $CHECK_RIGHTS = "Y")
    {
    }
    function GetFilterTypeList(&$arrUSER, &$arrANSWER_TEXT, &$arrANSWER_VALUE, &$arrFIELD)
    {
    }
    function GetAdditionaFieldTypeList()
    {
    }
    function GetAnswerByID($ID)
    {
    }
    function DeleteAnswer($ID)
    {
    }
    function GetAnswerList($FIELD_ID, &$by, &$order, $arFilter = array(), &$is_filtered)
    {
    }
    function GetAnswerTypeList()
    {
    }
    function GetFilterList($WEB_FORM_ID, $arFilter = array())
    {
    }
    function GetStatusPermission($STATUS_ID)
    {
    }
    function GetNextStatusSort($WEB_FORM_ID)
    {
    }
    function GetDefaultStatus($WEB_FORM_ID)
    {
    }
    function GetStatusList($WEB_FORM_ID, &$by, &$order, $arFilter = array(), &$is_filtered)
    {
    }
    function GetStatusByID($ID)
    {
    }
    function GetStatusDropdown($WEB_FORM_ID, $PERMISSION = "MOVE", $OWNER_ID = 0)
    {
    }
}