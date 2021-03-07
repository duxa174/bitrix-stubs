<?php

namespace Bitrix\Landing;

class Landing extends \Bitrix\Landing\Internals\BaseTable
{
    /**
     * Internal class.
     * @var string
     */
    public static $internalClass = 'LandingTable';
    /**
     * Enabled updated or not.
     * @var bool
     */
    protected static $enabledUpdate = true;
    /**
     * Check deleted pages or not.
     * @var bool
     */
    protected static $checkDelete = true;
    /**
     * Current mode is edit.
     * @var boolean
     */
    protected static $editMode = false;
    /**
     * Current mode is preview.
     * @var boolean
     */
    protected static $previewMode = false;
    /**
     * External variables of Landing.
     * @var array
     */
    protected static $variables = array();
    /**
     * Dynamic filter id.
     * @var int
     */
    protected static $dynamicFilterId = 0;
    /**
     * Dynamic element id.
     * @var int
     */
    protected static $dynamicElementId = 0;
    /**
     * Landing's site code.
     * @var string
     */
    protected static $siteCode = '';
    /**
     * Set false if landing view as area.
     * @var boolean
     */
    protected $mainInstance = true;
    /**
     * Additional data of current landing.
     * @var array
     */
    protected $metaData = array();
    /**
     * All blocks of current landing.
     * @var Block[]
     */
    protected $blocks = array();
    /**
     * Id of current landing.
     * @var int
     */
    protected $id = 0;
    /**
     * Title of current landing.
     * @var string
     */
    protected $title = '';
    /**
     * Code (part of URL) of current landing.
     * @var string
     */
    protected $code = '';
    /**
     * XMl Id of current landing.
     * @var string
     */
    protected $xmlId = '';
    /**
     * Some fields from landing's site.
     * @var array
     */
    protected $siteRow = [];
    /**
     * Site id of current landing.
     * @var int
     */
    protected $siteId = 0;
    /**
     * Site title of current landing.
     * @var string
     */
    protected $siteTitle = '';
    /**
     * Domain id.
     * @var int
     */
    protected $domainId = 0;
    /**
     * Folder id of current landing.
     * @var int
     */
    protected $folderId = 0;
    /**
     * Current template id.
     * @var int
     */
    protected $tplId = 0;
    /**
     * Current template type (site or landing).
     * @var string
     */
    protected $tplType = 'landing';
    /**
     * Active or not current landing.
     * @var boolean
     */
    protected $active = false;
    /**
     * Instance of Error.
     * @var Error
     */
    protected $error = null;
    /**
     * Current landing rights.
     * @var string[]
     */
    protected $rights = [];
    /**
     * Current version.
     * @var int
     */
    protected $version = 1;
    /**
     * Disable /preview for link in replace method.
     * @var bool
     */
    protected $disableLinkPreview = false;
    /**
     * Constructor.
     * @param int $id Landing id.
     * @param array $params Some params.
     */
    protected function __construct($id, $params = array())
    {
    }
    /**
     * Set work mode to edit.
     * @param boolean $mode Edit mode.
     * @return void
     */
    public static function setEditMode($mode = true)
    {
    }
    /**
     * Get state of edit mode.
     * @return boolean
     */
    public static function getEditMode()
    {
    }
    /**
     * Set work mode to preview.
     * @param boolean $mode Preview mode.
     * @return void
     */
    public static function setPreviewMode($mode = true)
    {
    }
    /**
     * Get state of preview mode.
     * @return boolean
     */
    public static function getPreviewMode()
    {
    }
    /**
     * Check delete pages or not.
     * @return bool
     */
    public static function checkDeleted()
    {
    }
    /**
     * Disable check delete.
     * @return void
     */
    public static function disableCheckDeleted()
    {
    }
    /**
     * Enable check delete.
     * @return void
     */
    public static function enableCheckDeleted()
    {
    }
    /**
     * Disable update.
     * @return void
     */
    public static function disableUpdate()
    {
    }
    /**
     * Enable update.
     * @return void
     */
    public static function enableUpdate()
    {
    }
    /**
     * Create current instance.
     * @param int $id Landing id.
     * @param array $params Additional params.
     * @return Landing
     */
    public static function createInstance($id, array $params = array())
    {
    }
    /**
     * Mark entity as deleted.
     * @param int $id Entity id.
     * @return \Bitrix\Main\Result
     */
    public static function markDelete($id)
    {
    }
    /**
     * Mark entity as restored.
     * @param int $id Entity id.
     * @return \Bitrix\Main\Result
     */
    public static function markUnDelete($id)
    {
    }
    /**
     * Delete landing by id and its blocks.
     * @param int $id Landing id.
     * @param bool $forceDeleted Force delete throw an errors.
     * @return \Bitrix\Main\Result
     */
    public static function delete($id, $forceDeleted = false)
    {
    }
    /**
     * Get hooks of Landing.
     * @param int $id Landing id.
     * @return array Array of Hook.
     */
    public static function getHooks($id)
    {
    }
    /**
     * Get additional fields of Landing.
     * @param int $id Landing id.
     * @return array Array of Field.
     */
    public static function getAdditionalFields($id)
    {
    }
    /**
     * Save additional fields for Landing.
     * @param int $id Landing id.
     * @param array $data Data array.
     * @return void
     */
    public static function saveAdditionalFields($id, array $data)
    {
    }
    /**
     * Set external variables of Landing.
     * @param array $vars Additional vars.
     * @return void
     */
    public static function setVariables(array $vars)
    {
    }
    /**
     * Get external variables of Landing.
     * @return array
     */
    public static function getVariables()
    {
    }
    /**
     * Set dynamic params (filter id and dynamic element id).
     * @param int $filterId Id of filter.
     * @param int $elementId Id of dynamic element id.
     * @return void
     */
    public static function setDynamicParams($filterId, $elementId)
    {
    }
    /**
     * Get dynamic filter.
     * @return array
     */
    public static function getDynamicFilter()
    {
    }
    /**
     * Get dynamic element id.
     * @return int
     */
    public static function getDynamicElementId()
    {
    }
    /**
     * Return true, if current page is dynamic detail page.
     * @return bool
     */
    public static function isDynamicDetailPage()
    {
    }
    /**
     * Get preview picture of the landing.
     * Is the preview of first block.
     * @param int $id Landing id (if null, gets for $this->id).
     * @param bool $skipCloud Skip getting picture from cloud.
     * @return string
     */
    public function getPreview($id = null, $skipCloud = false)
    {
    }
    /**
     * Get full pubic URL for this landing.
     * @param int|array $id Landing id (id array), optional.
     * @param boolean $absolute Full url.
     * @param bool $createPubPath Create pub path (checking and create).
     * @param array &$fullUrl Returns full url of landings.
     * @return string|array
     */
    public function getPublicUrl($id = false, $absolute = true, $createPubPath = false, &$fullUrl = [])
    {
    }
    /**
     * View landing in public or edit mode.
     * @param array $params Some additional params.
     * @return void
     */
    public function view(array $params = array())
    {
    }
    /**
     * Get included areas of this page.
     * @return array
     */
    public function getAreas()
    {
    }
    /**
     * Apply template for this landing.
     * @param string $content Landing content.
     * @return string
     */
    protected function applyTemplate($content = null)
    {
    }
    /**
     * Parse between-landings url in landing content.
     * @param string $content Landing content.
     * @return string
     */
    protected function parseLocalUrl($content)
    {
    }
    /**
     * Exec hooks for landing (site and landing).
     * @return void
     */
    protected function execHooks()
    {
    }
    /**
     * Exist or not landing in current instance.
     * @return boolean
     */
    public function exist()
    {
    }
    /**
     * Active or not the landing.
     * @return boolean
     */
    public function isActive()
    {
    }
    /**
     * Get id of current landing.
     * @return int
     */
    public function getId()
    {
    }
    /**
     * Get xml id of current landing.
     * @return int
     */
    public function getXmlId()
    {
    }
    /**
     * Get title of current landing.
     * @return int
     */
    public function getTitle()
    {
    }
    /**
     * Returns code of current landing.
     * @return string
     */
    public function getCode() : string
    {
    }
    /**
     * Get metadata of current landing.
     * @return array
     */
    public function getMeta()
    {
    }
    /**
     * Can current user edit this landing.
     * @return bool
     */
    public function canEdit()
    {
    }
    /**
     * Can current user publication this landing.
     * @return bool
     */
    public function canPublication()
    {
    }
    /**
     * Can current user delete this landing.
     * @return bool
     */
    public function canDelete()
    {
    }
    /**
     * Gets folder id of current landing.
     * @return int
     */
    public function getFolderId()
    {
    }
    /**
     * Get site id of current landing.
     * @return int
     */
    public function getSiteId()
    {
    }
    /**
     * Get site title of current landing.
     * @return string
     */
    public function getSiteTitle()
    {
    }
    /**
     * Gets domain id of landing site.
     * @return int
     */
    public function getDomainId()
    {
    }
    /**
     * Get site id of current landing.
     * @return int
     */
    public static function getSiteType()
    {
    }
    /**
     * Get site id of main, if exist.
     * @return string|null
     */
    public function getSmnSiteId() : ?string
    {
    }
    /**
     * Get all blocks of current landing.
     * @return Block[]
     */
    public function getBlocks()
    {
    }
    /**
     * Get the block by id of current landing.
     * @param int $id Block id.
     * @return Block
     */
    public function getBlockById($id)
    {
    }
    /**
     * Add new Block to the current landing.
     * @param \Bitrix\Landing\Block $block New block instance.
     * @return void
     */
    public function addBlockToCollection(\Bitrix\Landing\Block $block)
    {
    }
    /**
     * Get error collection
     * @return \Bitrix\Landing\Error
     */
    public function getError()
    {
    }
    /**
     * Change modified user and date for current landing.
     * @return void
     */
    public function touch()
    {
    }
    /**
     * If current version is not actual, making update.
     * @return void
     */
    public function updateVersion()
    {
    }
    /**
     * Publication current landing.
     * @return boolean
     */
    public function publication()
    {
    }
    /**
     * Cancel publication of landing.
     * @return boolean
     */
    public function unpublic()
    {
    }
    /**
     * Add new block to the landing.
     * @param string $code Code of block.
     * @param array $data Data array of block.
     * @return int|false Id of new block or false on failure.
     */
    public function addBlock($code, $data = array())
    {
    }
    /**
     * Delete one block from current landing.
     * @param int $id Block id.
     * @return boolean
     */
    public function deleteBlock($id)
    {
    }
    /**
     * Mark delete or not the block.
     * @param int $id Block id.
     * @param boolean $mark Mark.
     * @return boolean
     */
    public function markDeletedBlock($id, $mark)
    {
    }
    /**
     * Transfer one block to another landing.
     * @param int $id Block id.
     * @param int $lid Landing id.
     * @return boolean
     */
    protected function transferBlock($id, $lid)
    {
    }
    /**
     * Resort current blocks.
     * @return void
     */
    public function resortBlocks()
    {
    }
    /**
     * Sort the block on the landing.
     * @param int $id Block id.
     * @param string $action Code: up or down.
     * @return boolean
     */
    protected function sortBlock($id, $action)
    {
    }
    /**
     * Sort up the block on the landing.
     * @param int $id Block id.
     * @return boolean
     */
    public function upBlock($id)
    {
    }
    /**
     * Sort down the block on the landing.
     * @param int $id Block id.
     * @return boolean
     */
    public function downBlock($id)
    {
    }
    /**
     * Show/hide the block on the landing.
     * @param int $id Block id.
     * @param string $action Code: up or down.
     * @return boolean
     */
    protected function activateBlock($id, $action)
    {
    }
    /**
     * Activate the block on the landing.
     * @param int $id Block id.
     * @return boolean
     */
    public function showBlock($id)
    {
    }
    /**
     * Dectivate the block on the landing.
     * @param int $id Block id.
     * @return boolean
     */
    public function hideBlock($id)
    {
    }
    /**
     * Copy/move other block to this landing.
     * @param int $block Block id.
     * @param array $params Params array.
     * @return int New Block id.
     */
    protected function changeParentOfBlock($block, $params)
    {
    }
    /**
     * Copy other block to this landing.
     * @param int $id Block id (from another landing).
     * @param int $afterId Put after this block id (in this landing).
     * @return int New Block id.
     */
    public function copyBlock($id, $afterId)
    {
    }
    /**
     * Copy all blocks from another landing to this.
     * @param int $lid Landing id.
     * @param boolean $replaceLinks Replace links to the old blocks.
     * @param array &$references Array that will contain references between old and new IDs.
     * @return void
     */
    public function copyAllBlocks($lid, $replaceLinks = true, array &$references = [])
    {
    }
    /**
     * Copy landing.
     * @param int $toSiteId Site id (if you want copy in another site).
     * @param int $toFolderId Folder id (if you want copy in some folder).
     * @param bool $withoutBlocks Copy only pages, without blocks.
     * @return int New landing id.
     */
    public function copy($toSiteId = null, $toFolderId = null, $withoutBlocks = false)
    {
    }
    /**
     * Move other block to this landing.
     * @param int $id Block id (from another landing).
     * @param int $afterId Put after this block id (in this landing).
     * @return int New Block id.
     */
    public function moveBlock($id, $afterId)
    {
    }
    /**
     * Update the landing.
     * @param int $id Landing id.
     * @param array $fields Fields.
     * @return \Bitrix\Main\Result
     */
    public static function update($id, $fields = array())
    {
    }
    /**
     * Creates new page in the site by template.
     * @param int $siteId Site id.
     * @param string $code Template code.
     * @param array $fields Landing fields.
     * @return \Bitrix\Main\Entity\AddResult
     */
    public static function addByTemplate(int $siteId, string $code, array $fields = []) : \Bitrix\Main\Entity\AddResult
    {
    }
}