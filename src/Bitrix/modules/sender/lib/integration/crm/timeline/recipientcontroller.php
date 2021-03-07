<?php

namespace Bitrix\Sender\Integration\Crm\Timeline;

/**
 * Class RecipientController
 * @package Bitrix\Sender\Integration\Crm\Timeline
 */
class RecipientController extends \Bitrix\Crm\Timeline\EntityController
{
    /** @var static|null */
    protected static $instance = null;
    /**
     * Get instance.
     *
     * @return static
     */
    public static function getInstance()
    {
    }
    /**
     * Get entity type ID.
     *
     * @return int
     */
    public function getEntityTypeID()
    {
    }
    /**
     * Handler of event 'onCreate'.
     *
     * @param integer $id ID.
     * @param array $params Parameters.
     */
    public function onCreate($id, array $params)
    {
    }
    /**
     * Handler of event 'onModify'.
     *
     * @param integer $id ID.
     * @param array $params Parameters.
     */
    public function onModify($id, array $params)
    {
    }
    /**
     * Handler of event 'onDelete'.
     *
     * @param integer $ownerID Owner ID.
     * @param array $params Parameters.
     */
    public function onDelete($ownerID, array $params)
    {
    }
    /**
     * Prepare history data model.
     *
     * @param array $data Data.
     * @param array|null $options Options.
     * @return array
     */
    public function prepareHistoryDataModel(array $data, array $options = null)
    {
    }
}