<?php

namespace Bitrix\Sale\Location;

abstract class Connector extends \Bitrix\Main\Entity\DataManager
{
    const LINK_ID = 0x1;
    const LINK_CODE = 0x2;
    const DB_LOCATION_FLAG = 'L';
    const DB_GROUP_FLAG = 'G';
    const LSTAT_IN_NOT_CONNECTED_BRANCH = 0x1;
    const LSTAT_IS_CONNECTOR = 0x2;
    const LSTAT_ABOVE_CONNECTOR = 0x3;
    const LSTAT_BELOW_CONNECTOR = 0x4;
    #####################################
    #### Entity settings
    #####################################
    /** 
     * Method returns name of table column that provides linking between location table and entity table. For example, for delivery it should return 'DELIVERY_ID'
     * Limitation: mechanism does not support compound primary keys
     *
     * @return string field name
     */
    public abstract function getLinkField();
    /** Method should return a name of the "target" entity plus namespace but without trailing 'Table'. For example, for delivery this should be 'Bitrix\Sale\Delivery\Delivery'
     *
     * @return string table name
     */
    public abstract function getTargetEntityName();
    /**
     * Returns a name of type filed. By default 'LOCATION_TYPE' is used for the most of. Does not make any sense if getUseGroups() returns false
     * 
     * @return string
     */
    public static function getTypeField()
    {
    }
    /**
     * Returns a name of the filed that keep location id or code. By default 'LOCATION_ID' is used for the most. For newly-created entites this should be LOCATION_CODE (string)
     * 
     * @return string
     */
    public static function getLocationLinkField()
    {
    }
    /**
     * Returns a name of the primary field of the "target" entity. By default 'ID' is used for the most. See target entity class for sure.
     * 
     * @return string
     */
    public static function getTargetEntityPrimaryField()
    {
    }
    /**
     * Show whether or not entity use linking through groups. E.g. delivery would return true, 
     * but location groups (which can be treated as entity too) - always return false (groups cannot be connected with groups)
     * 
     * @return boolean
     */
    public static function getUseGroups()
    {
    }
    /**
     * Show whether or not entity use link tracking. Link tracking allows keeping information about link existence in option strings.
     * So, this is some kind of cacheing mechanism. It can be usefull, but may exceed option string length when there are lots of entity records exist.
     * 
     * @return boolean
     */
    public static function getUseLinkTracking()
    {
    }
    /**
     * Return the connection type for the current entity. Return value that is equal to self::LINK_ID stands for ID, otherwise - for CODE link type
     * 
     * @return integer
     */
    public static function getConnectType()
    {
    }
    /**
     * Just a shortcut to link type identification
     * 
     * @return boolean
     */
    public static function getUseCodes()
    {
    }
    #####################################
    #### CRUD wrappers
    #####################################
    /**
     * Adds a new connection between location and entity
     * 
     * @param mixed[] $data data to add (See getMap() of a certain implementation for $data key details)
     * 
     * @return Bitrix\Main\Entity\AddResult
     */
    public static function add(array $data)
    {
    }
    /**
     * Updates a connection between location and entity
     * 
     * @param mixed $primary relation primary key value
     * @param mixed[] $data data to update with (See getMap() of a certain implementation for $data key details)
     * 
     * @return Bitrix\Main\Entity\UpdateResult
     */
    public static function update($primary, array $data)
    {
    }
    /**
     * Removes a connection between location and entity
     * 
     * @param mixed $primary relation primary key value
     * 
     * @return Bitrix\Main\Entity\DeleteResult
     */
    public static function delete($primary)
    {
    }
    public static function onAfterModifiy()
    {
    }
    /**
     * Establishes several connections between entity and locations. Could be used to add and delete selected relations.
     * 
     * @param mixed $entityPrimary primary key for an entity
     * @param integer[][]|string[][] $links array of locations and groups to link an entity with
     * 
     * 	Argument format:
     * 	array(
     * 		'L' => array(), // an array of IDs or CODEs of locations
     * 		'G' => array() // an array of IDs or CODEs of location groups
     * 	)
     * 
     * @throws Bitrix\Main\ArgumentNullException
     * 
     * @return boolean
     */
    public static function updateMultipleForOwner($entityPrimary, $links = array(), $behaviour = array('REMOVE_ABSENT' => true))
    {
    }
    // removes all links with a given entity
    public static function deleteAllForOwner($entityPrimary, $behaviour = array('BATCH_MODE' => false))
    {
    }
    public static function deleteAll()
    {
    }
    /**
     * Removes all links and creates new ones
     * 
     */
    public static function resetMultipleForOwner($entityPrimary, $links = array())
    {
    }
    private static function updateMultipleLinkType($entityPrimary, $links, $existed, $linkType = self::DB_LOCATION_FLAG, $doRemove = true)
    {
    }
    #####################################
    #### Getters
    #####################################
    /**
     * Returns a set of locations that connected with a given entity, directly and, optionally, through groups.
     *
     * @param mixed $entityPrimary primary key for an entity
     * @param mixed[] $parameters filter and select parameters in ORM getlist() style, functionality is enought for usage, but limited. See limitations in code comments.
     * @param string[] $behaviour a set of behaviour options:
     *	<ul>
     *		<li>GET_LINKED_THROUGH_GROUPS boolean (default true) - if set to true, locations will be searched also throurgh groups (if entity connector supports groups)</li>
     *	</ul>
     *
     * @throws ArgumentNullException
     * @throws NotImplementedException
     *
     * @return String an SQL-query string that, being called, returns a list of locations
     */
    public static function getConnectedLocationsQuery($entityPrimary, $parameters = array(), $behaviour = array('GET_LINKED_THROUGH_GROUPS' => false))
    {
    }
    /**
     * More preferable alias for getConnectedLocationsQuery()
     */
    public static function getConnectedLocationsSql($entityPrimary, $parameters = array(), $behaviour = array('GET_LINKED_THROUGH_GROUPS' => false))
    {
    }
    public static function getConnectedLocations($entityPrimary, $parameters = array(), $behaviour = array('GET_LINKED_THROUGH_GROUPS' => false))
    {
    }
    /**
     * Returns a set of location groups that connected with a given entity.
     *
     * @param mixed $entityPrimary primary key for an entity
     * @param mixed[] $parameters for ORM getList()
     *
     * @throws ArgumentNullException
     * @throws NotImplementedException
     *
     * @return \Bitrix\Main\DB\Result list of locations
     */
    public static function getConnectedGroups($entityPrimary, $parameters = array())
    {
    }
    // returns list of connected entities for location with ID == $locationPrimary, with an optional filter applied
    public static function getConnectedEntites($locationPrimary, $parameters = array())
    {
    }
    // returns list of connected entities for location with CODE == $locationPrimary, with an optional filter applied
    public static function getConnectedEntitesByCode($locationPrimary, $parameters = array())
    {
    }
    // returns sql-select query that can be embeded to another sql query in 'ID in (select * from ...)' manner
    public static function getConnectedEntitiesQuery($locationPrimary, $linkType = 'id', $parameters = array())
    {
    }
    protected static function getConnectedEntitiesByCondition($locationPrimary, $linkType = 'id', $parameters = array())
    {
    }
    protected static function getLinkedLocations($entityPrimary)
    {
    }
    /**
     * Functions for massive check for link type
     * 
     * 
     */
    public static function getLinkStatusForMultipleNodes($nodeInfo = array(), $entityPrimary, $connectors = false)
    {
    }
    /**
     * Check if location is connected with entity
     * 
     * @param $entityPrimary mixed Entity being checked
     * @param $locationPrimary mixed Location being checked. Could be a value of ID or CODE depending on what connection type is selected (see below)
     * @param $behaviour mixed[] A set of flags that modify function behaviour
     * 		<li> LOCATION_LINK_TYPE string One of: ID, CODE, AUTO. 
     * 			If ID, than match by ID is used (default, for compatibility), if CODE than match by CODE. 
     * 			In case of AUTO the target field value depends on entity connect type.
     * 
     * @return boolean
     */
    public static function checkConnectionExists($entityPrimary, $locationPrimary, array $behaviour = array('LOCATION_LINK_TYPE' => 'ID'))
    {
    }
    // a wrapper to getConnectedLocations which returns simple info about connected locations
    protected static function getConnectedLocationsInfo($entityPrimary)
    {
    }
    #####################################
    #### Link tracking
    #####################################
    public static function checkLinkUsageAny($entityPrimary)
    {
    }
    /**
     * Check if there is a link between entity and locations, optionally of a certain type (default: locations)
     *
     * @param mixed $entityPrimary primary key for an entity
     * @param string $linkType link type (G or L (default))
     *
     * @throws ArgumentNullException
     *
     * @return boolean
     */
    public static function checkLinkUsage($entityPrimary, $linkType = self::DB_LOCATION_FLAG)
    {
    }
    /**
     * Function switches link usage to "on\off" position, for a certain entity and connection type (to location or to group)
     *
     */
    private static function setLinkUsage($entityPrimary, $linkType = self::DB_LOCATION_FLAG, $way = true)
    {
    }
    /**
     * Function re-reads link existence and set options correctly
     *
     */
    private static function resetLinkUsage($entityPrimary)
    {
    }
    /**
     * Function returns option value (or an empty array, if option is not set)
     *
     */
    private static function getLinkUsageOptionValue()
    {
    }
    /**
     * Function sets option value
     *
     */
    private static function setLinkUsageOptionValue($usageFlags)
    {
    }
    private static function deleteLinkUsageOption()
    {
    }
    private static function getLinkOptionName()
    {
    }
    #####################################
    #### Util
    #####################################
    private static function checkUpdateLinks($links)
    {
    }
    /**
     * A special paginator for UNION-like queries
     *
     * @param string $sql SQL select query to execute, wrapped in union
     * @param integer $limit record limit to fetch (default: 0)
     * @param integer $offset offset to start fetching records from (default: 0)
     *
     * @return Bitrix\Main\DB\Result
     */
    protected static function queryPage($sql, $limit = 0, $offset = 0)
    {
    }
    /**
     * Wraps a set of sqls to a union
     *
     * @param string[] $sqls a set of SQL select queries to wrap
     *
     * @return string
     */
    public static function unionize($sqls)
    {
    }
    // function accepts denormalized list of location IDs on input, then makes it normal and returns list of IDs or CODEs, depending on current entity settings
    public static function normalizeLocationList($denormalizedList = array())
    {
    }
}