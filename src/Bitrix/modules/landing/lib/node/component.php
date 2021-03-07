<?php

namespace Bitrix\Landing\Node;

class Component extends \Bitrix\Landing\Node
{
    /**
     * Predefined values for some dynamic props.
     * @var array
     */
    protected static $predefineForDynamicProps = array();
    /**
     * Get class - frontend handler.
     * @return string
     */
    public static function getHandlerJS()
    {
    }
    /**
     * Fill predefined values for some dynamic props.
     * @param array $additionalVals Additional vals.
     * @return void
     */
    public static function setPredefineForDynamicProps(array $additionalVals)
    {
    }
    /**
     * Save component with new params.
     * @param string $content Content of block.
     * @param string $code Code of component.
     * @param array $params Params for replace in component.
     * @return string Modified content.
     */
    protected static function saveComponent($content, $code, array $params)
    {
    }
    /**
     * Check if part of array or string is php code (for component).
     * @param mixed $code Some content.
     * @return bool
     */
    protected static function checkPhpCode($code)
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
     * Prepare item-node of manifest.
     * @param \Bitrix\Landing\Block $block Block instance.
     * @param array $manifest Manifest of current node.
     * @param array &$manifestFull Full manifest of block (by ref).
     * @return array|null Return null for delete from manifest.
     */
    public static function prepareManifest(\Bitrix\Landing\Block $block, array $manifest, array &$manifestFull = array())
    {
    }
    /**
     * Additional transform type of prop item to attr item.
     * @param array $item One attr.
     * @param mixed $prop One prop.
     * @return array
     */
    protected static function transformPropType(array $item, $prop)
    {
    }
    /**
     * Prepare prop value before output in edit form.
     * @param mixed $value Mixed value.
     * @param array $prop Array of field from manifest.
     * @return mixed
     */
    protected static function preparePropValue($value, $prop)
    {
    }
    /**
     * Additional transform prop value before saving.
     * @param mixed $value Mixed value.
     * @param array $prop Array of prop.
     * @return mixed
     */
    protected static function transformPropValue($value, $prop)
    {
    }
    /**
     * Build element/section url.
     * @param int $elementId Element / section id.
     * @param string $urlType Type of url (section / detail).
     * @deprecated since 18.4.0
     * @return string
     */
    public static function getIblockURL($elementId, $urlType)
    {
    }
    /**
     * Tmp function for gets iblock params.
     * @param string $key If isset, return value for this key.
     * @deprecated since 18.4.0
     * @return array|string
     */
    public static function getIblockParams($key = false)
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
}