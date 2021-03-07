<?php

namespace Bitrix\Landing\Assets;

/**
 * Class Manager
 * Collect assets, sort by locations, set output in different modes (webpack or default)
 *
 * @package Bitrix\Landing
 */
class ResourceCollection
{
    protected const KEY_PATH = 'path';
    protected const KEY_TYPE = 'type';
    protected const KEY_LOCATION = 'location';
    protected const KEY_ORDER = 'order';
    /**
     * Collection of added resources. Key of array - path, values - array of parameters
     * @var array
     */
    protected $resources;
    /**
     * Order variable for save added asset position
     * @var int
     */
    protected $order;
    /**
     * Save assets string, like a <script> and <link>. May be external links, or local inline scripts e.g.
     * @var array
     */
    protected $strings = [];
    /**
     * ResourceCollection constructor.
     */
    public function __construct()
    {
    }
    /**
     * @param string $path
     * @param string $type
     * @param int $location
     */
    public function add(string $path, string $type, int $location) : void
    {
    }
    protected function isResourceAdded(string $path) : bool
    {
    }
    protected function isNeedRaiseLocation(string $path, int $location) : bool
    {
    }
    /**
     * Save asset string in collection (like a <script> or <link>)
     * @param string $string
     */
    public function addString(string $string) : void
    {
    }
    /**
     * Return added strings
     * @return array of strings
     */
    public function getStrings() : array
    {
    }
    /**
     * @param mixed $pathes
     */
    public function remove($pathes) : void
    {
    }
    protected function removeOnce(string $path) : void
    {
    }
    /**
     * Create new ResourceCollection object by location
     * @param int $location
     * @return ResourceCollection
     */
    public function getSliceByLocation(int $location) : \Bitrix\Landing\Assets\ResourceCollection
    {
    }
    /**
     * Create new ResourceCollection object by filter
     *
     * @param $field - field name
     * @param $value - value of field
     * @return ResourceCollection
     */
    protected function getSliceByFilter($field, $value) : \Bitrix\Landing\Assets\ResourceCollection
    {
    }
    /**
     * Return pathes of added resources
     * @return array
     */
    public function getPathes() : array
    {
    }
    /**
     * Sort by location and group by types
     * @return array
     */
    public function getNormalized() : array
    {
    }
    protected function sortByLocation() : void
    {
    }
    /**
     * Return true is no added resources and no added strings
     * @return bool
     */
    public function isEmpty() : bool
    {
    }
}