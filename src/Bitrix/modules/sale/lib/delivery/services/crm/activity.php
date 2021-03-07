<?php

namespace Bitrix\Sale\Delivery\Services\Crm;

/**
 * Class Activity
 * @package Bitrix\Sale\Delivery\Services\Crm
 * @internal
 */
final class Activity
{
    /** @var string|null */
    private $subject;
    /** @var bool */
    private $isHandleable = true;
    /** @var bool */
    private $isCompleted = false;
    /** @var string|null */
    private $status;
    /** @var int|null */
    private $responsibleId;
    /** @var int|null */
    private $priority;
    /** @var int|null */
    private $authorId;
    /** @var array */
    private $bindings = [];
    /** @var array */
    private $fields = [];
    /**
     * @return string|null
     */
    public function getSubject() : ?string
    {
    }
    /**
     * @param string|null $subject
     * @return Activity
     */
    public function setSubject(?string $subject) : \Bitrix\Sale\Delivery\Services\Crm\Activity
    {
    }
    /**
     * @return bool
     */
    public function isHandleable() : bool
    {
    }
    /**
     * @param bool $isHandleable
     * @return Activity
     */
    public function setIsHandleable(bool $isHandleable) : \Bitrix\Sale\Delivery\Services\Crm\Activity
    {
    }
    /**
     * @return bool
     */
    public function isCompleted() : bool
    {
    }
    /**
     * @param bool $isCompleted
     * @return Activity
     */
    public function setIsCompleted(bool $isCompleted) : \Bitrix\Sale\Delivery\Services\Crm\Activity
    {
    }
    /**
     * @return string|null
     */
    public function getStatus() : ?string
    {
    }
    /**
     * @param string|null $status
     * @return Activity
     */
    public function setStatus(?string $status) : \Bitrix\Sale\Delivery\Services\Crm\Activity
    {
    }
    /**
     * @return int|null
     */
    public function getResponsibleId() : ?int
    {
    }
    /**
     * @param int|null $responsibleId
     * @return Activity
     */
    public function setResponsibleId(?int $responsibleId) : \Bitrix\Sale\Delivery\Services\Crm\Activity
    {
    }
    /**
     * @return int|null
     */
    public function getPriority() : ?int
    {
    }
    /**
     * @param int|null $priority
     * @return Activity
     */
    public function setPriority(?int $priority) : \Bitrix\Sale\Delivery\Services\Crm\Activity
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
     * @return Activity
     */
    public function setAuthorId(?int $authorId) : \Bitrix\Sale\Delivery\Services\Crm\Activity
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
     * @return Activity
     */
    public function setBindings(array $bindings) : \Bitrix\Sale\Delivery\Services\Crm\Activity
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
     * @return Activity
     */
    public function setFields(array $fields) : \Bitrix\Sale\Delivery\Services\Crm\Activity
    {
    }
}