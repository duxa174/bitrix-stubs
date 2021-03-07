<?php

class CIBlockPropertyUserID
{
    const USER_TYPE = 'UserID';
    public static function GetUserTypeDescription()
    {
    }
    public static function GetAdminListViewHTML($arProperty, $value, $strHTMLControlName)
    {
    }
    //PARAMETERS:
    //$arProperty - b_iblock_property.*
    //$value - array("VALUE","DESCRIPTION") -- here comes HTML form value
    //strHTMLControlName - array("VALUE","DESCRIPTION")
    //return:
    //safe html
    public static function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
    }
    //PARAMETERS:
    //$arProperty - b_iblock_property.*
    //$value - array("VALUE",["DESCRIPTION"]) -- here comes HTML form value
    //return:
    //array of error messages
    //PARAMETERS:
    //$arProperty - b_iblock_property.*
    //$value - array("VALUE",["DESCRIPTION"]) -- here comes HTML form value
    //return:
    //DB form of the value
    public static function ConvertToDB($arProperty, $value)
    {
    }
    public static function ConvertFromDB($arProperty, $value)
    {
    }
    public static function GetSettingsHTML($arProperty, $strHTMLControlName, &$arPropertyFields)
    {
    }
    public static function AddFilterFields($arProperty, $control, &$arFilter, &$filtered)
    {
    }
    public static function GetAdminFilterHTML($property, $control)
    {
    }
    /**
     * @param array $property
     * @param array $strHTMLControlName
     * @param array &$fields
     * @return void
     */
    public static function GetUIFilterProperty($property, $strHTMLControlName, &$fields)
    {
    }
    private static function getFilterValue($control)
    {
    }
}
function FindUserIDNew($tag_name, $tag_value, $user_name = "", $form_name = "form1", $select = "none", $tag_size = "3", $tag_maxlength = "", $button_value = "...", $tag_class = "typeinput", $button_class = "tablebodybutton", $search_page = "/bitrix/admin/user_search.php")
{
}