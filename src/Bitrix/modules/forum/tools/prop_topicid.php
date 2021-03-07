<?php

class CIBlockPropertyTopicID
{
    function GetUserTypeDescription()
    {
    }
    function GetSettingsHTML($arProperty, $strHTMLControlName, &$arPropertyFields)
    {
    }
    //PARAMETERS:
    //$arProperty - b_iblock_property.*
    //$value - array("VALUE","DESCRIPTION") -- here comes HTML form value
    //strHTMLControlName - array("VALUE","DESCRIPTION")
    //return:
    //safe html
    function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
    }
    function GetAdminListViewHTML($arProperty, $value, $strHTMLControlName)
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
    function ConvertToDB($arProperty, $value)
    {
    }
    function ConvertFromDB($arProperty, $value)
    {
    }
}
function FindTopicID($tag_name, $tag_value, $topic_name = "", $form_name = "form1", $tag_size = "3", $tag_maxlength = "", $button_value = "...", $tag_class = "typeinput", $button_class = "tablebodybutton", $search_page = "/bitrix/admin/forum_topics_search.php")
{
}