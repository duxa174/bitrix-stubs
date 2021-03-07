<?php

namespace Bitrix\Sender;

class MailingTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns validators for DESCRIPTION field.
     *
     * @return array
     */
    public static function validateDescription()
    {
    }
    /**
     * @param Entity\Event $event
     * @return Entity\EventResult
     */
    public static function onAfterUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * @param Entity\Event $event
     * @return Entity\EventResult
     */
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /*
     *
     * @return \Bitrix\Main\DB\Result
     * */
    public static function getPresetMailingList(array $params = null)
    {
    }
    public static function checkFieldsChain(\Bitrix\Main\Entity\Result $result, $primary = null, array $fields)
    {
    }
    public static function updateChain($id, array $fields)
    {
    }
    public static function getChain($id)
    {
    }
    public static function updateChainTrigger($id)
    {
    }
    public static function setWasRunForOldData($id, $state)
    {
    }
    public static function getPersonalizeList($id)
    {
    }
    public static function getChainPersonalizeList($id)
    {
    }
    public static function getMailingSiteId($mailingId)
    {
    }
}
class MailingGroupTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
}
class MailingSubscriptionTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Get subscription list
     *
     * @param array $parameters
     * @return \Bitrix\Main\DB\Result
     */
    public static function getSubscriptionList(array $parameters = array())
    {
    }
    /**
     * Get un subscription list
     *
     * @param array $parameters
     * @return \Bitrix\Main\DB\Result
     */
    public static function getUnSubscriptionList(array $parameters = array())
    {
    }
    /**
     * Ad subscription row
     *
     * @param array $parameters
     * @return bool
     */
    public static function addSubscription(array $parameters = array())
    {
    }
    /**
     * Ad subscription row.
     *
     * @param array $parameters
     * @return bool
     */
    public static function addUnSubscription(array $parameters = array())
    {
    }
}