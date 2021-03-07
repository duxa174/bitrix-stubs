<?php

namespace Bitrix\Landing\Binding;

abstract class Entity
{
    /**
     * Entity type 'SITE'.
     */
    const ENTITY_TYPE_SITE = 'S';
    /**
     * Entity type 'LANDING'.
     */
    const ENTITY_TYPE_LANDING = 'L';
    /**
     * Binding type, should specified in any child class.
     * @var null|string
     */
    protected static $bindingType = null;
    /**
     * Current binding id.
     * @var mixed
     */
    protected $bindingId = null;
    /**
     * Entity constructor.
     * @param mixed $code Binding code.
     */
    public function __construct($code)
    {
    }
    /**
     * Returns row id for current binding and entity.
     * @param int $entityId Entity id.
     * @param string $entityType Entity type.
     * @return int
     */
    private function getBindingId($entityId, $entityType)
    {
    }
    /**
     * Add new binding row.
     * @param int $entityId Entity id.
     * @param string $entityType Entity type.
     * @return int|null New row id.
     */
    private function addBinding($entityId, $entityType)
    {
    }
    /**
     * Delete binding row by id.
     * @param int $bindingId Row id.
     * @return void
     */
    private function deleteBindingId($bindingId)
    {
    }
    /**
     * Bind entity for current binding type/id.
     * @param int $entityId Entity id.
     * @param string $entityType Entity type.
     * @return bool Success adding.
     */
    private function bind($entityId, $entityType)
    {
    }
    /**
     * Unbind entity for current binding type/id.
     * @param int $entityId Entity id.
     * @param string $entityType Entity type.
     * @return bool Success on exist.
     */
    private function unbind($entityId, $entityType)
    {
    }
    /**
     * Local method for selecting binding entities.
     * @param mixed $bindingId Binding code.
     * @return array
     */
    private static function getBindings($bindingId)
    {
    }
    /**
     * Returns binding list of entities by specified binding type.
     * @param mixed $code Binding code.
     * @return array
     */
    public static function getList($code = null)
    {
    }
    /**
     * Bind site for current entity.
     * @param int $siteId Site id.
     * @return void
     */
    public function bindSite($siteId)
    {
    }
    /**
     * Unbind site for current entity.
     * @param int $siteId Site id.
     * @return void
     */
    public function unbindSite($siteId)
    {
    }
    /**
     * Bind landing for current entity.
     * @param int $landingId Landing id.
     * @return void
     */
    public function bindLanding($landingId)
    {
    }
    /**
     * Unbind landing for current entity.
     * @param int $landingId Landing id.
     * @return void
     */
    public function unbindLanding($landingId)
    {
    }
}