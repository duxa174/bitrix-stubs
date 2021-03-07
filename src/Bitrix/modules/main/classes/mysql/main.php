<?php

class CMain extends \CAllMain
{
    /** @deprecated */
    public static function __GetConditionFName()
    {
    }
    /** @deprecated Will be removed soon  */
    public static function FileAction()
    {
    }
    public function GetLang($cur_dir = \false, $cur_host = \false)
    {
    }
}
class CSite extends \CAllSite
{
}
class CFilterQuery extends \CAllFilterQuery
{
    public function BuildWhereClause($word)
    {
    }
}
class CLang extends \CSite
{
}