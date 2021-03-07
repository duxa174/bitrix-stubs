<?php

namespace Bitrix\Landing;

class Hook
{
    /**
     * If true, hook work in edit mode (form settings).
     * @var boolean
     */
    protected static $editMode = false;
    /**
     * Entity type site.
     */
    const ENTITY_TYPE_SITE = 'S';
    /**
     * Entity type landing.
     */
    const ENTITY_TYPE_LANDING = 'L';
    /**
     * Dir of repository of common hooks.
     */
    const HOOKS_PAGE_DIR = '/bitrix/modules/landing/lib/hook/page';
    /**
     * Namespace of repoitory of common hooks (relative current).
     */
    const HOOKS_NAMESPACE = '\\Hook\\Page\\';
    /**
     * Hook codes which contains file ids.
     */
    const HOOKS_CODES_FILES = ['METAOG_IMAGE', 'BACKGROUND_PICTURE'];
    /**
     * Get classes from dir.
     * @param string $dir Relative dir.
     * @return array
     */
    protected static function getClassesFromDir($dir)
    {
    }
    /**
     * Get data by entity id ant type.
     * @param int $id Entity id.
     * @param string $type Entity type.
     * @param boolean $asIs Return row as is.
     * @return array
     */
    public static function getData($id, $type, $asIs = false)
    {
    }
    /**
     * Get available hooks for this landing.
     * @param int $id Entity id.
     * @param string $type Entity type.
     * @param array $data Data array (optional).
     * @return \Bitrix\Landing\Hook\Page[]
     */
    protected static function getList($id, $type, array $data = array())
    {
    }
    /**
     * Set edit mode to true.
     * @param bool $mode Edit mode (true by default).
     * @return void
     */
    public static function setEditMode(bool $mode = true) : void
    {
    }
    /**
     * Returns edit mode state.
     * @return bool
     */
    public static function getEditMode() : bool
    {
    }
    /**
     * Get hooks for site.
     * @param int $id Site id.
     * @return \Bitrix\Landing\Hook\Page[]
     */
    public static function getForSite($id)
    {
    }
    /**
     * Get hooks for landing.
     * @param int $id Landing id.
     * @return \Bitrix\Landing\Hook\Page[]
     */
    public static function getForLanding($id)
    {
    }
    /**
     * Get row hooks for landing.
     * @param int $id Landing id.
     * @return array
     */
    public static function getForLandingRow($id)
    {
    }
    /**
     * Copy data for entity.
     * @param int $from From entity id.
     * @param int $to To entity id.
     * @param string $type Entity type.
     * @param bool $publication It's not copy, but publication.
     * @return void
     */
    protected static function copy($from, $to, $type, $publication = false)
    {
    }
    /**
     * Copy data for site.
     * @param int $from From site id.
     * @param int $to To site id.
     * @return void
     */
    public static function copySite($from, $to)
    {
    }
    /**
     * Copy data for landing.
     * @param int $from From landing id.
     * @param int $to To landing id.
     * @return void
     */
    public static function copyLanding($from, $to)
    {
    }
    /**
     * Publication data for site.
     * @param int $siteId Site id.
     * @return void
     */
    public static function publicationSite($siteId)
    {
    }
    /**
     * Publication data for landing.
     * @param int $lid Landing id.
     * @return void
     */
    public static function publicationLanding($lid)
    {
    }
    /**
     * Prepare data for save in hooks.
     * @param array $data Input data.
     * @return array
     */
    protected static function prepareData(array $data)
    {
    }
    /**
     * Set data hooks for entity.
     * @param int $id Entity id.
     * @param string $type Entity type.
     * @param array $data Data array.
     * @return void
     */
    protected static function saveData($id, $type, array $data)
    {
    }
    /**
     * Index hook's content for entities.
     * @param int $id Entity id.
     * @param string $type Entity type.
     * @return void
     */
    protected static function indexContent($id, $type)
    {
    }
    /**
     * Set data hooks for site.
     * @param int $id Site id.
     * @param array $data Data array.
     * @return void
     */
    public static function saveForSite($id, array $data)
    {
    }
    /**
     * Get hooks for landing.
     * @param int $id Landing id.
     * @param array $data Data array.
     * @return void
     */
    public static function saveForLanding($id, array $data)
    {
    }
    /**
     * Index hook's content for landing.
     * @param int $id Landing id.
     * @return void
     */
    public static function indexLanding($id)
    {
    }
    /**
     * Delete data hooks for entity.
     * @param int $id Entity id.
     * @param string $type Entity type.
     * @return void
     */
    protected static function deleteData($id, $type)
    {
    }
    /**
     * Delete data hooks for site.
     * @param int $id Landing id.
     * @return void
     */
    public static function deleteForSite($id)
    {
    }
    /**
     * Delete data hooks for landing.
     * @param int $id Landing id.
     * @return void
     */
    public static function deleteForLanding($id)
    {
    }
}