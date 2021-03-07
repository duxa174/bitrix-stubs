<?php

namespace Bitrix\Landing\Assets\PreProcessing;

class CustomExtensions
{
    protected const EXT_POPUP = 'landing_popup_link';
    protected const EXT_JQUERY = 'landing_jquery';
    protected const CRITICAL_EXTENSIONS = ['landing_jquery'];
    /**
     * @param Block $block Bock instance.
     * @return void
     */
    protected static function saveExtensions(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * @param Block $block Block instance.
     * @return void
     */
    public static function processing(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * Processing entire landing.
     * @param int $landingId Landing id.
     * @return void
     */
    // todo: add version landing updater
    public static function processingLanding(int $landingId) : void
    {
    }
    /**
     * Shows fonts on the block output.
     * @param Block $block Block instance.
     * @return void
     */
    public static function view(\Bitrix\Landing\Block $block) : void
    {
    }
}