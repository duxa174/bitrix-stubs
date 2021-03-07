<?php

namespace Bitrix\Landing\Hook;

abstract class Page
{
    /**
     * If true, hook work in edit mode (form settings).
     * @var boolean
     */
    protected $editMode = false;
    /**
     * Current Hook fields.
     * @var array
     */
    protected $fields = array();
    /**
     * Current Hook fields (for show in page context).
     * @var array
     */
    protected $fieldsPage = array();
    /**
     * This hook is instance for page.
     * @var bool
     */
    protected $isPage = true;
    /**
     * Custom exec method.
     * @var callable
     */
    protected $customExec = null;
    /**
     * Class constructor.
     * @param boolean $editMode Edit mode if true.
     * @param boolean $isPage Instance of page.
     */
    public function __construct($editMode = false, $isPage = true)
    {
    }
    /**
     * This hook is instance for page?
     * @return bool
     */
    public function isPage()
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
     * Description of Hook, if you want.
     * @return string
     */
    public function getDescription()
    {
    }
    /**
     * Edit mode or not.
     * @return boolean
     */
    protected function isEditMode()
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
     * Gets message for locked state.
     * @return string
     */
    public function getLockedMessage()
    {
    }
    /**
     * Get code of hook.
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Set data to the fields current hook.
     * @param array $data Data array.
     * @return void
     */
    public function setData(array $data)
    {
    }
    /**
     * Get fields of current Page Hook in Page context.
     * @return array
     */
    public function getPageFields()
    {
    }
    /**
     * Get fields of current Page Hook.
     * @return \Bitrix\Landing\Field[]
     */
    public function getFields()
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
     * Exec or not hook in intranet mode.
     * @return boolean
     */
    public function enabledInIntranetMode()
    {
    }
    /**
     * Get unique hash from hook fields.
     * @return string
     */
    public function fieldsHash()
    {
    }
    /**
     * Exist or not data in this hook.
     * @return boolean
     */
    public function dataExist()
    {
    }
    /**
     * Set custom exec method.
     * @param callable $callback Callback function.
     * @return void
     */
    public function setCustomExec(callable $callback)
    {
    }
    /**
     * If isset custom exec method.
     * @return boolean
     */
    public function issetCustomExec()
    {
    }
    /**
     * Execute custom exec method if exist.
     * @return boolean
     */
    protected function execCustom()
    {
    }
    /**
     * Map of the fields.
     * @return array
     */
    protected abstract function getMap();
    /**
     * Enable or not the hook.
     * @return boolean
     */
    public abstract function enabled();
    /**
     * Exec hook.
     * @return void
     */
    public abstract function exec();
}