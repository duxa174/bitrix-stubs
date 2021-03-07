<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Converters;

class Product extends \Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Converters\DataConverter
{
    protected $selectOfferProps;
    protected $sectionsList;
    private $result;
    const DESCRIPTION_LENGHT_MIN = 10;
    const DESCRIPTION_LENGHT_MAX = 3300;
    // it is not entirely accurate value, but in doc i can't find true info
    const NAME_LENGHT_MIN = 4;
    const NAME_LENGHT_MAX = 100;
    /**
     * Product constructor.
     * @param $exportId - int ID of export
     */
    public function __construct($exportId)
    {
    }
    /**
     * Main method for convert
     *
     * @param $data - Array of albums data from source.
     * @return array
     */
    public function convert($data)
    {
    }
    /**
     * Valid length of name
     *
     * @param $name
     * @param Vk\Logger|NULL $logger
     * @return string
     */
    private function validateName($name, \Bitrix\Sale\TradingPlatform\Vk\Logger $logger = NULL)
    {
    }
    /**
     * Valid length of description
     *
     * @param $name
     * @param Vk\Logger|NULL $logger
     * @return string
     */
    private function validateDescription($desc, \Bitrix\Sale\TradingPlatform\Vk\Logger $logger = NULL)
    {
    }
    /**
     * Create description of SKU depending of prices.
     * If all SKU prices equal main price - hide them.
     * If prices a different - add them to description
     *
     * @param $offers
     * @return string - string of SKUs description
     */
    private function createOffersDescriptionByPrices($offers)
    {
    }
    /**
     * Sorted different photos types by priority
     *
     * @return array - Array of sorted photos
     */
    private function sortPhotosArray()
    {
    }
    /**
     * Get description, prices and photos by SKUs
     *
     * @param $data
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    private function getItemDataOffersOffer($data)
    {
    }
    /**
     * Get main (not SKU) data.
     *
     * @param $data
     * @return array
     */
    private function getNotSkuItemData($data)
    {
    }
}