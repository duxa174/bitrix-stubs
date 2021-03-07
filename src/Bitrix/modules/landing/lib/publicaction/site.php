<?php

namespace Bitrix\Landing\PublicAction;

class Site
{
    /**
     * Clear disallow keys from add/update fields.
     * @param array $fields Array fields.
     * @return array
     */
    protected static function clearDisallowFields(array $fields)
    {
    }
    /**
     * Get additional fields of site.
     * @param int $id Id of site.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getAdditionalFields($id)
    {
    }
    /**
     * Gets public url of site (or sites).
     * @param int[] $id Site id or array of ids.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getPublicUrl($id)
    {
    }
    /**
     * Get available sites.
     * @param array $params Params ORM array.
     * @param string $initiator Initiator code.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getList(array $params = [], $initiator = null)
    {
    }
    /**
     * Create new site.
     * @param array $fields Site data.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function add(array $fields)
    {
    }
    /**
     * Update site.
     * @param int $id Site id.
     * @param array $fields Site new data.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function update($id, array $fields)
    {
    }
    /**
     * Delete site.
     * @param int $id Site id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function delete($id)
    {
    }
    /**
     * Mark entity as deleted.
     * @param int $id Entity id.
     * @param boolean $mark Mark.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function markDelete($id, $mark = true)
    {
    }
    /**
     * Mark entity as undeleted.
     * @param int $id Entity id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function markUnDelete($id)
    {
    }
    /**
     * Make site public.
     * @param int $id Entity id.
     * @param boolean $mark Mark.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function publication($id, $mark = true)
    {
    }
    /**
     * Mark site unpublic.
     * @param int $id Entity id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function unpublic($id)
    {
    }
    /**
     * Full export of the site.
     * @param int $id Site id.
     * @param array $params Params array.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function fullExport($id, array $params = array())
    {
    }
    /**
     * Set rights for site.
     * @param int $id Site id.
     * @param array $rights Array of rights for site.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function setRights($id, $rights = [])
    {
    }
    /**
     * Get rights about site.
     * @param int $id Site id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getRights($id)
    {
    }
    /**
     * Upload file by url or from FILE.
     * @param int $id Site id.
     * @param string $picture File url / file array.
     * @param string $ext File extension.
     * @param array $params Some file params.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function uploadFile($id, $picture, $ext = false, array $params = array())
    {
    }
    /**
     * Sets scope for work with module.
     * @param string $type Scope code.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function setScope($type)
    {
    }
}