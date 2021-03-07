<?php

namespace Bitrix\Iblock\Copy\Implement;

class Iblock extends \Bitrix\Main\Copy\CopyImplementer
{
    const IBLOCK_COPY_ERROR = "IBLOCK_COPIER_ERROR";
    private $targetIblockTypeId = "";
    private $targetSocnetGroupId = 0;
    /**
     * @var \CCacheManager|null
     */
    protected $cacheManager;
    private $child = [];
    /**
     * Writes child implementer to the copy queue.
     *
     * @param Child $child Child implementer.
     */
    public function setChild(\Bitrix\Iblock\Copy\Implement\Children\Child $child)
    {
    }
    public function setTargetIblockTypeId($targetIblockTypeId)
    {
    }
    public function setTargetSocnetGroupId($targetSocnetGroupId)
    {
    }
    /**
     * @param mixed $cacheManager
     */
    public function setCacheManager(\CCacheManager $cacheManager) : void
    {
    }
    /**
     * Adds iblock.
     *
     * @param Container $container
     * @param array $fields
     * @return int|bool return iblock id or false.
     */
    public function add(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Returns iblock fields.
     *
     * @param Container $container
     * @param int $entityId
     * @return array $fields
     */
    public function getFields(\Bitrix\Main\Copy\Container $container, $entityId)
    {
    }
    /**
     * Preparing data before creating a new iblock.
     *
     * @param Container $container
     * @param array $fields List iblock fields.
     * @return array $fields
     */
    public function prepareFieldsToCopy(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Starts copying children entities.
     *
     * @param Container $container
     * @param int $entityId
     * @param int $copiedEntityId
     * @return Result
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function copyChildren(\Bitrix\Main\Copy\Container $container, $entityId, $copiedEntityId)
    {
    }
    protected function cleanCache(int $iblockId) : void
    {
    }
    protected function getSocnetPermission($iblockId, $socnetGroupId) : array
    {
    }
    private function getRights($iblockId, $rightMode, $socnetGroupId = 0)
    {
    }
}