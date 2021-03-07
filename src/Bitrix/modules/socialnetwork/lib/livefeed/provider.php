<?php

namespace Bitrix\Socialnetwork\Livefeed;

abstract class Provider
{
    public const DATA_RESULT_TYPE_SOURCE = 'SOURCE';
    public const TYPE_POST = 'POST';
    public const TYPE_COMMENT = 'COMMENT';
    public const DATA_ENTITY_TYPE_BLOG_POST = 'BLOG_POST';
    public const DATA_ENTITY_TYPE_BLOG_COMMENT = 'BLOG_COMMENT';
    public const DATA_ENTITY_TYPE_TASKS_TASK = 'TASK';
    public const DATA_ENTITY_TYPE_FORUM_TOPIC = 'FORUM_TOPIC';
    public const DATA_ENTITY_TYPE_FORUM_POST = 'FORUM_POST';
    public const DATA_ENTITY_TYPE_CALENDAR_EVENT = 'CALENDAR_EVENT';
    public const DATA_ENTITY_TYPE_LOG_ENTRY = 'LOG_ENTRY';
    public const DATA_ENTITY_TYPE_LOG_COMMENT = 'LOG_COMMENT';
    public const DATA_ENTITY_TYPE_RATING_LIST = 'RATING_LIST';
    public const DATA_ENTITY_TYPE_PHOTOGALLERY_ALBUM = 'PHOTO_ALBUM';
    public const DATA_ENTITY_TYPE_PHOTOGALLERY_PHOTO = 'PHOTO_PHOTO';
    public const DATA_ENTITY_TYPE_LISTS_ITEM = 'LISTS_NEW_ELEMENT';
    public const DATA_ENTITY_TYPE_WIKI = 'WIKI';
    public const DATA_ENTITY_TYPE_TIMEMAN_ENTRY = 'TIMEMAN_ENTRY';
    public const DATA_ENTITY_TYPE_TIMEMAN_REPORT = 'TIMEMAN_REPORT';
    public const DATA_ENTITY_TYPE_INTRANET_NEW_USER = 'INTRANET_NEW_USER';
    public const DATA_ENTITY_TYPE_BITRIX24_NEW_USER = 'BITRIX24_NEW_USER';
    public const PERMISSION_DENY = 'D';
    public const PERMISSION_READ = 'I';
    public const PERMISSION_FULL = 'W';
    public const CONTENT_TYPE_ID = false;
    protected $entityId = 0;
    protected $logId = 0;
    protected $sourceFields = array();
    protected $siteId = false;
    protected $cloneDiskObjects = false;
    protected $sourceDescription = '';
    protected $sourceTitle = '';
    protected $sourceOriginalText = '';
    protected $sourceAuxData = array();
    protected $sourceAttachedDiskObjects = array();
    protected $sourceDiskObjects = array();
    protected $diskObjectsCloned = array();
    protected $attachedDiskObjectsCloned = array();
    protected $logEventId = null;
    protected $logEntityType = null;
    protected $logEntityId = null;
    /**
     * @return string the fully qualified name of this class.
     */
    public static function className()
    {
    }
    public function setSiteId($siteId)
    {
    }
    public function getSiteId()
    {
    }
    public static function getId()
    {
    }
    public function getEventId()
    {
    }
    public function getType()
    {
    }
    public function getCommentProvider()
    {
    }
    private static final function getTypes()
    {
    }
    public static final function getProvider($entityType)
    {
    }
    public static function init(array $params)
    {
    }
    public static function canRead($params)
    {
    }
    protected function getPermissions(array $entity)
    {
    }
    public function getLogId($params = [])
    {
    }
    public function getLogCommentId($params = [])
    {
    }
    public function getSonetGroupsAvailable($feature = false, $operation = false)
    {
    }
    public function getLogRights()
    {
    }
    protected function getLogRightsEntry()
    {
    }
    public function setEntityId($entityId)
    {
    }
    protected final function getEntityId()
    {
    }
    public final function setLogId($logId)
    {
    }
    protected final function setSourceFields(array $fields)
    {
    }
    public function initSourceFields()
    {
    }
    protected final function getSourceFields()
    {
    }
    protected final function setSourceDescription($description)
    {
    }
    public function getSourceDescription()
    {
    }
    protected final function setSourceTitle($title)
    {
    }
    public function getSourceTitle()
    {
    }
    public function getPinnedTitle()
    {
    }
    public function getPinnedDescription()
    {
    }
    protected final function setSourceOriginalText($text)
    {
    }
    public function getSourceOriginalText()
    {
    }
    protected final function setSourceAuxData($auxData)
    {
    }
    public function getSourceAuxData()
    {
    }
    protected final function setSourceAttachedDiskObjects(array $diskAttachedObjects)
    {
    }
    protected final function setSourceDiskObjects(array $files)
    {
    }
    public final function setDiskObjectsCloned(array $values)
    {
    }
    public final function getDiskObjectsCloned()
    {
    }
    public final function getAttachedDiskObjectsCloned()
    {
    }
    public function getSourceAttachedDiskObjects()
    {
    }
    public function getSourceDiskObjects()
    {
    }
    protected function getAttachedDiskObjects($clone = false)
    {
    }
    protected static function cloneUfValues(array $values)
    {
    }
    public function getDiskObjects($entityId, $clone = false)
    {
    }
    private final function processDescription($text)
    {
    }
    private final function parseDiskObjectsCloned($matches)
    {
    }
    private final function parseAttachedDiskObjectsCloned($matches)
    {
    }
    public function getLiveFeedUrl()
    {
    }
    final function getContentTypeId()
    {
    }
    public static function getContentId($event = array())
    {
    }
    public function setContentView($params = array())
    {
    }
    public static final function getEntityData(array $params)
    {
    }
    public function getSuffix()
    {
    }
    public function add()
    {
    }
    public final function setLogEventId($eventId = '')
    {
    }
    private final function setLogEntityType($entityType = '')
    {
    }
    private final function setLogEntityId($entityId = 0)
    {
    }
    protected final function getLogFields()
    {
    }
    protected function getLogEventId()
    {
    }
    protected function getLogEntityType()
    {
    }
    protected function getLogEntityId()
    {
    }
    public function getAdditionalData($params = [])
    {
    }
    protected function checkAdditionalDataParams(&$params)
    {
    }
    public function deleteCounter($params = [])
    {
    }
}