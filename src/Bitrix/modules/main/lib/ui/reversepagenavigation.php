<?php

namespace Bitrix\Main\UI;

class ReversePageNavigation extends \Bitrix\Main\UI\PageNavigation
{
    /**
     * @param string $id Navigation identity like "nav-cars".
     * @param int $count Record count.
     */
    public function __construct($id, $count)
    {
    }
    /**
     * Returns number of pages.
     * @return int
     */
    public function getPageCount()
    {
    }
    /**
     * Returns the current page number.
     * @return int
     */
    public function getCurrentPage()
    {
    }
    /**
     * Returns offset of the first record of the current page.
     * @return int
     */
    public function getOffset()
    {
    }
    /**
     * Returns the number of records in the current page.
     * @return int
     */
    public function getLimit()
    {
    }
}