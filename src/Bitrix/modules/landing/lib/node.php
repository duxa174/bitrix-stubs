<?php

namespace Bitrix\Landing;

abstract class Node
{
    /**
     * Must return js class - frontend handler.
     * @return string
     */
    public static abstract function getHandlerJS();
    /**
     * Save data for this node.
     * @param \Bitrix\Landing\Block $block Block instance.
     * @param string $selector Selector.
     * @param array $data Data array.
     * @return void
     */
    public static abstract function saveNode(\Bitrix\Landing\Block $block, $selector, array $data);
    /**
     * Get data for this node.
     * @param \Bitrix\Landing\Block $block Block instance.
     * @param string $selector Selector.
     * @return array
     */
    public static abstract function getNode(\Bitrix\Landing\Block $block, $selector);
    /**
     * Prepare item-node of manifest.
     * @param \Bitrix\Landing\Block $block Block instance.
     * @param array $manifest Manifest of current node.
     * @param array $manifestFull Full manifest of block (by ref).
     * @return array|null Return null no delete from manifest.
     */
    //abstract public static function prepareManifest(\Bitrix\Landing\Block $block, array $manifest, array &$manifestFull = array());
    /**
     * If exists, means that this node may participate in searching. Must returns content for search.
     * @param Block &$block Block instance.
     * @param string $selector Selector.
     * @return array
     */
    //abstract public static function getSearchableNode($block, $selector);
    /**
     * Prepares some content for search.
     * @param string $value Text value.
     * @return string
     */
    protected static function prepareSearchContent($value)
    {
    }
    /**
     * Prepare field definition for node.
     *
     * @param array $field
     * @return array|null
     */
    public static function prepareFieldDefinition(array $field)
    {
    }
    /**
     * @param array $field
     * @return array|null
     */
    protected static function validateFieldDefinition(array $field)
    {
    }
    /**
     * @param array $row
     * @param string $name
     * @return string|null
     */
    protected static function prepareStringValue(array $row, $name)
    {
    }
}