<?php

namespace Bitrix\Landing;

class Block extends \Bitrix\Landing\Internals\BaseTable
{
    /**
     * Dir of repository of blocks.
     */
    const BLOCKS_DIR = 'blocks';
    /**
     * Tag for managed cache.
     */
    const BLOCKS_TAG = 'landing_blocks';
    /**
     * Block preview filename.
     */
    const PREVIEW_FILE_NAME = 'preview.jpg';
    /**
     * Local css filename.
     */
    const CSS_FILE_NAME = 'style.css';
    /**
     * Local js filename.
     */
    const JS_FILE_NAME = 'script.js';
    /**
     * Pattern for repo code.
     */
    const REPO_MASK = '/^repo_([\\d]+)$/';
    /**
     * Life time for mark new block.
     */
    const NEW_BLOCK_LT = 1209600;
    //86400 * 14
    /**
     * Access level: any access denied to all blocks.
     */
    const ACCESS_A = 'A';
    /**
     * Access level: access denied.
     */
    const ACCESS_D = 'D';
    /**
     * Access level: edit only design.
     */
    const ACCESS_V = 'V';
    /**
     * Access level: edit content and design (not delete).
     */
    const ACCESS_W = 'W';
    /**
     * Access level: full access.
     */
    const ACCESS_X = 'X';
    /**
     * Symbolic code of card.
     */
    const CARD_SYM_CODE = 'card';
    /**
     * Symbolic code of preset.
     */
    const PRESET_SYM_CODE = 'preset';
    /**
     * Internal class.
     * @var string
     */
    public static $internalClass = 'BlockTable';
    /**
     * Id of current block.
     * @var int
     */
    protected $id = 0;
    /**
     * Id of landing.
     * @var int
     */
    protected $lid = 0;
    /**
     * Id of site of landing.
     * @var int
     */
    protected $siteId = 0;
    /**
     * Sort of current block.
     * @var int
     */
    protected $sort = 0;
    /**
     * Is the rest block if > 0.
     * @var int
     */
    protected $repoId = 0;
    /**
     * REST repository some info.
     * @var array
     */
    protected $repoInfo = [];
    /**
     * Code of current block.
     * @var string
     */
    protected $code = '';
    /**
     * Custom anchor of the block.
     * @var string
     */
    protected $anchor = '';
    /**
     * Actually content of current block.
     * @var string
     */
    protected $content = '';
    /**
     * Required user action just added.
     * @var array
     */
    protected $runtimeRequiredUserAction = [];
    /**
     * Access for this block.
     * @see ACCESS_* constants.
     * @var string
     */
    protected $access = 'X';
    /**
     * Additional data of current block.
     * @var array
     */
    protected $metaData = array();
    /**
     * Additional block assets.
     * @var array
     */
    protected $assets = array();
    /**
     * Active or not current block.
     * @var boolean
     */
    protected $active = false;
    /**
     * Active or not page of current block.
     * @var boolean
     */
    protected $landingActive = false;
    /**
     * Deleted or not current block.
     * @var boolean
     */
    protected $deleted = false;
    /**
     * Public or not current block.
     * @var boolean
     */
    protected $public = false;
    /**
     * Public or not current block.
     * @var boolean
     */
    protected $block = false;
    /**
     * Document root.
     * @var string
     */
    protected $docRoot = '';
    /**
     * Instance of Error.
     * @var Error
     */
    protected $error = null;
    /**
     * Dynamic params.
     * @var array
     */
    protected $dynamicParams = [];
    /**
     * Allowed extensions for developers.
     * @var array
     */
    protected $allowedExtensions = ['landing_form', 'landing_carousel', 'landing_google_maps_new', 'landing_countdown', 'landing_gallery_cards', 'landing_chat'];
    /**
     * Constructor.
     * @param int $id Block id.
     * @param array $data Data row from BlockTable (by default get from DB).
     * @param array $params Some additional params.
     */
    public function __construct($id, $data = [], array $params = [])
    {
    }
    /**
     * Fill landing with blocks.
     * @param Landing $landing Landing instance.
     * @param int $limit Limit count for blocks.
     * @param array $params Additional params.
     * @return boolean
     */
    public static function fillLanding(\Bitrix\Landing\Landing $landing, $limit = 0, array $params = array())
    {
    }
    /**
     * Create copy of blocks for draft version.
     * @param \Bitrix\Landing\Landing $landing Landing instance.
     * @return void
     */
    public static function cloneForEdit(\Bitrix\Landing\Landing $landing)
    {
    }
    /**
     * Publication blocks for landing.
     * @param \Bitrix\Landing\Landing $landing Landing instance.
     * @return void
     */
    public static function publicationBlocks(\Bitrix\Landing\Landing $landing)
    {
    }
    /**
     * Recognize landing id by block id.
     * @param int|array $id Block id (id array).
     * @return int|array|false
     */
    public static function getLandingIdByBlockId($id)
    {
    }
    /**
     * Gets row by block id.
     * @param int|array $id Block id (id array).
     * @param array $select Select row.
     * @deprecated since 18.5.0
     * @return int|array|false
     */
    public static function getLandingRowByBlockId($id, array $select = array('ID'))
    {
    }
    /**
     * Gets landing row by block id.
     * @param int|array $id Block id (id array).
     * @param array $select Select row.
     * @return int|array|false
     */
    public static function getRowByBlockId($id, array $select = array('ID'))
    {
    }
    /**
     * Get content from repository by code.
     * @param string $code Block code.
     * @param string $namespace Namespace (optional).
     * @return string
     */
    public static function getContentFromRepository($code, $namespace = null)
    {
    }
    /**
     * Create instance by string code.
     * @param Landing $landing Landing - owner for new block.
     * @param string $code Code of block from repository.
     * @param array $data Additional data array.
     * @return Block|false
     */
    public static function createFromRepository(\Bitrix\Landing\Landing $landing, $code, $data = array())
    {
    }
    /**
     * New or not the block.
     * @param string $block Block code.
     * @return boolean
     */
    protected static function isNewBlock($block)
    {
    }
    /**
     * Gets general paths, where blocks can be found.
     * @return array
     */
    protected static function getGeneralPaths()
    {
    }
    /**
     * Clear cache repository.
     * @return void
     */
    public static function clearRepositoryCache()
    {
    }
    /**
     * Gets all available namespaces.
     * @return array
     */
    protected static function getNamespaces()
    {
    }
    /**
     * Get blocks from repository.
     * @param bool $withManifest Get repo with manifest files of blocks.
     * @return array
     */
    public static function getRepository($withManifest = false)
    {
    }
    /**
     * Get last used blocks by current user.
     * @param int $count Count of blocks.
     * @return array
     */
    public static function getLastUsed($count = 10)
    {
    }
    /**
     * Returns blocks style manifests from repository.
     * @return array
     */
    public static function getStyle() : array
    {
    }
    /**
     * Returns blocks semantic manifests from repository.
     * @return array
     */
    public static function getSemantic() : array
    {
    }
    /**
     * Returns blocks style manifest from repository.
     * @return array
     */
    protected static function getSpecialManifest(string $type) : array
    {
    }
    /**
     * Get block content array.
     * @param int $id Block id.
     * @param boolean $editMode Edit mode if true.
     * @param array $params Some params.
     * @return array
     */
    public static function getBlockContent($id, $editMode = false, array $params = array())
    {
    }
    /**
     * Get block anchor.
     * @param int $id Block id.
     * @return string
     */
    public static function getAnchor($id)
    {
    }
    /**
     * Get namespace for block.
     * @param string $code Code of block.
     * @return string
     */
    protected static function getBlockNamespace($code)
    {
    }
    /**
     * Get local path for block.
     * @param string $code Code of block.
     * @param string $namespace Namespace (optional).
     * @return string
     */
    protected static function getBlockPath($code, $namespace = null)
    {
    }
    /**
     * Exist or not block in current instance.
     * @return boolean
     */
    public function exist()
    {
    }
    /**
     * Get id of the block.
     * @return int
     */
    public function getId()
    {
    }
    /**
     * Gets landing id.
     * @return int
     */
    public function getLandingId()
    {
    }
    /**
     * Gets site id (of landing).
     * @return int
     */
    public function getSiteId()
    {
    }
    /**
     * Get code of the block.
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Get anchor of the block.
     * @return string
     */
    public function getLocalAnchor()
    {
    }
    /**
     * Get content of the block.
     * @return string
     */
    public function getContent()
    {
    }
    /**
     * Reset content of current block.
     * @return void
     */
    public function resetContent()
    {
    }
    /**
     * Active or not the block.
     * @return boolean
     */
    public function isActive()
    {
    }
    /**
     * Public or not the block.
     * @return boolean
     */
    public function isPublic()
    {
    }
    /**
     * Get current access.
     * @return string
     */
    public function getAccess()
    {
    }
    /**
     * Set new access to the block.
     * @param string $letter Access letter.
     * @return void
     */
    public function setAccess($letter)
    {
    }
    /**
     * Set active to the block.
     * @param boolean $active Bool: true or false.
     * @return boolean
     */
    public function setActive($active)
    {
    }
    /**
     * Get repo id, if block from repo.
     * @return int
     */
    public function getRepoId()
    {
    }
    /**
     * Gets site row.
     * @return array
     */
    public function getSite()
    {
    }
    /**
     * Get preview picture of the block.
     * @return string
     */
    public function getPreview()
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
     * Get class handler for type of node.
     *
     * @deprecated
     * @see Node\Type::getClassName
     *
     * @param string $type Type.
     * @return string
     */
    protected function getTypeClass($type)
    {
    }
    /**
     * Get manifest array from block.
     * @param bool $extended Get extended manifest.
     * @param bool $missCache Don't save in static cache.
     * @param array $params Additional params.
     * @return array
     */
    public function getManifest($extended = false, $missCache = false, array $params = array())
    {
    }
    /**
     * Localize manifest.
     * @param array $manifest Manifest array.
     * @param array $lang Lang array.
     * @return void
     */
    protected function localizationManifest(array &$manifest, array $lang)
    {
    }
    /**
     * Get manifest array as is from block.
     * @param string $code Code name, format "namespace:code" or just "code".
     * @return array
     */
    public static function getManifestFile($code)
    {
    }
    /**
     * Get some assets of block.
     * @param string $type What return: css, js, ext, class.
     * @return array
     */
    public function getAsset($type = null)
    {
    }
    /**
     * Get css file path, if exists.
     * @return array
     */
    public function getCSS()
    {
    }
    /**
     * Get js file path, if exists.
     * @return array
     */
    public function getJS()
    {
    }
    /**
     * Get extensions.
     * @return array
     */
    public function getExt()
    {
    }
    /**
     * Get executable classes.
     * @return array
     */
    public function getClass()
    {
    }
    /**
     * Include class of block.
     * @param string $path Path of block class.
     * @return \Bitrix\Landing\LandingBlock
     */
    protected function includeBlockClass($path)
    {
    }
    /**
     * Gets message string.
     * @param array $params Component's params.
     * @param string $template Template name.
     * @return string
     */
    protected static function getMessageBlock($params, $template = '')
    {
    }
    /**
     * Out the block.
     * @param boolean $edit Out block in edit mode.
     * @param Landing|null $landing Landing of this block.
     * @param array $params Some params.
     * @return void
     */
    public function view($edit = false, \Bitrix\Landing\Landing $landing = null, array $params = array())
    {
    }
    /**
     * Save assets to the block.
     * @param array $assets New assets array.
     * @return void
     */
    public function saveAssets(array $assets) : void
    {
    }
    /**
     * Returns the block assets.
     * @return array
     */
    public function getAssets() : array
    {
    }
    /**
     * Set new content.
     * @param string $content New content.
     * @return void
     */
    public function saveContent($content)
    {
    }
    /**
     * Save current block in DB.
     * @param array $additionalFields Additional fields for saving.
     * @return boolean
     */
    public function save(array $additionalFields = [])
    {
    }
    /**
     * Change landing of current block.
     * @param int $lid New landing id.
     * @return boolean
     *
     */
    public function changeLanding($lid)
    {
    }
    /**
     * Delete current block.
     * @return boolean
     */
    public function unlink()
    {
    }
    /**
     * Mark delete or not current block.
     * @param boolean $mark Mark.
     * @return void
     */
    public function markDeleted($mark)
    {
    }
    /**
     * Set new sort to current block.
     * @param int $sort New sort.
     * @return void
     */
    public function setSort($sort)
    {
    }
    /**
     * Set new anchor to current block.
     * @param string $anchor New anchor.
     * @return boolean
     */
    public function setAnchor($anchor)
    {
    }
    /**
     * Save new sort to current block to DB.
     * @param int $sort New sort.
     * @return void
     */
    public function saveSort($sort)
    {
    }
    /**
     * Get sort of current block.
     * @return int
     */
    public function getSort()
    {
    }
    /**
     * Gets dynamic source params.
     * @param int $id Not current block id.
     * @return array
     */
    public function getDynamicParams($id = null)
    {
    }
    /**
     * @param array $data
     * @param array $replace
     * @return array
     */
    private function dynamicLinkReplacer(array $data, array $replace)
    {
    }
    /**
     * Save dynamic params for the block.
     * @param array $sourceParams Source params.
     * @param array $params Additional params.
     * @return void
     */
    public function saveDynamicParams(array $sourceParams = [], array $params = [])
    {
    }
    /**
     * Build dynamic content for the block.
     * @param bool $edit Edit mode.
     * @return void
     */
    protected function setDynamic($edit)
    {
    }
    /**
     * Make block not dynamic.
     * @return void
     */
    public function clearDynamic()
    {
    }
    /**
     * Gets only runtime required actions.
     * @return array
     */
    public function getRuntimeRequiredUserAction()
    {
    }
    /**
     * Load current content in DOM html structure.
     * @param bool $clear CLear static cache.
     * @return DOM\Document
     */
    public function getDom($clear = false)
    {
    }
    /**
     * Get metadata of current block.
     * @return array
     */
    public function getMeta()
    {
    }
    /**
     * Adjust cards count by selector.
     * @param string $selector Selector.
     * @param int $count Needed cards count.
     * @param bool &$changed Changed.
     * @return boolean Success or failure.
     */
    public function adjustCards($selector, $count, &$changed = false)
    {
    }
    /**
     * Clone one card in block by selector.
     * @param string $selector Selector.
     * @param int $position Card position.
     * @param string $content New content for cloned card.
     * @return boolean Success or failure.
     */
    public function cloneCard($selector, $position, $content = '')
    {
    }
    /**
     * Set card content from block by selector.
     * @param string $selector Selector.
     * @param int $position Card position.
     * @param string $content New content.
     * @return boolean Success or failure.
     */
    public function setCardContent($selector, $position, $content)
    {
    }
    /**
     * Gets card content from block by selector.
     * @param string $selector Selector.
     * @param int $position Card position.
     * @return string
     */
    public function getCardContent($selector, $position)
    {
    }
    /**
     * Gets count of cards from block by selector.
     * @param string $selector Selector.
     * @return int
     */
    public function getCardCount($selector)
    {
    }
    /**
     * Remove one card from block by selector.
     * @param string $selector Selector.
     * @param int $position Card position.
     * @return boolean Success or failure.
     */
    public function removeCard($selector, $position)
    {
    }
    /**
     * Set new names for nodes of block.
     * @param array $data Nodes data array.
     * @return boolean
     */
    public function changeNodeName($data)
    {
    }
    /**
     * Set new content to nodes of block.
     * @param array $data Nodes data array.
     * @param array $additional Additional prams for save.
     * @return boolean
     */
    public function updateNodes($data, $additional = array())
    {
    }
    /**
     * Returns menu html with child submenu.
     * @param array $data Data array.
     * @param array $manifestNode Manifest node for current selector.
     * @param string $level Level (root or children).
     * @return string
     */
    protected function getMenuHtml($data, $manifestNode, $level = 'root')
    {
    }
    /**
     * Change cards multiple.
     * @param array $data Array with cards.
     * @return boolean
     */
    public function updateCards(array $data = array())
    {
    }
    /**
     * Recursive styles remove in Node.
     * @param \Bitrix\Main\Web\DOM\Node $node Node for clear.
     * @param array $styleToRemove Array of styles to remove.
     * @return \Bitrix\Main\Web\DOM\Node
     */
    protected function removeStyle(\Bitrix\Main\Web\DOM\Node $node, array $styleToRemove)
    {
    }
    /**
     * Set new classes to nodes of block.
     * @param array $data Classes data array.
     * @return boolean
     */
    public function setClasses($data)
    {
    }
    /**
     * Collects and returns allowed attributes ([selector] => [data-test, data-test2]).
     * @param string $selector Selector, if attr have't own selector.
     * @param array &$allowed Array for collecting.
     * @return void
     */
    protected static function collectAllowedAttrs(array $mixed, array &$allowed, $selector = null)
    {
    }
    /**
     * Set attributes to nodes of block.
     * @param array $data Attrs data array.
     * @return void
     */
    public function setAttributes($data)
    {
    }
    /**
     * Replace title and breadcrumb marker in the block.
     * @param string $content Some content.
     * @return string
     */
    protected static function replaceMetaMarkers($content)
    {
    }
    /**
     * Delete all blocks from db by codes.
     * @param array $code Array of codes to delete.
     * @return void
     */
    public static function deleteByCode($code)
    {
    }
    /**
     * Delete block row.
     * @param int $id Block id.
     * @return \Bitrix\Main\Result
     */
    private static function parentDelete($id)
    {
    }
    /**
     * Delete all blocks for the landing.
     * @param int $lid Landing id.
     * @return void
     */
    public static function deleteAll($lid)
    {
    }
    /**
     * Returns search content for this block.
     * @return string
     */
    public function getSearchContent()
    {
    }
    /**
     * Export nodes, style, attrs, etc. from block.
     * @param array $params Some params.
     * @return array
     */
    public function export(array $params = [])
    {
    }
    /**
     * Search in blocks.
     * @param string $query Query string.
     * @param array $filter Filter array.
     * @param array $select Select fields.
     * @param array $group Group fields.
     * @return array
     */
    public static function search($query, array $filter = [], array $select = ['LID'], array $group = ['LID'])
    {
    }
    /**
     * Add block row.
     * @param array $fields Block data.
     * @return \Bitrix\Main\Result
     */
    public static function add($fields)
    {
    }
    /**
     * Update block row.
     * @param int $id Primary key.
     * @param array $fields Block data.
     * @return \Bitrix\Main\Result
     */
    public static function update($id, $fields = array())
    {
    }
    /**
     * Delete block row.
     * @param int $id Primary key.
     * @return \Bitrix\Main\Result
     */
    public static function delete($id)
    {
    }
    /**
     * Gets block's rows.
     * @param array $fields Block orm data.
     * @return \Bitrix\Main\DB\Result
     */
    public static function getList($fields = array())
    {
    }
    /**
     * In ajax hit may be initiated some assets (JS extensions), but will not be added on page.
     * We need get them all and add to output.
     * @return array
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected static function getAjaxInitiatedAssets()
    {
    }
}