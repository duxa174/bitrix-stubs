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
    protected static $blackList = array('�����' => true, '�������' => true, '�����' => true, '�����' => true, '��������' => true, '��������' => true, '��Ѩ���' => true, '����' => true, '����������' => true, '����' => true, '�������' => true, '���' => true, '����˨����' => true, '�����' => true, '�������' => true, '������' => true, '���' => true, '���' => true, '�������' => true, '������' => true, '�����' => true);
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