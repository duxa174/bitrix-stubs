<?php

namespace Bitrix\Main;

class SiteTemplate
{
    protected $id;
    public function __construct($id)
    {
    }
}
class SiteTemplateTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
}