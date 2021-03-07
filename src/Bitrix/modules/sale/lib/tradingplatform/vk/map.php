<?php

namespace Bitrix\Sale\TradingPlatform\Vk;

/**
 * Class Map
 * Work with map - create, update, delete entity end etc
 *
 * @package Bitrix\Sale\TradingPlatform\Vk
 */
class Map
{
    private static function getProductEntityCode($exportId)
    {
    }
    private static function getPhotoEntityCode($exportId)
    {
    }
    private static function getAlbumEntityCode($exportId)
    {
    }
    private static function getSectionsEntityCode($exportId)
    {
    }
    private static function getGeneralCodePrefix()
    {
    }
    private static function getProductEntityId($exportId)
    {
    }
    private static function getPhotoEntityId($exportId)
    {
    }
    private static function getAlbumEntityId($exportId)
    {
    }
    private static function getSectionsEntityId($exportId)
    {
    }
    //	--------------------------------------------------------
    public static function addProductMapping($values, $exportId)
    {
    }
    public static function removeProductMapping($values, $exportId, $flagKeys = '')
    {
    }
    public static function updateProductMapping($values, $exportId, $flagKeys = '')
    {
    }
    //	--------------------------------------------------------
    public static function addPhotoMapping($values, $exportId)
    {
    }
    public static function removePhotoMapping($values, $exportId, $flagKeys = '')
    {
    }
    public static function updatePhotoMapping($values, $exportId, $flagKeys = '')
    {
    }
    //	--------------------------------------------------------
    public static function addAlbumMapping($values, $exportId)
    {
    }
    public static function removeAlbumMapping($values, $exportId, $flagKeys = '')
    {
    }
    public static function updateAlbumMapping($values, $exportId, $flagKeys = '')
    {
    }
    //	--------------------------------------------------------
    public static function addSectionsMapping($values, $exportId)
    {
    }
    public static function removeSectionsMapping($values, $exportId, $flagKeys = '')
    {
    }
    public static function updateSectionsMapping($values, $exportId, $flagKeys = '')
    {
    }
    /**
     * Return ID of map entity code. If code not exist - create new item.
     *
     * @param string $mapEntityCode Map entity code
     * @return int Map entity id.
     * @throws \Bitrix\Main\SystemException
     */
    private static function getMapEntityId($mapEntityCode)
    {
    }
    /**
     * Add item for mapping by entity ID
     *
     * @param $values
     * @param $mapEntityID
     * @return bool
     * @throws \Exception
     */
    private static function addEntityMapping($values, $mapEntityID)
    {
    }
    /**
     * Update or create new entity mapping
     *
     * @param $values
     * @param $mapEntityID
     * @param $flagKeys
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    private static function updateEntityMapping($values, $mapEntityID, $flagKeys)
    {
    }
    /**
     * Remove item from mapping if exists
     *
     * @param $values
     * @param $mapEntityID
     * @param string $flagKey
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    private static function removeEntityMapping($values, $mapEntityID, $flagKey = '')
    {
    }
    /**
     * Get albums, saved in mapping by export ID
     *
     * @param $exportId
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getMappedAlbums($exportId)
    {
    }
    /**
     * Get products, saved in mapping by export ID
     *
     * @param $exportId
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getMappedProducts($exportId)
    {
    }
    /**
     * Get sections, saved in mapping by export ID
     *
     * @param $exportId
     * @param null $sectionId
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getMappedSections($exportId, $sectionId = NULL)
    {
    }
    /**
     * Matched items between site and VK.
     * Set flag edit, if item was be exported and export is agressive.
     * Remove items from mapping, if item was deleted.
     *
     * @param $data
     * @param $dataFromVk
     * @param $exportId
     * @param $type
     * @param $isAgressive
     * @return array
     * @throws SystemException
     */
    public static function checkMappingMatches(array $data, array $dataFromVk, $exportId, $type, $isAgressive)
    {
    }
    /**
     * Remove mapping of ALL types and ALL exports IDs.
     * Running where platform is deleted.
     *
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    public static function deleteAllMapping()
    {
    }
}