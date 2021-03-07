<?php

namespace Bitrix\Report\VisualConstructor\Entity;

/**
 * Dashboard entity for operate with dashboard table and with it's references.
 *
 * @method addRows(DashboardRow | DashboardRow[] $row) add row/rows to this board.
 * @method deleteRows(DashboardRow | DashboardRow[] $row) delete row connection and if it is ONE-TO-MANY delete Row entity.
 * @package Bitrix\Report\VisualConstructor\Entity
 */
class Dashboard extends \Bitrix\Report\VisualConstructor\Internal\Model
{
    protected $gId;
    protected $boardKey;
    protected $userId;
    /**
     * @var string for checking this board is apply in db or not.
     */
    protected $version = '';
    /**
     * @var $rows DashboardRow[]
     */
    protected $rows;
    /**
     * @return string
     */
    public static function getTableClassName()
    {
    }
    /**
     * Returns the list of pair for mapping data and object properties.
     * Key is field in DataManager, value is object property.
     *
     * @return array
     */
    public static function getMapAttributes()
    {
    }
    /**
     * Map to set relations of this entity with other entities.
     *
     * @return array
     */
    public static function getMapReferenceAttributes()
    {
    }
    /**
     * Return board with fully loaded rows and widgets by board key and user id.
     *
     * @param string $boardKey Board key.
     * @param int $userId User id.
     * @return static
     */
    public static function getBoardWithRowsAndWidgetsByBoardKeyUserId($boardKey, $userId)
    {
    }
    /**
     * Return default dashboard with relation entities.
     * if not exist dashboard with this key, by default create new dashboard with this key, and return it.
     *
     * @param string $boardKey Board key.
     * @param bool $createIfNotExist Marker define create or not default board, when call this method.
     * @return static
     */
    public static function getDefaultBoardWithEverythingByBoardKey($boardKey, $createIfNotExist = true)
    {
    }
    /**
     * Return dashboard by board key.
     *
     * @param string $boardKey Board key.
     * @return static
     */
    public static function getDefaultBoardByBoardKey($boardKey)
    {
    }
    /**
     * Return dasboard with all nested relations for current user by board key.
     *
     * @param string $boardKey Board key.
     * @return static
     */
    public static function getCurrentUserBoardWithEverythingByBoardKey($boardKey)
    {
    }
    /**
     * Get rows collection of current board.
     *
     * @return DashboardRow[]
     */
    public function getRows()
    {
    }
    /**
     * Get Copy of Board and nested entities for createing board.
     * All priamry keys are nulled.
     *
     * @return Dashboard
     */
    public function getCopyForCurrentUser()
    {
    }
    /**
     * @return string
     */
    public function getBoardKey()
    {
    }
    /**
     * Setter vor board key.
     * @param string $boardKey Board key.
     * @return void
     */
    public function setBoardKey($boardKey)
    {
    }
    /**
     * @return int
     */
    public function getUserId()
    {
    }
    /**
     * User id setter.
     *
     * @param int $userId User id.
     * @return void
     */
    public function setUserId($userId)
    {
    }
    /**
     * Load Dashboard by board key and user id.
     *
     * @param string $boardKey Board key.
     * @param int $userId User id.
     * @return Dashboard
     */
    public static function loadByBoardKeyAndUserId($boardKey, $userId)
    {
    }
    /**
     * Load multiple boards by board key.
     *
     * @param string $boardKey Board key.
     * @return Dashboard[]
     */
    public static function loadByBoardKeyMultiple($boardKey)
    {
    }
    /**
     * @return string
     */
    public function getGId()
    {
    }
    /**
     * Gid setter.
     *
     * @param string $gId Gid for current board.
     * @return void
     */
    public function setGId($gId)
    {
    }
    /**
     * Get version.
     *
     * @return string
     */
    public function getVersion()
    {
    }
    /**
     * Setterr for version.
     *
     * @param string $version Version value.
     * @return void
     */
    public function setVersion($version)
    {
    }
}