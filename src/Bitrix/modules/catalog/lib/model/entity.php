<?php

namespace Bitrix\Catalog\Model;

abstract class Entity
{
    const PREFIX_OLD = 'OLD_';
    const EVENT_ON_BUILD_CACHED_FIELD_LIST = 'OnBuildCachedFieldList';
    private static $entity = [];
    /** @var ORM\Data\DataManager Tablet object */
    private $tablet = null;
    /** @var array Table scalar fields list */
    private $tabletFields = [];
    /** @var array User fields list */
    private $tabletUserFields = [];
    /** @var null|Main\DB\Result Database result object */
    private $result = null;
    /** @var array Entity cache */
    private $cache = [];
    /** @var array internal */
    private $cacheModifyed = [];
    private $fields = [];
    private $fieldsCount = 0;
    private $aliases = [];
    private $fieldMask = [];
    private $fetchCutMask = [];
    public function __construct()
    {
    }
    /**
     * Returns entity class.
     *
     * @return Entity
     */
    public static function getEntity() : \Bitrix\Catalog\Model\Entity
    {
    }
    /**
     * Entity getList with change cache. Need for use before add/update/delete entity row.
     *
     * @param array $parameters
     * @return Entity
     * @throws Main\ArgumentException
     * @throws Main\ObjectNotFoundException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getList(array $parameters) : \Bitrix\Catalog\Model\Entity
    {
    }
    /**
     * Entity fetch. Work with entity change cache.
     *
     * @param Main\Text\Converter|null $converter
     * @return array|bool|false
     */
    public function fetch(\Bitrix\Main\Text\Converter $converter = null)
    {
    }
    /**
     * Clear all cache for entity.
     *
     * @return void
     */
    public static function clearCache() : void
    {
    }
    /**
     * Add entity item. Use instead of DataManager method.
     *
     * @param array $data
     * @return ORM\Data\AddResult
     */
    public static function add(array $data) : \Bitrix\Main\ORM\Data\AddResult
    {
    }
    /**
     * Update entity item. Use instead of DataManager method.
     *
     * @param int $id
     * @param array $data
     * @return ORM\Data\UpdateResult
     */
    public static function update($id, array $data) : \Bitrix\Main\ORM\Data\UpdateResult
    {
    }
    /**
     * Delete entity item. Use instead of DataManager method.
     *
     * @param int $id
     * @return ORM\Data\DeleteResult
     */
    public static function delete($id) : \Bitrix\Main\ORM\Data\DeleteResult
    {
    }
    /**
     * Fill item cache data. Do not use without good reason.
     *
     * @param int $id
     * @param array $row
     * @return void
     */
    public static function setCacheItem($id, array $row) : void
    {
    }
    /**
     * Returns item cache.
     *
     * @param int $id
     * @param bool $load
     * @return array|null
     */
    public static function getCacheItem($id, bool $load = false) : ?array
    {
    }
    /**
     * Clear item cache. Do not use without good reason.
     *
     * @param int $id
     * @return void
     * @noinspection PhpUnused
     */
    public static function clearCacheItem($id) : void
    {
    }
    /**
     * Returns entity tablet name.
     *
     * @return string
     */
    public static function getTabletClassName() : string
    {
    }
    /**
     * Returns fields list in cache.
     *
     * @return array
     */
    public static function getCachedFieldList() : array
    {
    }
    /**
     * Returns entity table object.
     *
     * @return ORM\Data\DataManager
     * @throws Main\ObjectNotFoundException
     */
    protected function getTablet() : \Bitrix\Main\ORM\Data\DataManager
    {
    }
    /**
     * Check and modify fields before add entity item. Need for entity automation.
     *
     * @param ORM\Data\AddResult $result
     * @param int|null $id
     * @param array &$data
     * @return void
     */
    protected static function prepareForAdd(\Bitrix\Main\ORM\Data\AddResult $result, $id, array &$data) : void
    {
    }
    /**
     * Check and modify fields before update entity item. Need for entity automation.
     *
     * @param ORM\Data\UpdateResult $result
     * @param int $id
     * @param array &$data
     * @return void
     */
    protected static function prepareForUpdate(\Bitrix\Main\ORM\Data\UpdateResult $result, $id, array &$data) : void
    {
    }
    /**
     * Delete entity item without entity events (tablet events only).
     *
     * @param int $id
     * @return ORM\Data\DeleteResult
     * @throws Main\ObjectNotFoundException
     */
    protected static function deleteNoDemands($id) : \Bitrix\Main\ORM\Data\DeleteResult
    {
    }
    /**
     * Normalize data before prepare. Convert fields list into complex structure.
     *
     * @param array &$data
     * @return void
     */
    protected static function normalize(array &$data) : void
    {
    }
    /**
     * Run core automation after add entity item.
     *
     * @param int $id
     * @param array $data
     * @return void
     */
    protected static function runAddExternalActions($id, array $data) : void
    {
    }
    /**
     * Run core automation after update entity item.
     *
     * @param int $id
     * @param array $data
     * @return void
     */
    protected static function runUpdateExternalActions($id, array $data) : void
    {
    }
    /**
     * Run core automation after delete entity item.
     *
     * @param int $id
     * @return void
     */
    protected static function runDeleteExternalActions($id) : void
    {
    }
    /**
     * Returns entity default fields list for caching.
     *
     * @return array
     */
    protected static function getDefaultCachedFieldList() : array
    {
    }
    /**
     * Init entity table object.
     * @internal
     *
     * @return void
     */
    private function initEntityTablet() : void
    {
    }
    /**
     * Build entity cache environment.
     * @internal
     *
     * @return void
     */
    private function initEntityCache() : void
    {
    }
    /**
     * Remove all entity cache.
     * @internal
     *
     * @return void
     */
    private function clearEntityCache() : void
    {
    }
    /**
     * Add cached fields to entity getList parameters.
     * @internal
     *
     * @param array $parameters
     * @return array
     */
    private function prepareTabletQueryParameters(array $parameters) : array
    {
    }
    /**
     * If exists fields alias, result row is modified.
     * @internal
     *
     * @param array &$row
     * @return void
     */
    private function replaceFieldToAlias(array &$row) : void
    {
    }
    /**
     * Filter row by tablet fields (include uf fields, if exists).
     * @internal
     *
     * @param array $fields
     * @return array
     */
    private function checkTabletWhiteList(array $fields) : array
    {
    }
    /* entity cache item tools */
    /**
     * Load cached fields for entity item.
     * @internal
     *
     * @param int $id
     * @return void
     */
    private function loadEntityCacheItem($id) : void
    {
    }
    /**
     * Internal method for get entity item cache.
     * @internal
     *
     * @param int $id
     * @param bool $load
     * @return array
     */
    private function getEntityCacheItem($id, bool $load = false)
    {
    }
    /**
     * Internal method for setting entity item cache.
     * @internal
     *
     * @param int $id
     * @param array $row
     * @param bool $replaceAliases
     * @return void
     */
    private function setEntityCacheItem($id, array $row, bool $replaceAliases = false) : void
    {
    }
    /**
     * Internal method for modify entity item cache.
     * @internal
     *
     * @param int $id
     * @param array $row
     * @return void
     */
    private function modifyEntityCacheItem($id, array $row) : void
    {
    }
    /**
     * Internal method for marked entity item cache as modified.
     * @internal
     *
     * @param int $id
     * @param bool $copy
     * @return void
     */
    private function expireEntityCacheItem($id, bool $copy = false) : void
    {
    }
    /**
     * Clear entity cache for item.
     * @internal
     *
     * @param int $id
     * @return void
     */
    private function clearEntityCacheItem($id) : void
    {
    }
    /* entity cache item tools end */
}