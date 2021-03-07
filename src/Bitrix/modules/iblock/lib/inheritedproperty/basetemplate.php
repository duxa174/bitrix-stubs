<?php

namespace Bitrix\Iblock\InheritedProperty;

class BaseTemplate
{
    /** @var \Bitrix\Iblock\InheritedProperty\BaseValues|null */
    protected $entity = null;
    /**
     * @param BaseValues $entity Sets the context for template substitution.
     */
    function __construct(\Bitrix\Iblock\InheritedProperty\BaseValues $entity)
    {
    }
    /**
     * Returns entity for which this template is executing.
     *
     * @return BaseValues|null
     */
    public function getValuesEntity()
    {
    }
    /**
     * Stores templates for entity into database.
     *
     * @param array $templates Templates to be stored to DB.
     *
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     */
    public function set(array $templates)
    {
    }
    /**
     * Returns array of templates stored for the entity from database.
     *
     * @param BaseValues $entity Entity.
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public function get(\Bitrix\Iblock\InheritedProperty\BaseValues $entity = null)
    {
    }
    /**
     * Checks if entity has any templates stored in the database.
     * Caches the result in static variable.
     *
     * @param BaseValues $entity Entity.
     *
     * @return boolean
     * @throws \Bitrix\Main\ArgumentException
     */
    public function hasTemplates(\Bitrix\Iblock\InheritedProperty\BaseValues $entity)
    {
    }
    /**
     * Deletes templates for this entity from database.
     *
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     */
    public function delete()
    {
    }
    /**
     * Returns templates for the entity and all it's parents
     * into $templates parameter.
     *
     * @param BaseValues $entity Entity.
     * @param array &$templates Templates returned.
     *
     * @return void
     */
    protected function findTemplatesRecursive(\Bitrix\Iblock\InheritedProperty\BaseValues $entity, array &$templates)
    {
    }
    /**
     * Returns templates for the  entity and all it's parents.
     * Adds INHERITED flag to each template found.
     *
     * @return array
     */
    public function findTemplates()
    {
    }
}