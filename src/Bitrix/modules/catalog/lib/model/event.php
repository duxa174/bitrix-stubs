<?php

namespace Bitrix\Catalog\Model;

class Event extends \Bitrix\Main\Event
{
    /** @var Entity */
    protected $entity = null;
    protected static $catalogHandlerExist = [];
    private static $keys = ['fields', 'external_fields', 'actions'];
    public function __construct(\Bitrix\Catalog\Model\Entity $entity, string $type, array $parameters = [])
    {
    }
    /**
     * Checks the result of the event for errors, fills the Result object.
     * Returns true on errors, false on no errors.
     *
     * @param Main\Result $result
     * @return bool
     */
    public function getErrors(\Bitrix\Main\Result $result) : bool
    {
    }
    /**
     * Merge data from handlers.
     *
     * @param array $data
     * @return void
     */
    public function mergeData(array &$data) : void
    {
    }
    /**
     * Search handlers for event.
     *
     * @param Entity $entity
     * @param string $type
     * @return bool
     */
    public static function existEventHandlers(\Bitrix\Catalog\Model\Entity $entity, string $type) : bool
    {
    }
    /**
     * Search handlers for event by id.
     *
     * @param string $id
     * @return bool
     */
    public static function existEventHandlersById(string $id) : bool
    {
    }
}