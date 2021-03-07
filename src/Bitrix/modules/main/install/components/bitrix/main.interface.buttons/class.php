<?php

class CMainInterfaceButtons extends \CBitrixComponent
{
    /**
     * First argument for CUserOptions::GetOption
     * this is Options Category
     * @var string
     */
    protected $userOptionsCategory = "ui";
    /**
     * @var int
     */
    protected $maxCounterSize = 99;
    /**
     * User options settings key
     * @var string
     */
    protected $userOptionsKey = "settings";
    /**
     * Component items settings
     * @var array
     */
    protected $settings = [];
    /**
     * User options expanded items
     * @var array
     */
    private $expandedLists = [];
    /**
     * More item class
     * @var string
     */
    protected $defaultMoreItemClass = "main-buttons-item-more-default";
    /**
     * Checks required component params
     * @return boolean
     */
    protected function checkRequiredParams()
    {
    }
    protected function setStyles()
    {
    }
    /**
     * Prepares params
     * @return object $this
     */
    protected function prepareParams()
    {
    }
    protected function prepareDisableSettings($settings = \false)
    {
    }
    /**
     * Gets user options as is
     * @return array|bool
     */
    protected function getUserOptions()
    {
    }
    /**
     * Prepares container id
     * @param string $id
     * @return string Container id
     */
    protected function prepareContainerId($id)
    {
    }
    /**
     * Prepares user options
     * @param array $userOptions
     * @param $userOptionsKey
     * @return array User options
     */
    protected function prepareUserOptions($userOptions, $userOptionsKey)
    {
    }
    /**
     * Prepares settings
     */
    protected function prepareSettings()
    {
    }
    /**
     * Gets item settings by item id
     * @param  string $id
     * @return array
     */
    protected function getItemSettingsByItemId($id)
    {
    }
    /**
     * Prepares item text value
     * @param  string $text Text string
     * @return string
     */
    protected function prepareItemText($text)
    {
    }
    /**
     * Prepares item html
     * @param  string $html
     * @return string
     */
    protected function prepareItemHtml($html)
    {
    }
    /**
     * Prepares item url
     * @param  string $url
     * @return string
     */
    protected function prepareItemUrl($url)
    {
    }
    /**
     * Prepares item class
     * @param  string $class
     * @return string
     */
    protected function prepareItemClass($class)
    {
    }
    /**
     * Prepares item id
     * @param  string $id
     * @return string
     */
    protected function prepareItemId($id)
    {
    }
    /**
     * Prepares item onclick action string
     * @param  string $onClickString
     * @return string
     */
    protected function prepareItemOnClickString($onClickString)
    {
    }
    /**
     * Prepares item counter value
     * @param  integer $counter
     * @return integer|boolean
     */
    protected function prepareItemCounter($counter)
    {
    }
    /**
     * Prepares item is locked value
     * @param  boolean $isLocked
     * @return boolean json_encode'd
     */
    protected function prepareItemIsLocked($isLocked)
    {
    }
    /**
     * Prepares item is disabled value
     * @param  boolean $isDisabled
     * @param  string $id
     * @return boolean json_encode'd
     */
    protected function prepareItemIsDisabled($isDisabled, $id)
    {
    }
    /**
     * Prepares item sublink array
     * @param  array $sublink
     * @return array|boolean return false if sublink not set
     */
    protected function prepareItemSublink($sublink)
    {
    }
    /**
     * Prepares item sort index value
     * @param  string $id
     * @param  integer $key
     * @return integer Sort index
     */
    protected function prepareItemSort($id, $key)
    {
    }
    /**
     * Prepares item is active value
     * @param array $item
     * @return boolean
     */
    protected function prepareItemIsActive($item)
    {
    }
    /**
     * Prepares item
     * @param  array $item
     * @param  integer $key
     * @return array Prepared $item
     */
    protected function prepareItem($item, $key = 0)
    {
    }
    protected function prepareItemCounterId($item)
    {
    }
    protected function prepareMoreItem($item)
    {
    }
    protected function filterItems()
    {
    }
    protected function prepareItems($items = array())
    {
    }
    /**
     * Sorts array bi sort index
     * @param  array $array
     * @return array Sorted array
     */
    protected function sortBySortIndex($array = array())
    {
    }
    protected function safeString($string)
    {
    }
    /**
     * Prepares arResult
     */
    protected function prepareResult()
    {
    }
    public function executeComponent()
    {
    }
}