<?php

namespace Bitrix\Sale\Discount\Preset;

final class Manager
{
    const DEFAULT_PRESET_DIRECTORY = '/bitrix/modules/sale/handlers/discountpreset/';
    const CATEGORY_PRODUCTS = 4;
    const CATEGORY_PAYMENT = 5;
    const CATEGORY_DELIVERY = 6;
    const CATEGORY_OTHER = 7;
    /** @var  ErrorCollection */
    protected $errorCollection;
    /** @var  Manager */
    private static $instance;
    /** @var  BasePreset[] */
    private $presetList;
    /** @var $restrictedGroupsMode bool */
    private $restrictedGroupsMode = false;
    /**
     * Returns Singleton of Manager
     * @return Manager
     */
    public static function getInstance()
    {
    }
    /**
     * Registers autoloader for presets.
     * @return void
     */
    public function registerAutoLoader()
    {
    }
    private function isAlreadyRegisteredAutoLoader()
    {
    }
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    public function enableRestrictedGroupsMode($state)
    {
    }
    public function isRestrictedGroupsModeEnabled()
    {
    }
    public function autoLoad($className)
    {
    }
    private function buildPresets()
    {
    }
    private function buildCustomPresets()
    {
    }
    private function buildDefaultPresets()
    {
    }
    /**
     * @param string $className
     * @return BasePreset
     */
    private function createPresetInstance($className)
    {
    }
    private function getClassNameFromPath($path)
    {
    }
    /**
     * Returns list of presets.
     *
     * @return BasePreset[]
     */
    public function getPresets()
    {
    }
    /**
     * Returns preset by id. Id is full class name.
     *
     * @param string $id Class name of preset
     * @return BasePreset
     */
    public function getPresetById($id)
    {
    }
    /**
     * @param $category
     * @return BasePreset[]
     */
    public function getPresetsByCategory($category)
    {
    }
    public function getCategoryList()
    {
    }
    public function getCategoryName($category)
    {
    }
    public function hasCreatedDiscounts(\Bitrix\Sale\Discount\Preset\BasePreset $preset)
    {
    }
}