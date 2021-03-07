<?php

namespace Bitrix\Sale\Location\Search;

final class WordStatTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function cleanUp()
    {
    }
    const STEP_SIZE = 100;
    // tmp
    protected static $blackList = array('ÐÀÉÎÍ' => true, 'ÎÁËÀÑÒÜ' => true, 'ÓËÈÖÀ' => true, 'ÒÓÏÈÊ' => true, 'ÃÅÍÅÐÀËÀ' => true, 'ÏÅÐÅÓËÎÊ' => true, 'ÏÎÑ¨ËÎÊ' => true, 'ÑÅËÎ' => true, 'ÃÎÐÎÄÑÊÎÃÎ' => true, 'ÒÈÏÀ' => true, 'ÃÎÐÎÄÎÊ' => true, 'ÑÍÒ' => true, 'ÍÀÑÅË¨ÍÍÛÉ' => true, 'ÏÓÍÊÒ' => true, 'ÄÅÐÅÂÍß' => true, 'ÄÀ×ÍÛÉ' => true, 'ÄÍÏ' => true, 'ÄÍÒ' => true, 'ÏËÎÙÀÄÜ' => true, 'ÏÐÎÅÇÄ' => true, 'ÀËËÅß' => true);
    public static function parseQuery($query)
    {
    }
    public static function reInitData()
    {
    }
    public static function getMap()
    {
    }
}