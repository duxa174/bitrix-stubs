<?php

namespace Bitrix\Landing\Assets;

class PreProcessing
{
    /**
     * Processing the block on adding.
     * @param Block $block Block instance.
     * @return void
     */
    public static function blockAddProcessing(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * Processing the block on nodes updating.
     * @param Block $block Block instance.
     * @return void
     */
    public static function blockUpdateNodeProcessing(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * Processing the block on classes updating.
     * @param Block $block Block instance.
     * @return void
     */
    public static function blockUpdateClassesProcessing(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * Processing the block on undeleting.
     * @param Block $block Block instance.
     * @return void
     */
    public static function blockUndeleteProcessing(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * Processing the block on output.
     * @param Block $block Block instance.
     * @param bool $editMode Edit mode.
     * @return void
     */
    public static function blockViewProcessing(\Bitrix\Landing\Block $block, bool $editMode = false) : void
    {
    }
    /**
     * Processing the block on publication.
     * @param Block $block Block instance.
     * @return void
     */
    public static function blockPublicationProcessing(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * Processing the dynamic setting to the block.
     * @param Block $block Block instance.
     * @return void
     */
    public static function blockSetDynamicProcessing(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * Check Speed Use Lazy hook.
     * @param int $siteId Site id.
     * @return bool
     */
    protected static function isLazyloadEnable(int $siteId) : bool
    {
    }
}