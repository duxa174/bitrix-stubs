<?php

namespace Bitrix\Bizproc\Automation\Engine;

class ConditionGroup
{
    const TYPE_FIELD = 'field';
    //const TYPE_VARIABLE = 'variable'; //reserved
    const JOINER_AND = 'AND';
    // 0
    const JOINER_OR = 'OR';
    // 1
    private $type;
    private $items = [];
    public function __construct(array $params = null)
    {
    }
    /**
     * @param BaseTarget $target Automation target.
     * @return bool
     */
    public function evaluate(\Bitrix\Bizproc\Automation\Target\BaseTarget $target)
    {
    }
    /**
     * @param array $documentType
     * @param array $documentId
     * @param array|null $document
     * @return bool
     */
    public function evaluateByDocument(array $documentType, array $documentId, array $document = null) : bool
    {
    }
    /**
     * @param string $type Type of condition.
     * @return ConditionGroup This instance.
     */
    public function setType($type)
    {
    }
    /**
     * @return mixed
     */
    public function getType()
    {
    }
    /**
     * @param Condition $condition Condition instance.
     * @param string $joiner Condition joiner.
     * @return $this This instance.
     */
    public function addItem(\Bitrix\Bizproc\Automation\Engine\Condition $condition, $joiner = self::JOINER_AND)
    {
    }
    /**
     * @return array Condition items.
     */
    public function getItems()
    {
    }
    /**
     * @return array Array presentation of condition group.
     */
    public function toArray()
    {
    }
    /**
     * @param array $childActivity Child activity array.
     * @param array $documentType
     * @return array New activity array.
     */
    public function createBizprocActivity(array $childActivity, array $documentType)
    {
    }
    /**
     * @param array &$activity Target activity array.
     * @param array $documentType
     * @return false|ConditionGroup Instance of false.
     */
    public static function convertBizprocActivity(array &$activity, array $documentType)
    {
    }
    /**
     * Convert values to internal format.
     * @param array $documentType
     * @return $this
     */
    public function internalizeValues(array $documentType) : self
    {
    }
    /**
     * Convert value to external format.
     * @param array $documentType
     * @return $this
     */
    public function externalizeValues(array $documentType) : self
    {
    }
    private static function convertExpressions($value, array $documentType)
    {
    }
    private static function unConvertExpressions($value, array $documentType)
    {
    }
}