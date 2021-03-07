<?php

namespace Bitrix\Catalog;

/**
 * Class SubscribeTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> DATE_FROM datetime mandatory
 * <li> DATE_TO datetime optional
 * <li> USER_CONTACT string mandatory
 * <li> CONTACT_TYPE int mandatory
 * <li> USER_ID int optional
 * <li> USER reference to {@link \Bitrix\Main\UserTable}
 * <li> ITEM_ID int mandatory
 * <li> PRODUCT reference to {@link ProductTable}
 * <li> IBLOCK_ELEMENT reference to {@link \Bitrix\Iblock\ElementTable}
 * <li> NEED_SENDING bool default=N
 * <li> SITE_ID int mandatory
 * </ul>
 *
 * @package Bitrix\Catalog
 *
 **/
class SubscribeTable extends \Bitrix\Main\Entity\DataManager
{
    const EVENT_ADD_CONTACT_TYPE = 'onAddContactType';
    const CONTACT_TYPE_EMAIL = 1;
    const LIMIT_SEND = 50;
    const AGENT_TIME_OUT = 10;
    const AGENT_INTERVAL = 10;
    private static $oldProductAvailable = array();
    private static $agentNoticeCreated = false;
    private static $agentRepeatedNoticeCreated = false;
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns validators for NEED_SENDING field.
     *
     * @return array
     */
    public static function validateNeedSending()
    {
    }
    /**
     * Returns validators for SITE_ID field.
     *
     * @return array
     */
    public static function validateSiteId()
    {
    }
    /**
     * Handler onUserDelete for change subscription data when removing a user.
     *
     * @param integer $userId Id user.
     * @return bool
     */
    public static function onUserDelete($userId)
    {
    }
    /**
     * Handler onIblockElementDelete for delete the data on the subscription in case of removal of product.
     *
     * @param integer $productId Id product.
     * @return bool
     */
    public static function onIblockElementDelete($productId)
    {
    }
    /**
     * Handler OnSaleOrderSaved to unsubscribe when ordering.
     *
     * @param Event $event Object event.
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function onSaleOrderSaved(\Bitrix\Main\Event $event)
    {
    }
    /**
     * The method returns an array of available types and allows you to add a type using an event.
     * When you add a new type of need to add a 'RULE' to validate the field 'USER_CONTACT'.
     * And also a function that will send messages to the specified type.
     *
     * @return array array(typeId=>array(ID => typeId, NAME => typeName, RULE => validateRule, HANDLER => function())).
     */
    public static function getContactTypes()
    {
    }
    /**
     * Handler onAddContactType. Adding a new contact type.
     *
     * @param array &$contactTypes Contact type.
     * @return void
     */
    public static function onAddContactType(&$contactTypes)
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     * Method for send a notification to subscribers about positive change available.
     *
     * @param integer $productId Id product.
     * @param array $fields An array of event data.
     * @return bool
     */
    public static function onProductUpdate($productId, $fields)
    {
    }
    /**
     * Method OnProductSetAvailableUpdate for send a notification to subscribers about positive change available.
     *
     * @param integer $productId Id product.
     * @param array $fields An array of event data.
     * @return bool
     */
    public static function onProductSetAvailableUpdate($productId, $fields)
    {
    }
    /**
     * The method runs the agent to send notifications to subscribers.
     *
     * @param integer $productId Id product.
     * @return bool
     */
    public static function runAgentToSendNotice($productId)
    {
    }
    /**
     * The method runs the agent to send repeated notifications to subscribers.
     *
     * @param integer $productId Id product.
     * @return bool
     */
    public static function runAgentToSendRepeatedNotice($productId)
    {
    }
    /**
     * The method checks permission the subscription for the product.
     *
     * @param string $subscribe The field value SUBSCRIBE of the product.
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function checkPermissionSubscribe($subscribe)
    {
    }
    /**
     * The method stores the value of availability of product before updating.
     *
     * @param integer $productId Product id.
     * @param string $available The field value AVAILABLE of the product.
     * @return bool
     */
    public static function setOldProductAvailable($productId, $available)
    {
    }
    /**
     * Agent function. Get the necessary data and send notifications to users.
     *
     * @return string
     */
    public static function sendNotice()
    {
    }
    /**
     * Agent function. Get the necessary data and send notifications to users.
     *
     * @return string
     */
    public static function sendRepeatedNotice()
    {
    }
    /**
     * The method checks the old and new product availability.
     *
     * @param integer $productId Id product.
     * @param array $fields An array of event data.
     * @return bool
     */
    protected static function checkOldProductAvailable($productId, $fields)
    {
    }
    /**
     * Return true, if the last update products was completed less than self::AGENT_TIME_OUT seconds ago.
     *
     * @return bool
     */
    protected static function checkLastUpdate()
    {
    }
    protected static function getSubscriptionsData()
    {
    }
    protected static function prepareDataForNotice(array $listSubscribe, $eventName)
    {
    }
    private static function getPageUrl(array $subscribeData, array $detailPageUrlGroupByItemId)
    {
    }
    private static function getUnsubscribeUrl(array $subscribeData)
    {
    }
    private static function getProtocol()
    {
    }
    private static function getServerName($siteId)
    {
    }
    protected static function startEventNotification(array $dataSendToNotice)
    {
    }
    private static function setNeedSending(array $listSubscribeId, $needSending = 'N')
    {
    }
    private static function unSubscribe(array $listSubscribeId)
    {
    }
}