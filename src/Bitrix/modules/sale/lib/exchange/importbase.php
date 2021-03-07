<?php

namespace Bitrix\Sale\Exchange;

abstract class ImportBase
{
    const ITEM_ITEM = 'ITEM';
    const ITEM_SERVICE = 'SERVICE';
    protected $collisionErrors = false;
    protected $collisionWarnings = false;
    protected $logging = false;
    /** @var Sale\Internals\Fields */
    protected $fields;
    /** @var ISettingsImport */
    protected $settings = null;
    /** @var Exchange\ICriterion */
    protected $loadCriterion = null;
    /** @var Exchange\Internals\LoggerDiag  */
    protected $loadLogger = null;
    /** @var ICollision  */
    protected $loadCollision = null;
    /** @var  Exchange\Internals\LoggerDiag $logger */
    protected $logger = array();
    /**
     * @return string
     */
    public static function getFieldExternalId()
    {
    }
    /**
     * @return Sale\Internals\Entity $entity|ImportBase|null
     */
    public abstract function getEntity();
    /**
     * @return int
     */
    public abstract function getOwnerTypeId();
    /**
     * Adds row to entity table
     * @param array $params
     * @return Sale\Result
     */
    public abstract function add(array $params);
    /**
     * Updates row in entity table
     * @param array $params
     * @return Sale\Result
     */
    public abstract function update(array $params);
    /**
     * Deletes row in entity table by primary key
     * @param array|null $params
     * @return Sale\Result
     */
    public abstract function delete(array $params = null);
    /**
     * @param array $fields
     * @return Sale\Result
     */
    protected abstract function checkFields(array $fields);
    /**
     * @param array $fields
     * @return Sale\Result
     */
    public abstract function load(array $fields);
    /**
     * @param array $params
     * @return Sale\Result
     */
    public function import(array $params)
    {
    }
    /**
     * @return int|null
     */
    public abstract function getId();
    /**
     * @return null|string
     */
    public function getExternalId()
    {
    }
    /**
     * @return bool
     */
    public abstract function isImportable();
    /**
     * @param array $values
     * @internal param array $fields
     */
    public function setFields(array $values)
    {
    }
    /**
     * @param $name
     * @param $value
     */
    public function setField($name, $value)
    {
    }
    /**
     * @param $name
     * @return null|string
     */
    public function getField($name)
    {
    }
    /**
     * @return array
     */
    public function getFieldValues()
    {
    }
    /**
     * @param array $fields
     */
    public abstract function refreshData(array $fields);
    /**
     * @return array
     */
    protected function getFieldsTraits()
    {
    }
    public abstract function initFields();
    /**
     * @param $fields
     */
    public function initFieldsFromArray($fields)
    {
    }
    /**
     * @param ISettings $settings
     */
    public function loadSettings(\Bitrix\Sale\Exchange\ISettings $settings)
    {
    }
    /**
     * @param ICriterion $criterion
     */
    public function loadCriterion(\Bitrix\Sale\Exchange\ICriterion $criterion)
    {
    }
    /**
     * @return ICriterion
     * @internal param $typeId
     * @internal param $entity
     * @internal
     */
    public function getLoadedCriterion()
    {
    }
    /**
     * @param $entity
     * @return ICriterion
     */
    public function getCurrentCriterion($entity)
    {
    }
    /**
     * @param ICollision $collision
     */
    public function loadCollision(\Bitrix\Sale\Exchange\ICollision $collision)
    {
    }
    /**
     * @internal
     * @return ICollision
     * @throws Main\ArgumentOutOfRangeException
     */
    public function getLoadedCollision()
    {
    }
    /**
     * @return ISettings
     */
    public function getSettings()
    {
    }
    /**
     * @param $typeId
     * @return ICollision
     */
    public function getCurrentCollision($typeId)
    {
    }
    public function loadLogger(\Bitrix\Sale\Exchange\Internals\Logger $logger)
    {
    }
    public function getLoadedLogger()
    {
    }
    public function getCurrentLogger()
    {
    }
    public function initLogger()
    {
    }
    /**
     * @return Internals\LoggerDiag
     */
    public function getLogger()
    {
    }
    /**
     * @return bool
     */
    public function hasCollisionErrors()
    {
    }
    /**
     * @return bool
     */
    public function hasCollisionWarnings()
    {
    }
    public function hasLogging()
    {
    }
    /**
     * @return array|null
     * @deprecated
     */
    private static function getSaleExport()
    {
    }
    /**
     * @param Sale\Order $order
     * @return array
     * @deprecated
     */
    public static function getBusinessValue(\Bitrix\Sale\IBusinessValueProvider $entity)
    {
    }
    /**
     * @param $rekv
     * @param array $exportProfile
     * @return array
     */
    private static function modifyRekv($rekv, array $exportProfile)
    {
    }
    /**
     * @param Sale\IBusinessValueProvider $entity
     * @return Sale\Order
     */
    protected static function getBusinessValueOrderProvider(\Bitrix\Sale\IBusinessValueProvider $entity)
    {
    }
}