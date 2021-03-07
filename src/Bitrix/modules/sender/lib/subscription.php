<?php

namespace Bitrix\Sender;

class Subscription
{
    const MODULE_ID = 'sender';
    /**
     * Return link to unsubsribe page for subscriber
     *
     * @param array $fields
     * @return string
     */
    public static function getLinkUnsub(array $fields)
    {
    }
    /**
     * Return link to confirmation subscription page for subscriber.
     *
     * @param array $fields Fields.
     * @return string
     */
    public static function getLinkSub(array $fields)
    {
    }
    /**
     * Event handler.
     *
     * @param array $data Data.
     * @return mixed
     */
    public static function onMailEventSubscriptionList($data)
    {
    }
    protected static function getSubscriptions($data)
    {
    }
    /**
     * Event handler.
     *
     * @param array $data Data.
     * @return EventResult
     */
    public static function onMailEventSubscriptionEnable($data)
    {
    }
    /**
     * Event handler.
     *
     * @param array $data Data.
     * @return EventResult
     */
    public static function onMailEventSubscriptionDisable($data)
    {
    }
    protected static function unsubscribeRecipient($data)
    {
    }
    /**
     * Return list of subscriptions on mailings for subscriber.
     *
     * @param array $data Data.
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @deprecated
     */
    public static function getList($data)
    {
    }
    /**
     * Subscribe email for mailings.
     *
     * @param array $data Data.
     * @return bool
     */
    public static function subscribe(array $data)
    {
    }
    /**
     * Unsubscribe email from mailing.
     *
     * @param array $data Data.
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @deprecated
     */
    public static function unsubscribe($data)
    {
    }
    /**
     * Subscribe email for mailings and returns subscription id.
     *
     * @param string $code Code.
     * @param array $mailingIdList Mailing list.
     * @return integer|null
     */
    public static function add($code, array $mailingIdList)
    {
    }
    /**
     * Get mailing list allowed for subscription.
     *
     * @param array $params Parameters.
     * @return array
     */
    public static function getMailingList($params)
    {
    }
    /**
     * Send email with link for confirmation of subscription.
     *
     * @param string $email Email.
     * @param array $mailingIdList Mailing List.
     * @param string $siteId Site ID.
     * @return void
     */
    public static function sendEventConfirm($email, array $mailingIdList, $siteId)
    {
    }
    /**
     * Return true if email address was unsubscribed.
     *
     * @param int $mailingId Campaign ID.
     * @param string $code Recipient code.
     * @param int $typeId Recipient type ID.
     * @return bool
     */
    public static function isUnsubscibed($mailingId, $code, $typeId = \Bitrix\Sender\Recipient\Type::EMAIL)
    {
    }
}