<?php

namespace Bitrix\Main\Grid;

/**
 * Class Options of main.ui.grid
 * @package Bitrix\Main\Grid
 */
class Options extends \CGridOptions
{
    /** @var string */
    protected $id;
    /**
     * Options constructor.
     *
     * @param $gridId $arParams["GRID_ID"]
     * @param array $filterPresets
     */
    public function __construct($gridId, array $filterPresets = array())
    {
    }
    /**
     * Gets grid id
     * @return string $arParams["GRID_ID"]
     */
    public function getId()
    {
    }
    /**
     * Gets $USER object
     * @return \CUser
     */
    protected static function getUser()
    {
    }
    /**
     * Sets width of grid columns
     * @param number $expand
     * @param array $sizes
     */
    public function setColumnsSizes($expand, $sizes)
    {
    }
    /**
     * Sets page size
     * @param int $size
     */
    public function setPageSize($size)
    {
    }
    /**
     * Sets custom names of grid columns
     * @param array $names
     */
    public function setCustomNames($names)
    {
    }
    /**
     * Resets saved expanded ids of rows
     */
    public function resetExpandedRows()
    {
    }
    /**
     * Sets ids of expanded rows
     * @param array [$ids = array()]
     */
    public function setExpandedRows($ids = array())
    {
    }
    /**
     * Gets ids of expanded rows
     * @return array|null
     */
    public function getExpandedRows()
    {
    }
    /**
     * Sets collapsed groups
     * @param array $ids
     */
    public function setCollapsedGroups($ids = array())
    {
    }
    /**
     * Gets ids of collapsed groups
     * @return ?array
     */
    public function getCollapsedGroups()
    {
    }
    /**
     * Resets view settings by view id
     * @param string $viewId
     */
    public function resetView($viewId)
    {
    }
    /**
     * Deletes view settings by view id
     * @param string $viewId
     */
    public function deleteView($viewId)
    {
    }
    /**
     * @return array
     */
    public function getCurrentOptions()
    {
    }
    /**
     * @return array
     */
    private static function getDefaultGetSortingResult()
    {
    }
    /**
     * Gets current grid sorting
     * @param array [$default = array()] - Default value
     * @return array
     */
    public function getSorting($default = array())
    {
    }
    /**
     * Gets current user id
     * @return int
     */
    protected static function getUserId()
    {
    }
    /**
     * Checks that current user is authorized
     * @return bool
     */
    protected static function isAuthorized()
    {
    }
    /**
     * Saves all options
     */
    public function save()
    {
    }
    /**
     * Gets used columns
     * @param array $defaultColumns
     * @return array
     */
    public function getUsedColumns($defaultColumns = array())
    {
    }
    /**
     * Sets sticked columns
     * @param string[] $columns
     */
    public function setStickedColumns($columns = [])
    {
    }
    /**
     * Gets sticked columns
     * @return string[]|null
     */
    public function getStickedColumns()
    {
    }
}