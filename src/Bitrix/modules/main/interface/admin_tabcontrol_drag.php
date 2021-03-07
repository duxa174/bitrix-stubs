<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2016 Bitrix
 */
class CAdminTabControlDrag extends \CAdminTabControl
{
    protected $moduleId;
    public function __construct($name, $tabs, $moduleId = "", $bCanExpand = \true, $bDenyAutosave = \false)
    {
    }
    function BeginNextTab($options = array())
    {
    }
    function ShowTabButtons()
    {
    }
    function getCurrentTabOptionName($tabIdx)
    {
    }
    function getTabSettings($tabIdx)
    {
    }
    function getCurrentTabBlocksOrder($defaultBlocksOrder = array())
    {
    }
    function getTabHiddenBlocks($tabIdx)
    {
    }
    function DraggableBlocksStart()
    {
    }
    function DraggableBlockBegin($title, $dataId = "")
    {
    }
    function DraggableBlockEnd()
    {
    }
}
/**
 * Class CAdminDraggableBlockEngine
 * Create custom Draggable blocks for CAdminTabControlDrag
 */
class CAdminDraggableBlockEngine
{
    protected $id;
    protected $engines = array();
    protected $args = array();
    /**
     * CAdminDraggableBlockEngine constructor.
     * @param string $id identifier
     * @param array $args
     */
    public function __construct($id, $args = array())
    {
    }
    /**
     * @param array $args
     */
    public function setArgs($args = array())
    {
    }
    /**
     * @return bool
     */
    public function check()
    {
    }
    /**
     * @return bool
     */
    public function action()
    {
    }
    /**
     * @return array
     */
    public function getBlocksBrief()
    {
    }
    /**
     * @param string $blockCode
     * @param string $selectedTab
     * @return string
     */
    public function getBlockContent($blockCode, $selectedTab)
    {
    }
    /**
     * @return string
     */
    public function getScripts()
    {
    }
}