<?php

namespace Bitrix\Landing\Connector;

class Mobile
{
    /**
     * Current hit is mobile.
     * @var bool
     */
    protected static $isMobileHit = false;
    /**
     * Handler on build global mobile menu.
     * @param array $menu Mobile menu.
     * @return array
     */
    public static function onMobileMenuStructureBuilt($menu)
    {
    }
    /**
     * Set current hit as mobile.
     * @return void
     */
    public static function forceMobile()
    {
    }
    /**
     * Returns true, if current destination is mobile app dir.
     * @return bool
     */
    public static function isMobileHit()
    {
    }
    /**
     * This code should execute on every mobile hit.
     * @return void
     */
    public static function prologMobileHit()
    {
    }
}