<?php

namespace Bitrix\Sender\Entity;

/**
 * Class Contact
 * @package Bitrix\Sender\Entity
 */
class Contact extends \Bitrix\Sender\Entity\Base
{
    /**
     * Get list.
     *
     * @param array $parameters Parameters.
     * @return \Bitrix\Main\DB\Result
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * Get default data.
     *
     * @return array
     */
    protected function getDefaultData()
    {
    }
    /**
     * Save data.
     *
     * @param integer|null $id ID.
     * @param array $data Data.
     * @return integer|null
     * @throws
     */
    protected function saveData($id = null, array $data)
    {
    }
    protected function saveDataLists($id, $setList, $subList, $unsubList)
    {
    }
    /**
     * Load data.
     *
     * @param integer $id ID.
     * @return array|null
     */
    public function loadData($id)
    {
    }
    /**
     * Remove.
     *
     * @return bool
     */
    public function remove()
    {
    }
    /**
     * Remove by contact ID.
     *
     * @param integer $id Contact ID.
     * @return bool
     */
    public static function removeById($id)
    {
    }
    /**
     * Remove from blacklist by contact ID.
     *
     * @param integer $id Contact ID.
     * @return bool
     */
    public static function removeFromBlacklistById($id)
    {
    }
    /**
     * Subscribe.
     *
     * @param integer|null $campaignId Campaign ID.
     * @return bool
     */
    public function subscribe($campaignId = null)
    {
    }
    /**
     * Unsubscribe.
     *
     * @param integer|null $campaignId Campaign ID.
     * @return bool
     */
    public function unsubscribe($campaignId = null)
    {
    }
    /**
     * Add to blacklist.
     *
     * @return bool
     */
    public function addToBlacklist()
    {
    }
    /**
     * Remove from blacklist.
     *
     * @return bool
     */
    public function removeFromBlacklist()
    {
    }
    /**
     * Add to list.
     *
     * @param int $listId List ID.
     * @return bool
     */
    public function addToList($listId)
    {
    }
    /**
     * Remove from list.
     *
     * @param int $listId List ID.
     * @return bool
     */
    public function removeFromList($listId)
    {
    }
}