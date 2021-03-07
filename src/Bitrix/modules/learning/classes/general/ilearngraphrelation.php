<?php

/**
 * WARNING: nobody shouldn't rely on this code,
 * because it's FOR INTERNAL USE ONLY. Any declared
 * function can be removed or changed in future versions.
 * This code can be changed without any notifications.
 * DON'T USE it nowhere.
 *
 * @access private
 */
interface ILearnGraphRelation
{
    /**
     * Link two nodes from $parentNodeId to $childNodeId
     *
     * @param int $parentNodeId
     * @param int $childNodeId
     * @param array of properties of the link. Currently available properties:
     *    - 'SORT', 32-bit integer
     *
     * @throws Exception LearnException with code error LearnException::EXC_ERR_GR_LINK
     */
    public static function Link($parentNodeId, $childNodeId, $arProperties);
    /**
     * Remove relation from $parentNodeId to $childNodeId
     *
     * @param int $parentNodeId
     * @param int $childNodeId
     *
     * @throws Exception LearnException with code error LearnException::EXC_ERR_GR_UNLINK
     *         if relation isn't exists => message of exception === 'EA_NOT_EXISTS'
     */
    public static function Unlink($parentNodeId, $childNodeId);
    /**
     * Set property for relation from $parentNodeId to $childNodeId.
     * Currently available properties:
     *    - 'SORT', 32-bit integer
     *
     * Warning: this method DON'T checks for existence of relation
     * (due to CDatabase transactions problems), and it will not give any error
     * or exception in that case.
     *
     * WARNING: this method terminates (by die()/exit()) current execution flow
     * when SQL server error occured. It's due to bug in CDatabase::Update() in main
     * module (version info:
     *    define("SM_VERSION","11.0.12");
     *    define("SM_VERSION_DATE","2012-02-21 17:00:00"); // YYYY-MM-DD HH:MI:SS
     * )
     *
     * @param int $parentNodeId
     * @param int $childNodeId
     * @param string $propertyName ('SORT')
     * @param mixed $value (for 'SORT' - integer)
     *
     * @throws Exception LearnException with code error LearnException::EXC_ERR_GR_SET_PROPERTY
     */
    public static function SetProperty($parentNodeId, $childNodeId, $propertyName, $value);
    /**
     * Get property for relation from $parentNodeId to $childNodeId.
     *
     * @param int $parentNodeId
     * @param int $childNodeId
     * @param string $propertyName ('SORT')
     *
     * @throws Exception LearnException with code error LearnException::EXC_ERR_GR_GET_PROPERTY
     *         if relation isn't exists => message of exception === 'EA_NOT_EXISTS'
     *
     * @return mixed value of property (for 'SORT' - integer)
     */
    public static function GetProperty($parentNodeId, $childNodeId, $propertyName);
    /**
     * Lists immediate neighbours.
     *
     * @param integer id of node
     *
     * @return array of immediate neighbours (empty array if there is no neighbours)
     *
     * @example
     * <?php
     * $arNeighbours = ThisClass::ListImmediateNeighbours (1);
     * var_dump ($arNeighbours);
     * ?>
     *
     * output:
     * array(2) {
     *   [0]=>
     *   array(4) {
     *     ["SOURCE_NODE"]=>
     *     int(1)
     *     ["TARGET_NODE"]=>
     *     int(2)
     *     ["SORT"]=>
     *     int(500)
     *   }
     *   [1]=>
     *   array(4) {
     *     ["SOURCE_NODE"]=>
     *     int(4)
     *     ["TARGET_NODE"]=>
     *     int(1)
     *     ["SORT"]=>
     *     int(500)
     *   }
     * }
     *
     */
    public static function ListImmediateNeighbours($nodeId);
    /**
     * Lists immediate parents
     *
     * @param integer id of node
     *
     * @return array of immediate parents (empty array if there is no parents)
     *
     * @see example for ListImmediateNeighbours()
     */
    public static function ListImmediateParents($nodeId);
    /**
     * Lists immediate childs
     *
     * @param integer id of node
     *
     * @return array of immediate childs (empty array if there is no childs)
     *
     * @see example for ListImmediateNeighbours()
     */
    public static function ListImmediateChilds($nodeId);
}
/**
 * WARNING: nobody shouldn't rely on this code,
 * because it's FOR INTERNAL USE ONLY. Any declared
 * function can be removed or changed in future versions.
 * This code can be changed without any notifications.
 * DON'T USE it nowhere.
 *
 * @access private
 */
final class CLearnGraphRelation implements \ILearnGraphRelation
{
    // For bitmask:
    const NBRS_IMDT_PARENTS = 0x1;
    // immediate parent neighbours
    const NBRS_IMDT_CHILDS = 0x2;
    // immediate child neighbours
    private static $arNodesCache = array();
    private static $nodesCached = 0;
    public static function ListImmediateParents($nodeId)
    {
    }
    public static function ListImmediateChilds($nodeId)
    {
    }
    public static function ListImmediateNeighbours($nodeId)
    {
    }
    protected function _ListImmediateNeighbours($nodeId, $bitmaskSearchMode)
    {
    }
    public static function Link($parentNodeId, $childNodeId, $arProperties)
    {
    }
    public static function Unlink($parentNodeId, $childNodeId)
    {
    }
    public static function SetProperty($parentNodeId, $childNodeId, $propertyName, $value)
    {
    }
    public static function GetProperty($parentNodeId, $childNodeId, $propertyName)
    {
    }
}