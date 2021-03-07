<?php

namespace Bitrix\Sale\Location;

abstract class Tree extends \Bitrix\Main\Entity\DataManager
{
    const SORT_FREE_BEFORE = 1;
    const SORT_FREE_AFTER = 2;
    const SORT_HOLE_SIZE = 10;
    const SORT_HOLE_SIZE_HALF = 5;
    const BLOCK_INSERT_MTU = 9999;
    const SPACE_ADD = 1;
    const SPACE_REMOVE = 2;
    public static function add(array $data)
    {
    }
    /**
     * Available keys in $additional
     * REBALANCE - if set to true, method will rebalance tree after insertion
     */
    public static function addExtended(array $data, array $additional = array())
    {
    }
    protected static function rebalance($node, $id)
    {
    }
    // we must guarantee tree integrity in any situation, so make low-level checking to prevent walking around
    public static function checkFields(\Bitrix\Main\Entity\Result $result, $primary, array $data)
    {
    }
    public static function update($primary, array $data)
    {
    }
    /**
     * Available keys in $additional
     * REBALANCE - if set to true, method will rebalance tree after insertion
     */
    public static function updateExtended($primary, array $data, array $additional = array())
    {
    }
    public static function delete($primary)
    {
    }
    /**
     * Available keys in $additional
     * REBALANCE - if set to true, method will rebalance tree after insertion
     * DELETE_SUBTREE - if set to true, only node will be deleted, and it`s subtree left unattached
     * @param $primary
     * @param array $additional
     * @return Entity\DeleteResult
     * @throws Main\SystemException
     * @throws Tree\NodeIncorrectException
     * @throws Tree\NodeNotFoundException
     * @throws \Exception
     */
    public static function deleteExtended($primary, array $additional = array())
    {
    }
    /**
     * This method is for internal use only. It may be changed without any notification further, or even mystically disappear.
     * 
     * @access private
     */
    public static function getSubtreeRangeSqlForNode($primary, $node = array())
    {
    }
    public static function checkIntegrity()
    {
    }
    public static function checkNodeIsParentOfNodeById($primary, $childPrimary, $behaviour = array('CHECK_DIRECT' => false))
    {
    }
    protected static function checkNodeIsParentOfNodeByCondition($parentNodeFilter, $nodeFilter, $behaviour = array('CHECK_DIRECT' => false))
    {
    }
    // recalc left_margin & right_margin in the whole tree
    // strongly recommened to invoke only inside a transaction
    public static function resort($dontCareEvents = false)
    {
    }
    public static function getPathToNode($primary, $parameters, $behaviour = array('SHOW_LEAF' => true))
    {
    }
    /**
     * Fetches a parent chain of a specified node
     * 
     * Available keys in $behaviour
     * SHOW_LEAF : if set to true, return node itself in the result
     * 
     * @access private
     */
    public static function getPathToNodeByCondition($filter, $parameters = array(), $behaviour = array('SHOW_LEAF' => true))
    {
    }
    public static function getPathToMultipleNodes($nodeInfo = array(), $parameters = array(), $behaviour = array('SHOW_LEAF' => true))
    {
    }
    public static function getDeepestCommonParent($nodeInfo = array(), $parameters = array())
    {
    }
    public static function getChildren($primary, $parameters = array())
    {
    }
    /**
     * Fetches a set of items which form sub-tree of a given node
     */
    public static function getSubTree($primary, $parameters = array())
    {
    }
    /**
     * Fetches a chain of parents with their subtrees expanded
     * 
     * Available keys in $behaviour
     * SHOW_CHILDREN : if set to true, do return direct ancestors of $primary in the result
     * START_FROM
     */
    public static function getParentTree($primary, $parameters = array(), $behaviour = array('SHOW_CHILDREN' => true, 'START_FROM' => false))
    {
    }
    /////////////////////////
    /// PROTECTED
    /////////////////////////
    /**
     * Do not call directly, only inside update()
     * 
     * @param int $primary Subtree`s root id to move
     * @param int $primaryDst Item id to attach our subtree to
     *
     */
    protected static final function moveSubtree($primary, $primaryDst)
    {
    }
    protected static final function processInsertInstruction(&$data)
    {
    }
    protected static final function manageFreeSpace($right, $length = 2, $op = self::SPACE_ADD, $exceptId = false)
    {
    }
    // act in assumption sort field is always defined for each node and also it`s value positive signed
    protected static final function makeSortSpace($primary, $direction = self::SORT_FREE_AFTER, $primaryParent, $knownSort = false)
    {
    }
    // in-deep tree walk
    protected static final function walkTreeInDeep($primary, $edges, &$nodes, $margin, $depth = 0, $dontCareEvents = false)
    {
    }
    protected static function applyRestrictions(&$data)
    {
    }
    protected static function getNodeInfo($primary)
    {
    }
    protected static function getMaxMargin()
    {
    }
    public static function mergeRelationsFromTemporalTable($temporalTabName, $additinalFlds = array(), $fldMap = array())
    {
    }
    public static function getCountByFilter($filter = array())
    {
    }
    protected static function checkNodeThrowException($node)
    {
    }
    // deprecated
    protected static function checkNodeIsParentOfNodeByFilters($parentNodeFilter, $nodeFilter, $behaviour = array('CHECK_DIRECT' => false))
    {
    }
}