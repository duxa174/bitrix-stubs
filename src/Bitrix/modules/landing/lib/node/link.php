<?php

namespace Bitrix\Landing\Node;

class Link extends \Bitrix\Landing\Node
{
    /**
     * Get class - frontend handler.
     * @return string
     */
    public static function getHandlerJS()
    {
    }
    /**
     * Allowed or not this target.
     * @param string $target Type of target.
     * @return boolean
     */
    protected static function isAllowedTarget($target)
    {
    }
    /**
     * Allowed attrs.
     * @return array
     */
    protected static function allowedAttrs()
    {
    }
    /**
     * Detects if we are in iframe.
     * @return bool
     */
    protected static function isFrame() : bool
    {
    }
    /**
     * Save data for this node.
     * @param \Bitrix\Landing\Block $block Block instance.
     * @param string $selector Selector.
     * @param array $data Data array.
     * @return void
     */
    public static function saveNode(\Bitrix\Landing\Block $block, $selector, array $data)
    {
    }
    /**
     * Get data for this node.
     * @param \Bitrix\Landing\Block $block Block instance.
     * @param string $selector Selector.
     * @return array
     */
    public static function getNode(\Bitrix\Landing\Block $block, $selector)
    {
    }
    /**
     * This node may participate in searching.
     * @param \Bitrix\Landing\Block $block Block instance.
     * @param string $selector Selector.
     * @return array
     */
    public static function getSearchableNode($block, $selector)
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
     * @param array $field
     * @return array|null
     */
    protected static function prepareActions(array $field)
    {
    }
}