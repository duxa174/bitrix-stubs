<?php

namespace Bitrix\Sale\Delivery\Services\Crm;

/**
 * Class EstimationMessage
 * @package Bitrix\Sale\Delivery\Services\Crm
 * @internal
 */
final class EstimationMessage
{
    /** @var int|null */
    private $typeId;
    /** @var int|null */
    private $authorId;
    /** @var array */
    private $fields = [];
    /** @var array */
    private $bindings = [];
    /**
     * @return int|null
     */
    public function getTypeId() : ?int
    {
    }
    /**
     * @param int|null $typeId
     * @return EstimationMessage
     */
    public function setTypeId(?int $typeId) : \Bitrix\Sale\Delivery\Services\Crm\EstimationMessage
    {
    }
    /**
     * @return int|null
     */
    public function getAuthorId() : ?int
    {
    }
    /**
     * @param int|null $authorId
     * @return EstimationMessage
     */
    public function setAuthorId(?int $authorId) : \Bitrix\Sale\Delivery\Services\Crm\EstimationMessage
    {
    }
    /**
     * @return array
     */
    public function getFields() : array
    {
    }
    /**
     * @param array $fields
     * @return EstimationMessage
     */
    public function setFields(array $fields) : \Bitrix\Sale\Delivery\Services\Crm\EstimationMessage
    {
    }
    /**
     * @return array
     */
    public function getBindings() : array
    {
    }
    /**
     * @param array $bindings
     * @return EstimationMessage
     */
    public function setBindings(array $bindings) : \Bitrix\Sale\Delivery\Services\Crm\EstimationMessage
    {
    }
}