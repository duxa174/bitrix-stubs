<?php

namespace Bitrix\Iblock\Url\AdminPage;

class BuilderManager
{
    public const EVENT_ID = 'onGetUrlBuilders';
    private static $instance = null;
    protected $mode = null;
    /** @var BaseBuilder[] */
    protected $builders = null;
    /** @var array */
    protected $map = null;
    protected function __construct()
    {
    }
    public static function getInstance() : \Bitrix\Iblock\Url\AdminPage\BuilderManager
    {
    }
    public function getBuilder(string $builder = \Bitrix\Iblock\Url\AdminPage\BaseBuilder::TYPE_AUTODETECT) : ?\Bitrix\Iblock\Url\AdminPage\BaseBuilder
    {
    }
}