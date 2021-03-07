<?php

namespace Bitrix\Sale\Compatible;

class AliasedQuery extends \Bitrix\Main\Entity\Query
{
    private $aliases = array();
    public function __construct($source)
    {
    }
    public function getAliases()
    {
    }
    public function addAliases(array $aliases)
    {
    }
    public function addAlias($alias, $field = null)
    {
    }
    public function getAliasName($alias)
    {
    }
    public function addAliasSelect($alias)
    {
    }
    public function addAliasGroup($alias)
    {
    }
    public function addAliasOrder($alias, $order)
    {
    }
    public function addAliasFilter($key, $value)
    {
    }
    //	private function getAliasFilterRecursive(array $filter)
    //	{
    //		$resolved = array();
    //
    //		foreach ($filter as $key => $value)
    //		{
    //			if ($key === 'LOGIC')
    //			{
    //				$resolved['LOGIC'] = $value;
    //			}
    //			elseif (is_array($value))
    //			{
    //				$resolved []= self::getAliasFilterRecursive($value);
    //			}
    //			else
    //			{
    //				preg_match('/^([!%@<=>]{0,3})(.*)$/', $key, $matches);
    //
    //				$alias = $matches[2];
    //
    //				if (! ($name = $this->getAliasName($alias)))
    //				{
    //					if ($this->getEntity()->hasField($alias))
    //						$name = $alias;
    //					else
    //						continue;
    //				}
    //
    //				$key = $matches[1].$name;
    //				$resolved[$key] = $value;
    //			}
    //		}
    //
    //		return $resolved;
    //	}
}
final class CDBResult extends \CDBResult
{
    function compatibleNavQuery(\Bitrix\Main\Entity\Query $query, array $arNavStartParams)
    {
    }
    // FetchAdapter
    private $fetchAdapters = array();
    public function addFetchAdapter(\Bitrix\Sale\Compatible\FetchAdapter $adapter)
    {
    }
    function Fetch()
    {
    }
}
interface FetchAdapter
{
    public function adapt(array $row);
}
class AggregateAdapter implements \Bitrix\Sale\Compatible\FetchAdapter
{
    private $aggregated = array();
    function __construct(array $aggregated)
    {
    }
    public function adapt(array $row)
    {
    }
}
class OrderQuery extends \Bitrix\Sale\Compatible\AliasedQuery
{
    private $counted, $grouped, $allSelected, $aggregated = array();
    public function counted()
    {
    }
    public function grouped()
    {
    }
    public function allSelected()
    {
    }
    public function aggregated()
    {
    }
    private function addAggregatedSelect($alias, $aggregate, $name = null)
    {
    }
    public static function explodeFilterKey($key)
    {
    }
    public function compatibleAddFilter($key, $value)
    {
    }
    protected function mapLocationRuntimeField($field, $asFilter = false)
    {
    }
    public function prepare(array $order, array $filter, $group, array $select)
    {
    }
    public function getSelectNamesAssoc()
    {
    }
    protected function prepareCompatibleRows(array $rows)
    {
    }
    public function compatibleExec(\Bitrix\Sale\Compatible\CDBResult $result, $navStart)
    {
    }
}
class OrderPropertyValuesQuery extends \Bitrix\Sale\Compatible\OrderQuery
{
    /**
     * @param array $rows
     * @return array
     */
    protected function prepareCompatibleRows(array $rows)
    {
    }
}
class OrderQueryLocation extends \Bitrix\Sale\Compatible\OrderQuery
{
    protected $locationFieldMap = array();
    public function addLocationRuntimeField($fieldName, $ref = false)
    {
    }
    protected function mapLocationRuntimeField($field, $asFilter = false)
    {
    }
}
final class Test
{
    static function assertLastQuery($name, $query)
    {
    }
    static function run()
    {
    }
}