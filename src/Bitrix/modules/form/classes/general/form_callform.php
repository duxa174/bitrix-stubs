<?php

class CAllForm extends \CForm_old
{
    public static function err_mess()
    {
    }
    public static function IsAdmin()
    {
    }
    public static function GetResultAnswerArray($WEB_FORM_ID, &$arrColumns, &$arrAnswers, &$arrAnswersSID, $arFilter = array())
    {
    }
    public static function GetMailTemplateArray($FORM_ID)
    {
    }
    public static function GetSiteArray($FORM_ID)
    {
    }
    public static function ExecHandlerBeforeChangeStatus($RESULT_ID, $ACTION, $NEW_STATUS_ID = 0)
    {
    }
    public static function ExecHandlerAfterChangeStatus($RESULT_ID, $ACTION)
    {
    }
    public static function GetPermissionList($get_default = "Y")
    {
    }
    public static function GetPermission($form_id, $arGroups = \false, $get_from_database = "")
    {
    }
    public static function GetTemplateList($type = "SHOW", $path = "xxx", $WEB_FORM_ID = 0)
    {
    }
    public static function GetMenuList($arFilter = array(), $check_rights = "Y")
    {
    }
    public static function GetNextSort()
    {
    }
    public static function ShowRequired($flag)
    {
    }
    public static function GetTextFilter($FID, $size = "45", $field_text = "class=\"inputtext\"", $field_checkbox = "class=\"inputcheckbox\"")
    {
    }
    public static function GetDateFilter($FID, $form_name = "form1", $show_select = "Y", $field_select = "class=\"inputselect\"", $field_input = "class=\"inputtext\"")
    {
    }
    public static function GetNumberFilter($FID, $size = "10", $field = "class=\"inputtext\"")
    {
    }
    public static function GetExistFlagFilter($FID, $field = "class=\"inputcheckbox\"")
    {
    }
    public static function GetCrmFlagFilter($FID, $field = "class=\"inputselect\"")
    {
    }
    public static function GetDropDownFilter($ID, $PARAMETER_NAME, $FID, $field = "class=\"inputselect\"")
    {
    }
    public static function GetTextValue($FIELD_NAME, $arAnswer, $arrVALUES = \false)
    {
    }
    public static function GetHiddenValue($FIELD_NAME, $arAnswer, $arrVALUES = \false)
    {
    }
    public static function GetPasswordValue($FIELD_NAME, $arAnswer, $arrVALUES = \false)
    {
    }
    public static function GetEmailValue($FIELD_NAME, $arAnswer, $arrVALUES = \false)
    {
    }
    public static function GetUrlValue($FIELD_NAME, $arAnswer, $arrVALUES = \false)
    {
    }
    public static function GetTextField($FIELD_NAME, $VALUE = "", $SIZE = "", $PARAM = "")
    {
    }
    public static function GetHiddenField($FIELD_NAME, $VALUE = "", $PARAM = "")
    {
    }
    public static function GetEmailField($FIELD_NAME, $VALUE = "", $SIZE = "", $PARAM = "")
    {
    }
    public static function GetUrlField($FIELD_NAME, $VALUE = "", $SIZE = "", $PARAM = "")
    {
    }
    public static function GetPasswordField($FIELD_NAME, $VALUE = "", $SIZE = "", $PARAM = "")
    {
    }
    public static function GetDropDownValue($FIELD_NAME, $arDropDown, $arrVALUES = \false)
    {
    }
    public static function GetDropDownField($FIELD_NAME, $arDropDown, $VALUE, $PARAM = "")
    {
    }
    public static function GetMultiSelectValue($FIELD_NAME, $arMultiSelect, $arrVALUES = \false)
    {
    }
    public static function GetMultiSelectField($FIELD_NAME, $arMultiSelect, $arSELECTED = array(), $HEIGHT = "", $PARAM = "")
    {
    }
    public static function GetDateValue($FIELD_NAME, $arAnswer, $arrVALUES = \false)
    {
    }
    public static function GetDateField($FIELD_NAME, $FORM_NAME, $VALUE = "", $FIELD_WIDTH = "", $PARAM = "")
    {
    }
    public static function GetCheckBoxValue($FIELD_NAME, $arAnswer, $arrVALUES = \false)
    {
    }
    public static function GetCheckBoxField($FIELD_NAME, $FIELD_ID, $VALUE = "", $PARAM = "")
    {
    }
    public static function GetRadioValue($FIELD_NAME, $arAnswer, $arrVALUES = \false)
    {
    }
    public static function GetRadioField($FIELD_NAME, $FIELD_ID, $VALUE = "", $PARAM = "")
    {
    }
    public static function GetTextAreaValue($FIELD_NAME, $arAnswer, $arrVALUES = \false)
    {
    }
    public static function GetTextAreaField($FIELD_NAME, $WIDTH = "", $HEIGHT = "", $PARAM = "", $VALUE = "")
    {
    }
    public static function GetFileField($FIELD_NAME, $WIDTH = "", $FILE_TYPE = "IMAGE", $MAX_FILE_SIZE = 0, $VALUE = "", $PARAM_FILE = "", $PARAM_CHECKBOX = "")
    {
    }
    public static function GetDataByID($WEB_FORM_ID, &$arForm, &$arQuestions, &$arAnswers, &$arDropDown, &$arMultiSelect, $additional = "N", $active = "N")
    {
    }
    public static function __check_PushError(&$container, $MESSAGE, $key = \false)
    {
    }
    // check form field values for required fields, date format validation, file type validation, additional validators
    public static function Check($WEB_FORM_ID, $arrVALUES = \false, $RESULT_ID = \false, $CHECK_RIGHTS = "Y", $RETURN_ARRAY = "N")
    {
    }
    public static function CheckFields($arFields, $FORM_ID, $CHECK_RIGHTS = "Y")
    {
    }
    public static function Set($arFields, $FORM_ID = \false, $CHECK_RIGHTS = "Y")
    {
    }
    public static function Copy($ID, $CHECK_RIGHTS = "Y")
    {
    }
    public static function Delete($ID, $CHECK_RIGHTS = "Y")
    {
    }
    public static function Reset($ID, $CHECK_RIGHTS = "Y")
    {
    }
    public static function SetMailTemplate($WEB_FORM_ID, $ADD_NEW_TEMPLATE = "Y", $old_SID = "", $bReturnFullInfo = \false)
    {
    }
    public static function GetBySID($SID)
    {
    }
    /**
     * Check whether current field is on template
     *
     * @param string $FIELD_SID
     * @param string $tpl
     * @return bool
     */
    public static function isFieldInTemplate($FIELD_SID, $tpl)
    {
    }
    /**
     * Check whether CAPTCHA Fields is on template
     *
     * @param string $tpl
     * @return bool
     */
    public static function isCAPTCHAInTemplate($tpl)
    {
    }
    public static function GetByID_admin($WEB_FORM_ID, $current_section = \false)
    {
    }
}