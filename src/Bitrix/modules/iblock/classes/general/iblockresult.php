<?php

class CIBlockResult extends \CDBResult
{
    /** @var bool|array */
    var $arIBlockMultProps = \false;
    /** @var bool|array */
    var $arIBlockConvProps = \false;
    /** @var bool|array */
    var $arIBlockAllProps = \false;
    /** @var bool|array */
    var $arIBlockNumProps = \false;
    /** @var bool|array */
    var $arIBlockLongProps = \false;
    var $nInitialSize;
    var $table_id;
    var $strDetailUrl = \false;
    var $strSectionUrl = \false;
    var $strListUrl = \false;
    var $arSectionContext = \false;
    var $bIBlockSection = \false;
    var $nameTemplate = "";
    var $_LAST_IBLOCK_ID = "";
    var $_FILTER_IBLOCK_ID = array();
    public function __construct($res = \null)
    {
    }
    /**
     * @deprected
     *
     * @param $res
     */
    function CIBlockResult($res)
    {
    }
    function SetUrlTemplates($DetailUrl = "", $SectionUrl = "", $ListUrl = "")
    {
    }
    function SetSectionContext($arSection)
    {
    }
    function SetIBlockTag($iblock_id)
    {
    }
    function SetNameTemplate($nameTemplate)
    {
    }
    function Fetch()
    {
    }
    function GetNext($bTextHtmlAuto = \true, $use_tilda = \true)
    {
    }
    function GetNextElement($bTextHtmlAuto = \true, $use_tilda = \true)
    {
    }
    function SetTableID($table_id)
    {
    }
    function NavStart($nPageSize = 20, $bShowAll = \true, $iNumPage = \false)
    {
    }
    function GetNavPrint($title, $show_allways = \true, $StyleText = "", $template_path = \false, $arDeleteParam = \false)
    {
    }
}