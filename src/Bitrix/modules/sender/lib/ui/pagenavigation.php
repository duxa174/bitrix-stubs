<?php

namespace Bitrix\Sender\UI;

/**
 * Class PageNavigation
 * @package Bitrix\Sender\UI
 */
class PageNavigation extends \Bitrix\Main\UI\PageNavigation
{
    protected $sessionKeyName = 'sender_page_navigation';
    /**
     * Reset session variable.
     *
     * @return void
     */
    public function resetSessionVar()
    {
    }
    protected function setSessionVar($page = 1, $allRecords = false)
    {
    }
    protected function getSessionVar()
    {
    }
    /**
     * Init from uri.
     */
    public function initFromUri()
    {
    }
}