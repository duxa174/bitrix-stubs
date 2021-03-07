<?php

namespace Bitrix\Main\UI;

class AdminPageNavigation extends \Bitrix\Main\UI\PageNavigation
{
    protected $pageSizes = array(10, 20, 50, 100, 200, 500);
    protected $allowAll = true;
    /**
     * @param string $id Navigation identity like "nav-cars".
     */
    public function __construct($id)
    {
    }
}