<?php

/*****************************************************************
				Класс "Рекламный контракт"
*****************************************************************/
class CAdvContract_all
{
    public static function err_mess()
    {
    }
    public static function GetNextSort()
    {
    }
    /*****************************************************************
    				Группа функций по работе с ролями на модуль
    
    	Идентификаторы ролей:
    
    	D - доступ закрыт
    	R - рекламодатель
    	T - менеджер баннеров
    	V - демо-доступ
    	W - администратор рекламы
    
    	*****************************************************************/
    public static function GetDeniedRoleID()
    {
    }
    public static function GetAdvertiserRoleID()
    {
    }
    public static function GetManagerRoleID()
    {
    }
    public static function GetDemoRoleID()
    {
    }
    public static function GetAdminRoleID()
    {
    }
    // возвращает true если заданный пользователь имеет заданную роль на модуль
    public static function HaveRole($role, $USER_ID = \false)
    {
    }
    // true - если пользователь имеет роль "рекламодатель"
    // false - в противном случае
    public static function IsAdvertiser($USER_ID = \false)
    {
    }
    // true - если пользователь имеет роль "администратор рекламы"
    // false - в противном случае
    public static function IsAdmin($USER_ID = \false)
    {
    }
    // true - если пользователь имеет роль "демо-доступ"
    // false - в противном случае
    public static function IsDemo($USER_ID = \false)
    {
    }
    // true - если пользователь имеет право на модуль "менеджер баннеров" и выше
    // false - в противном случае
    public static function IsManager($USER_ID = \false)
    {
    }
    // возвращает массив ID групп для которых задана роль
    // $role - идентификатор роли
    public static function GetGroupsByRole($role)
    {
    }
    // возвращает массив пользователей имеющих право на модуль "рекламодатель"
    public static function GetAdvertisersArray()
    {
    }
    // возвращает массив EMail адресов всех пользователей имеющих заданную роль
    public static function GetEmailArrayByRole($role)
    {
    }
    // возвращает массив EMail'ов всех пользователей имеющих роль "администратор"
    public static function GetAdminEmails()
    {
    }
    // возвращает массив EMail'ов всех пользователей имеющих роль "менеджер баннеров"
    public static function GetManagerEmails()
    {
    }
    /*****************************************************************
    			Группа функций по работе с правами на контракт
    
    	Идентификаторы прав:
    
    	VIEW - просмотр настроек контракта, просмотр всех баннеров контракта и их графиков
    	ADD - просмотр настроек контракта, управление баннерами контракта, просмотр графиков баннеров
    	EDIT - управление частью полей контракта, просмотр всех баннеров контракта и их графиков
    
    	*****************************************************************/
    // получение массива максимальных прав доступа на контракт
    public static function GetMaxPermissionsArray()
    {
    }
    // возвращает массивы EMail'ов всех пользователей имеющих доступ к заданному контракту (владельцы контракта)
    public static function GetOwnerEmails($CONTRACT_ID, &$OWNER_EMAIL, &$ADD_EMAIL, &$VIEW_EMAIL, &$EDIT_EMAIL)
    {
    }
    // получение массива прав текущего пользователя по всем контрактам
    public static function GetUserPermissions($CONTRACT_ID = 0, $USER_ID = \false)
    {
    }
    // true - если пользователь имеет доступ к контракту
    // false - в противном случае
    public static function IsOwner($CONTRACT_ID, $USER_ID = \false)
    {
    }
    // получение массива всех прав доступа по заданному контракту
    public static function GetContractPermissions($CONTRACT_ID)
    {
    }
    /*****************************************************************
    					Группа функций по отправке почты
    	*****************************************************************/
    public static function SendEMail($arContract, $mess = "")
    {
    }
    public static function SendInfo()
    {
    }
    /*****************************************************************
    				Группа функций по управлению контрактом
    	*****************************************************************/
    public static function CheckFilter($arFilter)
    {
    }
    // получаем массив времени и дней недели связанных с контрактом
    public static function GetWeekdayArray($CONTRACT_ID)
    {
    }
    // получаем массив типов связанных с контрактом
    public static function GetTypeArray($CONTRACT_ID)
    {
    }
    // получаем массив языков связанных с контрактом
    public static function GetSiteArray($CONTRACT_ID)
    {
    }
    // получаем массив страниц связанных с контрактом
    public static function GetPageArray($CONTRACT_ID, $SHOW = "SHOW")
    {
    }
    // получаем контракт по ID
    public static function GetByID($CONTRACT_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // проверка полей при модификации контракта
    public static function CheckFields($arFields, $CONTRACT_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // добавляем новый контракт или модифицируем существующий
    public static function Set($arFields, $CONTRACT_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // удаление контракта
    public static function Delete($CONTRACT_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // удаление связи контракта со страницами
    public static function DeletePageLink($CONTRACT_ID, $where = "")
    {
    }
    // удаление связи контракта с сайтами
    public static function DeleteSiteLink($CONTRACT_ID)
    {
    }
    // удаление связи контракта с типами баннеров
    public static function DeleteTypeLink($CONTRACT_ID)
    {
    }
    // удаление связи контракта с пользователями
    public static function DeleteUserLink($CONTRACT_ID, $where = "")
    {
    }
    // удаление связи контракта со временем и днями недели
    public static function DeleteWeekdayLink($CONTRACT_ID)
    {
    }
    //Получение статистики по контрактам
    public static function GetStatList($by, $order, $arFilter)
    {
    }
}
/*****************************************************************
					Класс "Рекламный баннер"
*****************************************************************/
class CAdvBanner_all
{
    public static function err_mess()
    {
    }
    public static function GetCurUri()
    {
    }
    public static function SetCurUri($uri = \false)
    {
    }
    // получим баннер по ID
    public static function GetByID($BANNER_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // копирование баннера
    public static function Copy($BANNER_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // удаление баннера
    public static function Delete($BANNER_ID, $CHECK_RIGHTS = "Y")
    {
    }
    // удаление связи баннера со временем и днями недели
    public static function DeleteWeekdayLink($BANNER_ID)
    {
    }
    // удаление связи баннера с языками
    public static function DeleteSiteLink($BANNER_ID)
    {
    }
    // удаление связи баннера со страной
    public static function DeleteCountryLink($BANNER_ID)
    {
    }
    // удаление связи баннера со рекламными кампаниями статистики
    public static function DeleteStatAdvLink($BANNER_ID)
    {
    }
    // удаление связи баннера со страницами
    public static function DeletePageLink($BANNER_ID, $where = "")
    {
    }
    public static function DeleteGroupLink($BANNER_ID)
    {
    }
    public static function GetStatusList()
    {
    }
    // получаем массив страниц связанных с баннером
    public static function GetPageArray($BANNER_ID, $SHOW = "SHOW")
    {
    }
    // получаем массив групп пользователей связанных с баннером
    public static function GetGroupArray($BANNER_ID)
    {
    }
    // получаем массив языков связанных с баннером
    public static function GetSiteArray($BANNER_ID)
    {
    }
    // получаем массив стран связанных с баннером
    public static function GetCountryArray($BANNER_ID, $WHAT = "COUNTRY")
    {
    }
    // получаем массив времени и дней недели связанных с баннером
    public static function GetWeekdayArray($BANNER_ID)
    {
    }
    // получаем массив рекламных кампаний связанных с баннером
    public static function GetStatAdvArray($BANNER_ID)
    {
    }
    // проверяем поля при модификации баннера
    public static function CheckFields($arFields, $BANNER_ID, $CHECK_RIGHTS = "Y")
    {
    }
    public static function CheckFile($arFile, $iMaxSize = 0, $iMaxWidth = 0, $iMaxHeight = 0, $access_typies = array(), $bForceMD5 = \false, $bSkipExt = \false)
    {
    }
    public static function makeFileArray($data, $del = \false, $description = \null, $options = array())
    {
    }
    private static function makeFileArrayFromId($file_id, $description = \null, $options = array())
    {
    }
    private static function makeFileArrayFromPath($file_path, $description = \null, $options = array())
    {
    }
    private static function makeFileArrayFromArray($file_array, $description = \null, $options = array())
    {
    }
    // добавляем новый баннер или модифицируем существующий
    public static function Set($arFields, $BANNER_ID, $CHECK_RIGHTS = "Y")
    {
    }
    public static function SetKeywords($keywords, $TYPE_SID = "", $LOGIC = "DESIRED")
    {
    }
    public static function GetKeywords($TYPE_SID = "", $LOGIC = "", $EXACT_MATCH = "")
    {
    }
    public static function ResetKeywords($TYPE_SID = "", $LOGIC = "", $EXACT_MATCH = "")
    {
    }
    public static function SetRequiredKeywords($keywords, $TYPE_SID = "")
    {
    }
    public static function SetDesiredKeywords($keywords, $TYPE_SID = "")
    {
    }
    public static function GetRequiredKeywords($TYPE_SID = "", $EXACT_MATCH = "")
    {
    }
    public static function GetDesiredKeywords($TYPE_SID = "", $EXACT_MATCH = "")
    {
    }
    public static function arr_comp_uniform($a, $b)
    {
    }
    // возвращает массив описывающий произвольный баннер
    public static function GetRandom($TYPE_SID)
    {
    }
    // возвращает массив, описывающий $quantity произвольных баннеров
    public static function GetRandomArray($TYPE_SID, $quantity = 1)
    {
    }
    // Uniformity coefficient
    public static function GetUniformityCoef($arBanner)
    {
    }
    public static function __innerExtractBitrixDates($arBanner)
    {
    }
    // Returns TimeDifference in seconds beetween FROM,TO Dates of a banner
    public static function CalculateTimeDiff($arBanner)
    {
    }
    // Calculate progress in 0.0<x<1.0 format of banner rotation
    public static function CalculateTimeProgress($arBanner)
    {
    }
    public static function CalculateRotationProgress($arBanner)
    {
    }
    // Calculates speed
    //function CalculateActualRotationSpeed()
    //function GetAverageRotationSpeed()
    public static function PrepareHTML($text, $arBanner)
    {
    }
    public static function GetRedirectURL($url, $arBanner)
    {
    }
    public static function ReplaceURL($text, $arBanner)
    {
    }
    // возвращает HTML баннера по массиву
    public static function GetHTML($arBanner, $bNoIndex = \false)
    {
    }
    public static function FixShowAll()
    {
    }
    // фиксируем показ баннера
    public static function FixShow($arBanner)
    {
    }
    public static function BeforeRestartBuffer()
    {
    }
    // устанавливаем cookie посетителю о просмотре баннера
    public static function SetCookie($arBanner, &$inc_banner_counter, &$inc_contract_counter)
    {
    }
    // возвращает HTML произвольного баннера по типу
    public static function Show($TYPE_SID, $HTML_BEFORE = "", $HTML_AFTER = "")
    {
    }
    public static function GetEditIcons($arBanner, $TYPE_SID = "", $arIcons = array())
    {
    }
    public static function CheckDynamicFilter($arFilter)
    {
    }
    // возвращает массив описывающий динамику баннеров
    public static function GetDynamicList($arFilter, &$arrLegend, &$is_filtered)
    {
    }
    public static function GetStatList($by, $order, $arFilter)
    {
    }
}
/*****************************************************************
					Класс "Тип баннера"
*****************************************************************/
class CAdvType_all
{
    public static function err_mess()
    {
    }
    public static function CheckFilter($arFilter)
    {
    }
    // получаем следующий порядок сортировки
    public static function GetNextSort()
    {
    }
    public static function CheckFields($arFields, $OLD_SID, $CHECK_RIGHTS)
    {
    }
    // добавляем новый тип или модифицируем существующий
    public static function Set($arFields, $OLD_SID, $CHECK_RIGHTS = "Y")
    {
    }
    // получаем тип баннера по ID
    public static function GetByID($TYPE_SID)
    {
    }
    // удаляем тип баннера
    public static function Delete($TYPE_SID, $CHECK_RIGHTS = "Y")
    {
    }
    // удаляем связь типа с контрактом
    public static function DeleteContractLink($TYPE_SID)
    {
    }
    // получаем список типов баннеров
    public static function GetList(&$by, &$order, $arFilter = array(), &$is_filtered, $CHECK_RIGHTS = "Y")
    {
    }
}
/********************************************
	совместимость со старой версией модуля
*********************************************/
class CAdvertising
{
    public static function GetAdv($TYPE_SID)
    {
    }
    public static function ClickAdv($BANNER_ID)
    {
    }
}