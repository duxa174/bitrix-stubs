<?php

namespace Bitrix\Landing\PublicAction;

class Landing
{
    /**
     * Clear disallow keys from add/update fields.
     * @param array $fields
     * @return array
     */
    protected static function clearDisallowFields(array $fields)
    {
    }
    /**
     * Get preview picture of landing.
     * @param int $lid Id of landing.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getPreview($lid)
    {
    }
    /**
     * Get public url of landing.
     * @param int $lid Id of landing.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getPublicUrl($lid)
    {
    }
    /**
     * Get additional fields of landing.
     * @param int $lid Id of landing.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getAdditionalFields($lid)
    {
    }
    /**
     * Publication of landing.
     * @param int $lid Id of landing.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function publication($lid)
    {
    }
    /**
     * Cancel publication of landing.
     * @param int $lid Id of landing.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function unpublic($lid)
    {
    }
    /**
     * Add new block to the landing.
     * @param int $lid Id of landing.
     * @param array $fields Data array of block.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function addBlock($lid, array $fields)
    {
    }
    /**
     * Delete the block from the landing.
     * @param int $lid Id of landing.
     * @param int $block Block id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function deleteBlock($lid, $block)
    {
    }
    /**
     * Mark delete or not the block.
     * @param int $lid Id of landing.
     * @param int $block Block id.
     * @param boolean $mark Mark.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function markDeletedBlock($lid, $block, $mark = true)
    {
    }
    /**
     * Mark undelete the block.
     * @param int $lid Id of landing.
     * @param int $block Block id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function markUnDeletedBlock($lid, $block)
    {
    }
    /**
     * Sort the block on the landing.
     * @param int $lid Id of landing.
     * @param int $block Block id.
     * @param string $action Code: up or down.
     * @return \Bitrix\Landing\PublicActionResult
     */
    private static function sort($lid, $block, $action)
    {
    }
    /**
     * Sort up the block on the landing.
     * @param int $lid Id of landing.
     * @param int $block Block id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function upBlock($lid, $block)
    {
    }
    /**
     * Sort down the block on the landing.
     * @param int $lid Id of landing.
     * @param int $block Block id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function downBlock($lid, $block)
    {
    }
    /**
     * Show/hide the block on the landing.
     * @param int $lid Id of landing.
     * @param int $block Block id.
     * @param string $action Code: show or hide.
     * @return \Bitrix\Landing\PublicActionResult
     */
    private static function activate($lid, $block, $action)
    {
    }
    /**
     * Activate the block on the landing.
     * @param int $lid Id of landing.
     * @param int $block Block id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function showBlock($lid, $block)
    {
    }
    /**
     * Dectivate the block on the landing.
     * @param int $lid Id of landing.
     * @param int $block Block id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function hideBlock($lid, $block)
    {
    }
    /**
     * Copy/move other block to this landing.
     * @param int $lid Id of landing.
     * @param int $block Block id.
     * @param array $params Params array.
     * @return \Bitrix\Landing\PublicActionResult
     */
    private static function changeParentOfBlock($lid, $block, array $params)
    {
    }
    /**
     * Copy other block to this landing.
     * @param int $lid Id of landing.
     * @param int $block Block id.
     * @param array $params Params array.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function copyBlock($lid, $block, array $params = array())
    {
    }
    /**
     * Move other block to this landing.
     * @param int $lid Id of landing.
     * @param int $block Block id.
     * @param array $params Params array.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function moveBlock($lid, $block, array $params = array())
    {
    }
    /**
     * Remove entities of Landing - images / blocks.
     * @param int $lid Landing id.
     * @param array $data Data for remove.
     * @return PublicActionResult
     */
    public static function removeEntities($lid, array $data)
    {
    }
    /**
     * Get available landings.
     * @param array $params Params ORM array.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getList(array $params = array())
    {
    }
    /**
     * Checks that page also adding in some menu.
     * @param array $fields Landing data array.
     * @param bool $willAdded Flag that menu item will be added.
     * @return array
     */
    protected static function checkAddingInMenu(array $fields, ?bool &$willAdded = null) : array
    {
    }
    /**
     * Create new landing.
     * @param array $fields Landing data.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function add(array $fields)
    {
    }
    /**
     * Create a page by template.
     * @param int $siteId Site id.
     * @param string $code Code of template.
     * @param array $fields Landing fields.
     * @return PublicActionResult
     */
    public static function addByTemplate($siteId, $code, array $fields = [])
    {
    }
    /**
     * Update landing.
     * @param int $lid Landing id.
     * @param array $fields Landing new data.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function update($lid, array $fields)
    {
    }
    /**
     * Delete landing.
     * @param int $lid Landing id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function delete($lid)
    {
    }
    /**
     * Copy landing.
     * @param int $lid Landing id.
     * @param int $toSiteId Site id (if you want copy in another site).
     * @param int $toFolderId Folder id (if you want copy in some folder).
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function copy($lid, $toSiteId = null, $toFolderId = null)
    {
    }
    /**
     * Mark entity as deleted.
     * @param int $lid Entity id.
     * @param boolean $mark Mark.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function markDelete($lid, $mark = true)
    {
    }
    /**
     * Mark entity as undeleted.
     * @param int $lid Entity id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function markUnDelete($lid)
    {
    }
    /**
     * Upload file by url or from FILE.
     * @param int $lid Landing id.
     * @param string $picture File url / file array.
     * @param string $ext File extension.
     * @param array $params Some file params.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function uploadFile($lid, $picture, $ext = false, array $params = array())
    {
    }
    /**
     * Set some content to the Head section.
     * @param int $lid Landing id.
     * @param string $content Some content.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function updateHead($lid, $content)
    {
    }
}