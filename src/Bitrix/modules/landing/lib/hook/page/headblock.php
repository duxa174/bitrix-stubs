<?php

namespace Bitrix\Landing\Hook\Page;

class HeadBlock extends \Bitrix\Landing\Hook\Page
{
    /**
     * Last inserted code to the site or to the page.
     * @var string
     */
    protected static $lastInsertedCode = null;
    /**
     * Map of the field.
     * @return array
     */
    protected function getMap()
    {
    }
    /**
     * Gets last inserted code.
     * @return string
     */
    public static function getLastInsertedCode()
    {
    }
    /**
     * Enable only in high plan or not.
     * @return boolean
     */
    public function isFree()
    {
    }
    /**
     * Locked or not current hook in free plan.
     * @return bool
     */
    public function isLocked()
    {
    }
    /**
     * Locked or not current hook in free plan.
     * @return bool
     */
    public static function isLockedFeature()
    {
    }
    /**
     * Title of Hook, if you want.
     * @return string
     */
    public function getTitle()
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
    public function enabled()
    {
    }
    /**
     * Exec or not hook in edit mode.
     * @return boolean
     */
    public function enabledInEditMode()
    {
    }
    /**
     * Exec hook.
     * @return void
     */
    public function exec()
    {
    }
}