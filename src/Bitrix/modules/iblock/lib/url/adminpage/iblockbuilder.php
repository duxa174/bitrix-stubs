<?php

namespace Bitrix\Iblock\Url\AdminPage;

class IblockBuilder extends \Bitrix\Iblock\Url\AdminPage\BaseBuilder
{
    public const TYPE_ID = 'IBLOCK';
    protected const TYPE_WEIGHT = 100;
    protected const PATH_PREFIX = '/bitrix/admin/';
    public function use() : bool
    {
    }
    protected function initUrlTemplates() : void
    {
    }
}