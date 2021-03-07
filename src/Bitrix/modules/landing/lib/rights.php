<?php

namespace Bitrix\Landing;

class Rights
{
    /**
     * Option for debug, set full access for admin.
     */
    const MODE_ADMIN_FULL_ACCESS = true;
    /**
     * Site entity type.
     */
    const ENTITY_TYPE_SITE = 'S';
    /**
     * Access types for different levels.
     */
    const ACCESS_TYPES = ['denied' => 'denied', 'read' => 'read', 'edit' => 'edit', 'sett' => 'sett', 'public' => 'public', 'delete' => 'delete'];
    /**
     * Additional rights for some functionality.
     */
    const ADDITIONAL_RIGHTS = [
        'menu24' => 'menu24',
        //show in main menu of Bitrix24
        'create' => 'create',
        //can create new sites
        'knowledge_menu24' => 'knowledge_menu24',
        // show Knowledge in main menu of Bitrix24
        'knowledge_create' => 'knowledge_create',
        //can create new Knowledge base
        'group_create' => 'group_create',
        //can create new social network group base
        'group_menu24' => 'group_menu24',
    ];
    /**
     * If true, rights is not checking.
     * @var bool
     */
    protected static $available = true;
    /**
     * If true, rights is not checking (global mode).
     * @var bool
     */
    protected static $globalAvailable = true;
    /**
     * Context user id.
     * @var int
     */
    protected static $userId = null;
    /**
     * Set rights checking to 'no'.
     * @return void
     */
    public static function setOff()
    {
    }
    /**
     * Set rights checking to 'yes'.
     * @return void
     */
    public static function setOn()
    {
    }
    /**
     * Set rights checking to 'no' (global mode).
     * @return void
     */
    public static function setGlobalOff()
    {
    }
    /**
     * Set rights checking to 'yes' (global mode).
     * @return void
     */
    public static function setGlobalOn()
    {
    }
    /**
     * Check current status for checking rights.
     * @return bool
     */
    public static function isOn()
    {
    }
    /**
     * Current user is admin or not.
     * @return bool
     */
    public static function isAdmin()
    {
    }
    /**
     * Sets context user id.
     * @param int $uid
     * @return void
     */
    public static function setContextUserId(int $uid) : void
    {
    }
    /**
     * Clears context user id.
     * @return void
     */
    public static function clearContextUserId() : void
    {
    }
    /**
     * Returns context user id (current by default).
     * @return int
     */
    public static function getContextUserId() : int
    {
    }
    /**
     * Available or not permission feature by current plan.
     * @return bool
     */
    protected static function isFeatureOn()
    {
    }
    /**
     * Gets tasks for access.
     * @return array
     */
    public static function getAccessTasks()
    {
    }
    /**
     * Gets tasks for access.
     * @return array
     */
    public static function getAccessTasksReferences()
    {
    }
    /**
     * Remove all rows for entity.
     * @param int|array $entityId Entity id (id or array of id).
     * @param string $entityType Entity type.
     * @return void
     */
    protected static function removeData($entityId, $entityType)
    {
    }
    /**
     * Remove all rows for site.
     * @param int|array $siteId Site id (id or array of id).
     * @return void
     */
    public static function removeDataForSite($siteId)
    {
    }
    /**
     * Get all rows for entity.
     * @param int|array $entityId Entity id (id or array of id).
     * @param string $entityType Entity type.
     * @param array $preDefined Predefined array of rights.
     * @return array
     */
    protected static function getData($entityId, $entityType, array $preDefined = [])
    {
    }
    /**
     * Get all rows for site.
     * @param int|array $siteId Site id (id or array of id).
     * @param array $preDefined Predefined array of rights.
     * @return array
     */
    public static function getDataForSite($siteId, array $preDefined = [])
    {
    }
    /**
     * Get all available operations for entity (for current user).
     * @param int|array $entityId Entity id (id or array of id).
     * @param string $entityType Entity type.
     * @return array
     */
    protected static function getOperations($entityId, $entityType)
    {
    }
    /**
     * Gets all available operations for site (for current user).
     * @param int|array $siteId Site id (id or array of id).
     * @return array
     */
    public static function getOperationsForSite($siteId)
    {
    }
    /**
     * Can current user do something.
     * @param int $siteId Site id.
     * @param string $accessType Access type code.
     * @param bool $deleted And from recycle bin.
     * @return boolean
     */
    public static function hasAccessForSite($siteId, $accessType, $deleted = false)
    {
    }
    /**
     * Can current user do something.
     * @param int $landingId Landing id.
     * @param string $accessType Access type code.
     * @return boolean
     */
    public static function hasAccessForLanding($landingId, $accessType)
    {
    }
    /**
     * Set operations for entity.
     * @param int $entityId Entity id.
     * @param string $entityType Entity type.
     * @param array $rights Rights array (set empty for clear rights).
     * @return boolean
     */
    protected static function setOperations($entityId, $entityType, array $rights = [])
    {
    }
    /**
     * Set operations for site.
     * @param int $siteId Site id.
     * @param array $rights Rights array (set empty for clear rights).
     * @return bool
     */
    public static function setOperationsForSite($siteId, array $rights = [])
    {
    }
    /**
     * If any records of rights exists.
     * @return bool
     */
    protected static function exist()
    {
    }
    /**
     * Gets access filter for current user.
     * @return array
     */
    public static function getAccessFilter()
    {
    }
    /**
     * Extended mode available.
     * @return bool
     */
    public static function isExtendedMode()
    {
    }
    /**
     * Switch extended mode.
     * @return void
     */
    public static function switchMode()
    {
    }
    /**
     * Refresh additional rights for all roles.
     * @param array $additionalRights Array for set additional.
     * @return void
     */
    public static function refreshAdditionalRights(array $additionalRights = [])
    {
    }
    /**
     * Set additional right.
     * @param string $code Code from ADDITIONAL_RIGHTS.
     * @param array $accessCodes Additional rights array.
     * @return void
     */
    public static function setAdditionalRightExtended($code, array $accessCodes = [])
    {
    }
    /**
     * Gets additional right.
     * @param string $code Code from ADDITIONAL_RIGHTS.
     * @return array
     */
    public static function getAdditionalRightExtended($code)
    {
    }
    /**
     * Gets additional rights with labels.
     * @return array
     */
    public static function getAdditionalRightsLabels()
    {
    }
    /**
     * Has current user additional right or not.
     * @param string $code Code from ADDITIONAL_RIGHTS.
     * @param string $type Scope type.
     * @return bool
     */
    public static function hasAdditionalRight($code, $type = null)
    {
    }
}