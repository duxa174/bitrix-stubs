<?php

namespace Bitrix\Landing\Node;

class Text extends \Bitrix\Landing\Node
{
    /**
     * Get class - frontend handler.
     * @return string
     */
    public static function getHandlerJS()
    {
    }
    /**
     * Save data for this node.
     * @param \Bitrix\Landing\Block $block Block instance.
     * @param string $selector Selector.
     * @param array $data Data array.
     * @param array $additional Additional prams for save.
     * @return void
     */
    public static function saveNode(\Bitrix\Landing\Block $block, $selector, array $data, $additional = [])
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
}