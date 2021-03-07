<?php

namespace Bitrix\Sender\Connector;

/**
 * Class ResultView
 *
 * @package Bitrix\Sender\Connector
 */
class ResultView
{
    const Title = 'title';
    const Draw = 'draw';
    const Filter = 'filter';
    const FilterModifier = 'filter-modifier';
    const ColumnModifier = 'column-modifier';
    /** @var Base $connector Connector. */
    protected $connector;
    /** @var array $callbacks Callbacks. */
    protected $callbacks;
    /** @var PageNavigation $nav Page navigation. */
    protected $nav;
    /**
     * Constructor.
     *
     * @param Base $connector Connector.
     */
    public function __construct(\Bitrix\Sender\Connector\Base $connector)
    {
    }
    /**
     * Set callback.
     *
     * @param string $name Name.
     * @param callable $callable Callback.
     * @return $this
     * @throws ArgumentException
     */
    public function setCallback($name, $callable)
    {
    }
    protected function runCallback($name, array $arguments = [])
    {
    }
    /**
     * Get filter.
     *
     * @return string|null
     */
    public function getTitle()
    {
    }
    /**
     * Modify result view filter.
     *
     * @param array $filter Filter.
     * @return void
     */
    public function modifyFilter(array &$filter)
    {
    }
    /**
     * Modify result view columns.
     *
     * @param array $columns columns.
     * @return void
     */
    public function modifyColumns(array &$columns)
    {
    }
    /**
     * Set page navigation.
     *
     * @param PageNavigation|null $nav Page navigation.
     * @return $this
     */
    public function setNav(\Bitrix\Sender\UI\PageNavigation $nav = null)
    {
    }
    /**
     * Get page navigation.
     *
     * @return PageNavigation|null
     */
    public function getNav()
    {
    }
    /**
     * Has page navigation.
     *
     * @return bool
     */
    public function hasNav()
    {
    }
    /**
     * Callback on filter of result view.
     *
     * @return void
     */
    public function onFilter()
    {
    }
    /**
     * Callback on draw of result view.
     *
     * @param array $raw Raw.
     * @return void
     */
    public function onDraw(array &$raw)
    {
    }
}