<?php

namespace Bitrix\Main\Web\WebPacker\Resource;

/**
 * Class Package
 *
 * @package Bitrix\Main\Web\WebPacker\Resource
 */
class Package
{
    /** @var Asset[] $list  */
    protected $list = [];
    protected $onDemand = false;
    /**
     * Get type list.
     *
     * @return array
     */
    public static function getOrderedTypeList()
    {
    }
    /**
     * Package constructor.
     *
     * @param Asset[] $assets Assets.
     */
    public function __construct(array $assets = [])
    {
    }
    /**
     * Add asset.
     *
     * @param Asset $item Item.
     * @return $this
     */
    public function addAsset(\Bitrix\Main\Web\WebPacker\Resource\Asset $item)
    {
    }
    /**
     * Get assets.
     *
     * @param string $type Type.
     * @return Asset[]
     */
    public function getAssets($type = null)
    {
    }
    /**
     * Enable loading by path for resources.
     * Default - content loading.
     *
     * @return $this
     */
    public function onDemand()
    {
    }
    /**
     * Return true if on demand.
     *
     * @return bool
     */
    public function isOnDemand()
    {
    }
    /**
     * Convert to array.
     *
     * @param string $type Type.
     * @return array
     */
    public function toArray($type = null)
    {
    }
}