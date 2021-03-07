<?php

namespace Bitrix\Sale\Location;

final class LocationTable extends \Bitrix\Sale\Location\Tree
{
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    /**
     * Returns location with the specified code.
     *
     * @param string $code location code to search for
     *
     * @throws Bitrix\Main\ArgumentNullException
     *
     * @return Bitrix\Main\DB\Result location
     */
    public static function getByCode($code = '', $parameters = array())
    {
    }
    public static function checkFields(\Bitrix\Main\Entity\Result $result, $primary, array $data)
    {
    }
    public static function add(array $data)
    {
    }
    /**
     * Adds a new location
     *
     * @param mixed[] $data to be added. Additional data keys could be passed:
     *
     *	<ul>
     *		<li>
     *			NAME string[] : add name string to a newly created location
     *		</li>
     *		<li>
     *			EXTERNAL string[] : add external data records to a newly created location
     *		</li>
     *	</ul>
     *
     * @param mixed[] $additional an additional behaviour flags:
     *
     *	<ul>
     *		<li>
     *			REBALANCE boolean (default: true) : do rebalance after add
     *		</li>
     *	</ul>
     *
     * @return \Bitrix\Main\Entity\AddResult the result of add operation
     */
    public static function addExtended(array $data, array $additional = array())
    {
    }
    protected static function resetLegacy($typeId)
    {
    }
    public static function update($primary, array $data)
    {
    }
    /**
     * Updates an existed location
     *
     * @param integer $primary location primary key of a element being updated
     * @param mixed[] $data new data to set. Additional data keys could be passed:
     *
     *	<ul>
     *		<li>
     *			NAME string[] : update name string for specified location
     *		</li>
     *		<li>
     *			EXTERNAL string[] : update external data records for specified location
     *		</li>
     *	</ul>
     *
     * @param mixed[] $additional an additional behaviour flags:
     *
     *	<ul>
     *		<li>
     *			REBALANCE boolean (default: true) : do rebalancing after add
     *		</li>
     *	</ul>
     *
     * @return \Bitrix\Main\Entity\UpdateResult the result of update operation
     */
    public static function updateExtended($primary, array $data, array $additional = array())
    {
    }
    public static function delete($primary)
    {
    }
    /**
     * Deletes location from the tree
     *
     * @param $primary
     * @param array $additional
     * @return Entity\DeleteResult
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     * @throws Tree\NodeNotFoundException
     */
    public static function deleteExtended($primary, array $additional = array())
    {
    }
    /**
     *
     *
     *
     */
    public static function getExternalData($primary, $parameters = array())
    {
    }
    // todo: make getList with SITE_ID parameter to have an ability to filter by SITE_ID using orm (even slowly)
    /**
     * Fetches a parent chain of a specified node, using its code
     * 
     * Available keys in $behaviour
     * SHOW_LEAF : if set to true, return node itself in the result
     */
    public static function getPathToNodeByCode($code, $parameters, $behaviour = array('SHOW_LEAF' => true))
    {
    }
    public static function checkNodeIsParentOfNode($primary, $childPrimary, $behaviour = array('ACCEPT_CODE' => false, 'CHECK_DIRECT' => false))
    {
    }
    public static function resetLegacyPath()
    {
    }
    public static function getCodeValidators()
    {
    }
    public static function getMap()
    {
    }
    /**
     * @deprecated
     */
    public static function getListFast($parameters = array())
    {
    }
}