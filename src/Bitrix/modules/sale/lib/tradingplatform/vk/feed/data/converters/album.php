<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Converters;

/**
 * Class Album
 * Convert album data from source.
 *
 * @package Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Converters
 */
class Album extends \Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Converters\DataConverter
{
    const TITLE_LENGHT_MAX = 128;
    private $result;
    /**
     * Album constructor.
     *
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
     * Valid length of TITLE
     *
     * @param string $title
     * @param Vk\Logger|NULL $logger
     * @return string
     */
    private function validateTitle($title, \Bitrix\Sale\TradingPlatform\Vk\Logger $logger = NULL)
    {
    }
}