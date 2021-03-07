<?php

namespace Bitrix\Landing\Hook\Page;

class Cookies extends \Bitrix\Landing\Hook\Page
{
    /**
     * Cookies server is enabled.
     * @var bool
     */
    public static $enabled = false;
    /**
     * Map of the field.
     * @return array
     */
    protected function getMap() : array
    {
    }
    /**
     * Hook title.
     * @return string
     */
    public function getTitle() : string
    {
    }
    /**
     * Exec or not hook in edit mode.
     * @return boolean
     */
    public function enabledInEditMode() : bool
    {
    }
    /**
     * Get sort of block (execute order).
     * @return int
     */
    public function getSort()
    {
    }
    /**
     * Enable or not the hook.
     * @return boolean
     */
    public function enabled() : bool
    {
    }
    /**
     * Exec hook.
     * @return void
     */
    public function exec() : void
    {
    }
    /**
     * Set cookies js code on the page. Immediately if service off and after load otherwise.
     * @param string $cookieCode Cookie unique code.
     * @param string $functionBody JS function body.
     * @return void
     */
    public static function addCookieScript(string $cookieCode, string $functionBody) : void
    {
    }
    /**
     * Returns agreement id by site id.
     * @param int $siteId Site id.
     * @return int|null
     */
    public static function getAgreementIdBySiteId(int $siteId) : ?int
    {
    }
}