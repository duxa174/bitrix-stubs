<?php

namespace Bitrix\Seo;

class SitemapForumTable extends \Bitrix\Seo\SitemapEntityTable
{
    const ENTITY_TYPE = 'FORUM';
}
class SitemapForum
{
    public static function __callStatic($name, $arguments)
    {
    }
    protected static function checkParams($arMessage = array(), &$arTopic, &$arForum)
    {
    }
    protected static function actionUpdate($arOldTopic, $arTopic, $arForum = array())
    {
    }
    protected static function actionDelete($arTopic, $arForum = array())
    {
    }
    protected static function actionAdd($arMessage, $arTopic, $arForum = array())
    {
    }
}