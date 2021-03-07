<?php

namespace Bitrix\Sender\Internals;

/**
 * Class Queue
 *
 * @package Bitrix\Sender\Internals
 */
class Queue
{
    protected $list = [];
    protected $lastItem = null;
    protected $previousStack = [];
    protected $isLastItemRestored = false;
    protected $type = null;
    protected $id = null;
    protected $isWorkTimeCheckEnabled = false;
    protected $isUserCheckEnabled = false;
    protected $isAutoSaveEnabled = true;
    /**
     * Queue constructor.
     *
     * @param string $type Type.
     * @param string $id ID.
     * @param array $list List.
     */
    public function __construct($type, $id, array $list = [])
    {
    }
    /**
     * Save last item automatically.
     *
     * @return $this
     */
    public function disableAutoSave()
    {
    }
    /**
     * Enable work time checking.
     *
     * @return $this
     */
    public function enableWorkTimeCheck()
    {
    }
    /**
     * Return true if user checking enabled.
     *
     * @return $this
     */
    public function enableUserCheck()
    {
    }
    /**
     * Return true if work time checking enabled.
     *
     * @return bool
     */
    public function isWorkTimeCheckEnabled()
    {
    }
    /**
     * Get ID.
     *
     * @return null|string
     */
    public function getId()
    {
    }
    /**
     * Set ID.
     *
     * @param null|string $id
     * @return $this
     */
    public function setId($id)
    {
    }
    /**
     * Set list.
     *
     * @param array $list List.
     * @return $this
     */
    public function setValues(array $list)
    {
    }
    /**
     * Get list.
     *
     * @return array
     */
    public function getValues()
    {
    }
    /**
     * Remove data from DB by type and ID.
     *
     * @return $this
     */
    public function delete()
    {
    }
    /**
     * Return true if wirk time is supported.
     *
     * @return bool
     */
    public static function isSupportedWorkTime()
    {
    }
    /**
     * Get last used item from list.
     *
     * @return null|string
     */
    public function current()
    {
    }
    /**
     * Save last item to DB.
     *
     * @return $this
     */
    public function save()
    {
    }
    /**
     * Restore last item from DB.
     *
     * @return $this
     */
    public function restore()
    {
    }
    /**
     * Return next item from list.
     * Save item to DB if $isAutoSaveEnabled is true.
     * Check item as User if $isUserCheckEnabled is true.
     * Check item for work time if $isWorkTimeCheckEnabled is true.
     *
     * @return string|null
     */
    public function next()
    {
    }
    /**
     * Return previous used item.
     * Stack of previous items is limited by 3 values.
     *
     * @return string|null
     */
    public function previous()
    {
    }
    protected function setLastItem($item)
    {
    }
    protected function getStack()
    {
    }
    protected static function checkUser($userId)
    {
    }
    protected static function checkUserWorkTime($userId)
    {
    }
}