<?php

namespace Bitrix\Sender\Search;

/**
 * Class Builder
 * @package Bitrix\Sender\Search
 */
class Builder
{
    /** @var  Entity\Base $entity Entity. */
    private $entity;
    /** @var  Content $content Content. */
    private $content;
    /** @var string $fieldName Field name. */
    private $fieldName;
    /**
     * Filter constructor.
     *
     * @param Entity\Base $entity Entity.
     * @param string|null $fieldName Field name.
     */
    public function __construct(\Bitrix\Main\Entity\Base $entity, $fieldName)
    {
    }
    /**
     * Is full text index enabled.
     *
     * @return bool
     */
    public function isFullTextIndexEnabled()
    {
    }
    /**
     * Return true if entity has field.
     *
     * @return bool
     */
    public function hasField()
    {
    }
    /**
     * Get content.
     *
     * @return Content
     */
    public function getContent()
    {
    }
    /**
     * Return true if ca save.
     *
     * @return bool
     */
    public function isEnabled()
    {
    }
    /**
     * Save.
     *
     * @param int $entityId Entity ID.
     * @return bool
     */
    public function save($entityId)
    {
    }
    /**
     * Apply filter.
     *
     * @param array &$filter Filter.
     * @param string|null $searchString Search string.
     * @return bool
     */
    public function applyFilter(array &$filter, $searchString)
    {
    }
}