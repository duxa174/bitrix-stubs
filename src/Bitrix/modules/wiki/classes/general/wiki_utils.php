<?php

class CWikiUtils
{
    static function getRightsLinks($arPage)
    {
    }
    static function IsReadable()
    {
    }
    static function IsWriteable()
    {
    }
    static function isAllowHTML()
    {
    }
    static function IsDeleteable()
    {
    }
    static function CheckAccess($access = 'view')
    {
    }
    static function CheckServicePage($NAME, &$SERVICE_NAME)
    {
    }
    static function IsCategoryPage($NAME, &$CATEGORY_NAME)
    {
    }
    static function OnBeforeIndex($arFields)
    {
    }
    static function GetUserLogin($arUserData = array(), $nameTemplate = "")
    {
    }
    static function htmlspecialcharsback($str, $end = \true)
    {
    }
    static function htmlspecialchars_decode($str)
    {
    }
    /**
     * Sets right search path for comments, likes etc.
     * http://jabber.bx/view.php?id=25340
     * @param int $forumID - forum's ID were comments saving (for example $arParams['FORUM_ID'])
     * @param str $rightPath - wich path must leads to the comment ( for example: "/comment/#MESSAGE_ID#/" )
     * @param str $urlRewriterPath - wich path leads to curent module (complex component) ( for example: "/services/wiki.php" )
     * @return bool true|false
     */
    static function SetCommentPath($forumID, $rightPath, $urlRewriterPath)
    {
    }
    /**
     * Gets right search path for comments,
     * http://jabber.bx/view.php?id=25340
     * @param int $forumID - forum's ID were comments saving (for example $arParams['FORUM_ID'])
     * @return array( $siteID => $forumURL )
     */
    static function GetCommentPath($forumID)
    {
    }
    static function UnlocalizeCategoryName($categoryName)
    {
    }
    static function GetTagsAsLinks($arTags)
    {
    }
    static function isCategoryVirtual($name)
    {
    }
    static function isVirtualCategoryExist($categoryName)
    {
    }
}