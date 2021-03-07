<?php

namespace Bitrix\UI\Toolbar;

class Toolbar
{
    private $id;
    private $filter;
    private $titleMinWidth;
    private $titleMaxWidth;
    private $favoriteStar = true;
    /**
     * @param Button[] $buttons
     */
    private $afterTitleButtons = [];
    /**
     * @param Button[] $buttons
     */
    private $buttons = [];
    private $filterButtons = [];
    private $options;
    /**
     * Toolbar constructor.
     *
     * @param string $id
     * @param array $options
     */
    public function __construct($id, $options)
    {
    }
    /**
     * @return string
     */
    public function getId()
    {
    }
    /**
     * @param array|Button $button
     * @param string $location
     * @see ButtonLocation
     *
     * @throws ArgumentTypeException
     */
    public function addButton($button, $location = \Bitrix\UI\Toolbar\ButtonLocation::RIGHT)
    {
    }
    public function deleteButtons(\Closure $closure)
    {
    }
    public function shuffleButtons(\Closure $closure, $buttonLocation)
    {
    }
    public function hasFavoriteStar()
    {
    }
    public function addFavoriteStar()
    {
    }
    public function deleteFavoriteStar()
    {
    }
    public function addFilter(array $filterOptions = [])
    {
    }
    public function getFilter()
    {
    }
    /**
     * @return BaseButton[]
     */
    public function getButtons()
    {
    }
    public function renderAfterTitleButtons()
    {
    }
    public function renderRightButtons()
    {
    }
    public function renderAfterFilterButtons()
    {
    }
    /**
     * @deprecated
     * @return string
     */
    public function renderFilterRightButtons()
    {
    }
    protected function processButtonRender(\Bitrix\UI\Buttons\Button $button)
    {
    }
    public function setTitleMinWidth($width)
    {
    }
    public function getTitleMinWidth()
    {
    }
    public function setTitleMaxWidth($width)
    {
    }
    public function getTitleMaxWidth()
    {
    }
}