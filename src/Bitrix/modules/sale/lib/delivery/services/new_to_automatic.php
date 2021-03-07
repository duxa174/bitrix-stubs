<?php

namespace Bitrix\Sale\Delivery\Services;

/**
 * Class NewToAutomatic
 * Proxy for using new delivery services with old API for back compatibility.
 * Desn't support updating, saving etc. via admin pages.
 * Just show details & calculate for public components.
 * @package Bitrix\Sale\Delivery\Services
 */
class NewToAutomatic
{
    /** @var Base $service Real service, we want to wrap.*/
    protected $service = null;
    const HANDLER = __FILE__;
    /**
     * @param Base $service
     */
    public function __construct(\Bitrix\Sale\Delivery\Services\Base $service)
    {
    }
    /**
     * @return array
     */
    public function Init()
    {
    }
    /**
     * Check if this service is compatible.
     * @param array $arOrder Order details.
     * @param array $arConfig Useless.
     * @return array with profile.
     */
    public function compatibility($arOrder, $arConfig)
    {
    }
    /**
     * @param string $profile Useless.
     * @param array $arConfig Useless.
     * @param array $arOrder Order details.
     * @param int $STEP Useless.
     * @param bool|false $TEMP Useless.
     * @return array Delivery price.
     */
    public function calculate($profile, $arConfig, $arOrder, $STEP, $TEMP = false)
    {
    }
    /**
     * Converts new service fields to old.
     * @param array $service Delivery service fields from new table.
     * @return array Service fields as it was in old API.
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function convertNewServiceToOld($service)
    {
    }
}