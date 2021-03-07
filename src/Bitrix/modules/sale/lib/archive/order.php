<?php

namespace Bitrix\Sale\Archive;

class Order extends \Bitrix\Sale\Order
{
    protected $discountResult = array();
    protected $dateArchived = null;
    protected $archiveVersion = null;
    /**
     * Restrict recalculation discounts
     *
     * @param array $data			Order data.
     * @return Sale\Result
     */
    public function applyDiscount(array $data)
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * Set discount array for detail page.
     * 
     * @param array $resultData
     */
    public function setDiscountData($resultData = array())
    {
    }
    /**
     * @return array
     */
    public function getDiscountData()
    {
    }
    /**
     * @return Main\Type\DateTime
     */
    public function getDateArchived()
    {
    }
    /**
     * @param Main\Type\DateTime $date
     * 
     * @return void
     */
    public function setDateArchived($date)
    {
    }
    /**
     * @return int
     */
    public function getVersion()
    {
    }
    /**
     * @param int $version		Version of archived entity.
     *
     * @return void
     */
    public function setVersion($version)
    {
    }
}