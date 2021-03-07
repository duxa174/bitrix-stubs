<?php

namespace Bitrix\Seo\LeadAds;

/**
 * Class Mapper.
 * Form fields Mapper from crm to ads, ads to crm.
 *
 * @package Bitrix\Seo\LeadAds
 */
class Mapper
{
    protected $map = [];
    public function __construct(array $items = [])
    {
    }
    /**
     * Get crm name.
     *
     * @param string $adsName Ads name.
     * @return string|null
     */
    public function getCrmName($adsName)
    {
    }
    /**
     * Get ads name.
     *
     * @param string $crmName Crm name.
     * @return string|null
     */
    public function getAdsName($crmName)
    {
    }
    /**
     * Set map items.
     *
     * @param array $items Map items.
     * @return $this
     * @throws ArgumentNullException
     */
    public function setItems(array $items = [])
    {
    }
    /**
     * Add map item
     *
     * @param string $crmName Crm name.
     * @param string $adsName Ads name.
     * @return $this
     * @throws ArgumentNullException
     */
    public function addItem($crmName, $adsName)
    {
    }
    protected function getMapItem($crmName = null, $adsName = null)
    {
    }
}