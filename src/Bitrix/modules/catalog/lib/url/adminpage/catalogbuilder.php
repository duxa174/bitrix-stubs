<?php

namespace Bitrix\Catalog\Url\AdminPage;

class CatalogBuilder extends \Bitrix\Iblock\Url\AdminPage\IblockBuilder
{
    public const TYPE_ID = 'CATALOG';
    protected const TYPE_WEIGHT = 200;
    public function use() : bool
    {
    }
    protected function initUrlTemplates() : void
    {
    }
}