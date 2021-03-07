<?php

/*****************************************************************
				Класс "Рекламный контракт"
*****************************************************************/
class CAdvContract extends \CAdvContract_all
{
    public static function err_mess()
    {
    }
    // получаем список контрактов
    public static function GetList(&$by, &$order, $arFilter = array(), &$is_filtered, $CHECK_RIGHTS = "Y")
    {
    }
}
/*****************************************************************
				Класс "Рекламный баннер"
*****************************************************************/
class CAdvBanner extends \CAdvBanner_all
{
    public static function err_mess()
    {
    }
    public static function Update($arFields, $BANNER_ID)
    {
    }
    public static function getCTRSQL()
    {
    }
    public static function addBindField($field, $bannerField, &$modifyStatus)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function GetList(&$by, &$order, $arFilter = array(), &$is_filtered, $CHECK_RIGHTS = "Y")
    {
    }
    // фиксируем клик по изображению баннера
    public static function Click($BANNER_ID)
    {
    }
    // формирует массив весов всех возможных баннеров для текущей страницы
    public static function GetPageWeights_RS()
    {
    }
    // периодически вызываемая функция очищающая устаревшие данные по динамике баннера по дням
    public static function CleanUpDynamics()
    {
    }
    public static function CleanUpAllDynamics()
    {
    }
    public static function GetDynamicList_SQL($strSqlSearch)
    {
    }
}
/*****************************************************************
					Класс "Тип баннера"
*****************************************************************/
class CAdvType extends \CAdvType_all
{
    public static function err_mess()
    {
    }
}