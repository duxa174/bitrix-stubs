<?php

namespace Bitrix\Sender\UI;

/**
 * Class TileView
 * @package Bitrix\Sender\UI
 */
class TileView
{
    const MAX_COUNT = 4;
    const COLOR_GREY = '#eef2f4';
    const SECTION_ALL = 'all';
    const SECTION_LAST = 'last';
    const SECTION_FREQ = 'freq';
    const SECTION_SYS = 'system';
    const SECTION_MY = 'my';
    /** @var array $tiles List of tiles. */
    protected $tiles = [];
    /** @var array $sections List of sections. */
    protected $sections = [];
    /**
     * Create instance.
     *
     * @return static
     */
    public static function create()
    {
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Add tile.
     *
     * @param string|null $id ID.
     * @param string $name Name.
     * @param array $data Data.
     * @param string $bgColor Background color.
     * @param string $color Color.
     *
     * @return $this
     */
    public function addTile($id = null, $name, $data = [], $bgColor = null, $color = null)
    {
    }
    /**
     * Get tile.
     *
     * @param string|null $id ID.
     * @param string $name Name.
     * @param array $data Data.
     * @param string $bgColor Background color.
     * @param string $color Color.
     *
     * @return array
     */
    public function getTile($id = null, $name, $data = [], $bgColor = null, $color = null)
    {
    }
    /**
     * Get tiles.
     *
     * @return array
     */
    public function getTiles()
    {
    }
    /**
     * Remove tiles.
     *
     * @return $this
     */
    public function removeTiles()
    {
    }
    /**
     * Add section.
     *
     * @param string $id ID.
     * @param string $name Name.
     *
     * @return $this
     */
    public function addSection($id, $name = null)
    {
    }
    /**
     * Get sections.
     *
     * @return array
     */
    public function getSections()
    {
    }
    /**
     * Remove sections.
     *
     * @return $this
     */
    public function removeSections()
    {
    }
    /**
     * Get data for view.
     *
     * @return array
     */
    public function get()
    {
    }
    protected static function prepareTileForSorting(&$tile, $section)
    {
    }
    protected static function sortTiles(&$list)
    {
    }
}