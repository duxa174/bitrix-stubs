<?php

class CAdminMobileMenu
{
    const DEFAULT_ITEM_SORT = 100;
    private static $arItems = array();
    public static function addItem($arItem)
    {
    }
    public static function buildMenu($arParams)
    {
    }
    public static function getDefaultUrl($arParams)
    {
    }
}
class CAdminMobileDetailTmpl
{
    private static function getTitleHtml($title)
    {
    }
    private static function getUpperButtonsHtml($arButtons)
    {
    }
    private static function getSectionHtml($arSection)
    {
    }
    public static function getHtml($arAdminDetail)
    {
    }
}
class CAdminMobileDetail
{
    private $arDetail;
    public function setTitle($strTitle)
    {
    }
    public function addUpperButton($arButton)
    {
    }
    public function addSection($arSection)
    {
    }
    public function getHtml()
    {
    }
    public function getItem()
    {
    }
}
class CAdminMobileInterface
{
    public static function getCheckBoxesHtml($arCB, $strTitle = '', $arChecked = array(), $arParams = array())
    {
    }
}
class CMobileLazyLoad
{
    public static function getBase64Stub()
    {
    }
}
class CAdminMobileEdit
{
    private static function getCustomAttribs($arField)
    {
    }
    private static function getCommonAttribs($arField)
    {
    }
    public static function getFieldHtml($arField)
    {
    }
}