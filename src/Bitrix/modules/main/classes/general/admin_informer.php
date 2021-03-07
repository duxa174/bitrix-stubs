<?php

class CAdminInformer
{
    private static $items = array();
    public static $alertCounter = 0;
    /**
     * Adds items to admin informer
     * @param array (
     *			string TITLE  - item title (mandatory),
     *			string HTML - item's body html (mandatory),
     *			string FOOTER - item footer,
     *			string LINK - were to go after click ,
     *			bool ALERT - true || false - increment or not notification counter in the admin panel,
     *			string COLOR green || blue || gray || custom... For custom you must define right css styles
     *						 for css class adm-informer-item-custom.
     *			int SORT - less value higher message. default value 20. if ALERT then SORT = 10
     *			)
     * @return mix items count after adding item or false
     */
    public static function AddItem($arParams)
    {
    }
    private static function PrintItemHtml($itemIdx, $bVisible)
    {
    }
    public static function PrintHtmlPublic($visCountParam = 3)
    {
    }
    public static function PrintHtml($visCountParam = 3)
    {
    }
    private static function CutErrorId($sError)
    {
    }
    private static function IsUpdateSystemNeedUpdate($sError)
    {
    }
    public static function InsertMainItems()
    {
    }
}