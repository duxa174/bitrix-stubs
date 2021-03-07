<?php

namespace Bitrix\Main\Copy;

/**
 * Class stores a data that is needed in the process of copying the entity.
 *
 * @package Bitrix\Main\Copy
 */
class Container
{
    protected $entityId;
    protected $copiedEntityId;
    protected $parentId;
    protected $dictionary;
    public function __construct($entityId)
    {
    }
    /**
     * Returns the id of the parent entity that is being copied.
     *
     * @return integer
     */
    public function getEntityId()
    {
    }
    /**
     * Writes a copied entity id.
     *
     * @param integer $id A copied entity id.
     */
    public function setCopiedEntityId($id)
    {
    }
    /**
     * Returns a copied entity id.
     *
     * @return integer|null
     */
    public function getCopiedEntityId()
    {
    }
    /**
     * Writes a parent id.
     *
     * @param integer $parentId A copied entity id.
     */
    public function setParentId($parentId)
    {
    }
    /**
     * Returns a parent id.
     *
     * @return integer|null
     */
    public function getParentId()
    {
    }
    /**
     * Writes a dictionary.
     *
     * @param Dictionary $dictionary
     */
    public function setDictionary(\Bitrix\Main\Type\Dictionary $dictionary)
    {
    }
    /**
     * Returns a dictionary.
     * @return Dictionary
     */
    public function getDictionary()
    {
    }
}