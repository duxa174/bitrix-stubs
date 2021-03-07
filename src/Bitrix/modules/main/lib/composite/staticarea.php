<?php

namespace Bitrix\Main\Composite;

class StaticArea
{
    private $id = null;
    private $stub = "";
    private $containerId = null;
    private $useBrowserStorage = false;
    private $useAnimation = false;
    private $autoUpdate = true;
    private $assetMode = \Bitrix\Main\Page\AssetMode::ALL;
    /**
     * @var StaticArea[]
     */
    private static $dynamicAreas = array();
    private static $curDynamicId = false;
    private static $containers = array();
    function __construct($id)
    {
    }
    public function startDynamicArea()
    {
    }
    public function finishDynamicArea()
    {
    }
    public static function addDynamicArea(\Bitrix\Main\Composite\StaticArea $area)
    {
    }
    /**
     * @return array[]
     */
    public static function getDynamicIDs()
    {
    }
    /**
     * @return StaticArea[]
     */
    public static function getDynamicAreas()
    {
    }
    /**
     * @param string $id Dynamic Area Id
     *
     * @return StaticArea
     */
    public static function getDynamicArea($id)
    {
    }
    /**
     * @return StaticArea
     */
    public static function getCurrentDynamicArea()
    {
    }
    public static function getCurrentDynamicId()
    {
    }
    public static function getContainers()
    {
    }
    public function getId()
    {
    }
    public function getAssetId()
    {
    }
    public function setStub($stub)
    {
    }
    public function getStub()
    {
    }
    public function setContainerId($containerId)
    {
    }
    public function getContainerId()
    {
    }
    public function setBrowserStorage($useBrowserStorage)
    {
    }
    public function getBrowserStorage()
    {
    }
    public function setAnimation($useAnimation)
    {
    }
    public function getAnimation()
    {
    }
    public function setAutoUpdate($autoUpdate)
    {
    }
    public function getAutoUpdate()
    {
    }
    /**
     * @param AssetMode $mode
     */
    public function setAssetMode($mode)
    {
    }
    public function getAssetMode()
    {
    }
    /**
     * Returns internal state of the object for storing in cache.
     *
     * @return array
     */
    public function getCachedData()
    {
    }
    /**
     * Apply previously saved state.
     *
     * @param $cachedData
     *
     * @return StaticArea
     */
    public static function applyCachedData($cachedData)
    {
    }
}