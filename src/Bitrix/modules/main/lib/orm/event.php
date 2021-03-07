<?php

namespace Bitrix\Main\ORM;

class Event extends \Bitrix\Main\Event
{
    protected $entity;
    protected $entityEventType;
    /**
     * @param Entity $entity
     * @param string $type
     * @param array  $parameters
     * @param bool   $withNamespace
     */
    public function __construct(\Bitrix\Main\ORM\Entity $entity, $type, array $parameters = array(), $withNamespace = false)
    {
    }
    /**
     * Returns entity
     */
    public function getEntity()
    {
    }
    /**
     * Checks the result of the event for errors, fills the Result object.
     * Returns true on errors, false on no errors.
     *
     * @param Result $result
     * @return bool
     */
    public function getErrors(\Bitrix\Main\ORM\Data\Result $result)
    {
    }
    /**
     * Merges the data fields set in the event handlers with the source fields.
     * Returns a merged array of the data fields from the all event handlers.
     *
     * @param array $data
     * @return array
     */
    public function mergeFields(array $data)
    {
    }
    public function mergeObjectFields(\Bitrix\Main\ORM\Objectify\EntityObject $object)
    {
    }
    public function send($sender = null)
    {
    }
}