<?php

namespace Bitrix\Main\ORM\Query;

/**
 * Decorates base Result, adds new method fetchObject().
 * @package    bitrix
 * @subpackage main
 */
class Result extends \Bitrix\Main\DB\Result
{
    /** @var BaseResult */
    protected $result;
    /** @var Query */
    protected $query;
    /** @var Chain[][] Result chains map by entity path */
    protected $selectChainsMap = [];
    /** @var EntityObject|string Cache for object class of init entity */
    protected $objectClass;
    /** @var IdentityMap */
    protected $identityMap;
    /** @var bool Status of base object fetching initialization */
    protected $objectInitPassed = false;
    /** @var array Column names (chain aliases) of primary fields in result */
    protected $primaryAliases = [];
    /** @var string[] Fields available for for fetchObject, but hidden for fetch */
    protected $hiddenObjectFields;
    public function __construct(\Bitrix\Main\ORM\Query\Query $query, \Bitrix\Main\DB\Result $result)
    {
    }
    /**
     * @param string[] $hiddenObjectFields
     */
    public function setHiddenObjectFields($hiddenObjectFields)
    {
    }
    protected function hideObjectFields(&$row)
    {
    }
    public function getFields()
    {
    }
    public function getSelectedRowsCount()
    {
    }
    protected function fetchRowInternal()
    {
    }
    /**
     * @return null Actual type should be annotated by orm:annotate
     * @throws SystemException
     * @throws ArgumentException
     */
    public final function fetchObject()
    {
    }
    /**
     * @return null Actual type should be annotated by orm:annotate
     * @throws \Bitrix\Main\SystemException
     */
    public final function fetchCollection()
    {
    }
    /**
     * One-time initialization actions when fetch objects
     *
     * @param bool $asCollection
     *
     * @throws \Bitrix\Main\SystemException
     */
    protected function initializeFetchObject($asCollection = false)
    {
    }
    /**
     * Builds chains map by entity path
     */
    protected function buildSelectChainsMap()
    {
    }
    /**
     * Builds base object primary aliases map
     */
    protected function definePrimaryAliases()
    {
    }
    /**
     * Low-level data type cast
     */
    protected function setStrictValueConverters()
    {
    }
    /**
     * @param Entity $entity
     * @param $primaryValues
     * @param $objectValues
     *
     * @return EntityObject
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     */
    protected function composeRemoteObject($entity, $primaryValues, $objectValues)
    {
    }
    /**
     * Sets custom identity map
     *
     * @param IdentityMap $map
     *
     * @return Result
     */
    public function setIdentityMap(\Bitrix\Main\ORM\Objectify\IdentityMap $map)
    {
    }
    /**
     * @return IdentityMap
     */
    public function getIdentityMap()
    {
    }
    // decorate other methods
    public function getResource()
    {
    }
    public function setReplacedAliases(array $replacedAliases)
    {
    }
    public function addReplacedAliases(array $replacedAliases)
    {
    }
    public function setSerializedFields(array $serializedFields)
    {
    }
    public function addFetchDataModifier($fetchDataModifier)
    {
    }
    public function fetchRaw()
    {
    }
    public function fetch(\Bitrix\Main\Text\Converter $converter = null)
    {
    }
    public function fetchAll(\Bitrix\Main\Text\Converter $converter = null)
    {
    }
    public function getTrackerQuery()
    {
    }
    public function getConverters()
    {
    }
    public function setConverters($converters)
    {
    }
    public function setCount($n)
    {
    }
    public function getCount()
    {
    }
    public function getIterator()
    {
    }
}