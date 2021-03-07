<?php

namespace Bitrix\Sale\Archive\Recovery;

/**
 * @package Bitrix\Sale\Archive\Recovery
 */
class Restorer
{
    private $archiveId = null;
    private $version = null;
    private $dateArchived = null;
    /** @var Builder $builder */
    private $builder = null;
    private $firstVersion = 1;
    const EVENT_ON_ARCHIVE_ORDER_BEFORE_RESTORED = "OnSaleArchiveOrderBeforeRestored";
    protected function __construct($id)
    {
    }
    /**
     * @param $id
     *
     * @return Restorer|null
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function load($id)
    {
    }
    /**
     * @param $version
     *
     * @return bool
     */
    private function checkVersion($version)
    {
    }
    /**
     * @return Builder|null
     */
    private function loadBuilder()
    {
    }
    /**
     * @param Buildable $builder
     */
    private function setBuilder(\Bitrix\Sale\Archive\Recovery\Buildable $builder)
    {
    }
    /**
     * @param string $field
     *
     * @return PackedField
     */
    public function packField($field = '')
    {
    }
    /**
     * @return Builder
     */
    public function getBuilder()
    {
    }
    /**
     * @return int
     */
    public function getArchiveVersion()
    {
    }
    /**
     * @return int
     */
    public function getArchiveId()
    {
    }
    /**
     * @return Archive\Order
     */
    public function restoreOrder()
    {
    }
}