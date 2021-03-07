<?php

namespace Bitrix\Main\Access\Auth;

class AccessEventHandler
{
    public static function onBeforeIBlockSectionUpdate(&$fields)
    {
    }
    public static function onBeforeIBlockSectionDelete($sectionId)
    {
    }
    public static function onBeforeIBlockSectionAdd(&$fields)
    {
    }
    private static function deleteByAccessCode(string $accessCode)
    {
    }
}