<?php

namespace Bitrix\Main\Mail;

/**
 * Class Tracking
 * @package Bitrix\Main\Mail
 */
class Tracking
{
    const SIGN_SALT_ACTION = 'event_mail_tracking';
    const onRead = 'OnMailEventMailRead';
    const onClick = 'OnMailEventMailClick';
    const onUnsubscribe = 'OnMailEventSubscriptionDisable';
    const onChangeStatus = 'OnMailEventMailChangeStatus';
    /**
     * Get tag.
     *
     * @param string $moduleId Module ID.
     * @param array $fields Fields.
     * @return string
     */
    public static function getTag($moduleId, $fields)
    {
    }
    /**
     * Parse tag.
     *
     * @param string $tag Tag.
     * @return array
     */
    public static function parseTag($tag)
    {
    }
    /**
     * Get signed tag.
     *
     * @param string $moduleId Module ID.
     * @param array $fields Fields.
     * @return string
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public static function getSignedTag($moduleId, $fields)
    {
    }
    /**
     * Parse signed tag.
     *
     * @param string $signedTag Signed tag.
     * @return array
     * @throws BadSignatureException
     * @throws Main\ArgumentTypeException
     */
    public static function parseSignedTag($signedTag)
    {
    }
    /**
     * Get read page link
     *
     * @param string $moduleId Module ID.
     * @param array $fields Fields.
     * @param string|null $urlPage Url of custom click page.
     * @return string
     * @throws SystemException
     */
    public static function getLinkRead($moduleId, $fields, $urlPage = null)
    {
    }
    /**
     * Get click page link.
     *
     * @param string $moduleId Module ID.
     * @param array $fields Fields.
     * @param string|null $urlPage Url of custom click page.
     * @return string
     * @throws SystemException
     */
    public static function getLinkClick($moduleId, $fields, $urlPage = null)
    {
    }
    /**
     * Get link for unsubscribe.
     *
     * @param string $moduleId Module ID.
     * @param array $fields Fields.
     * @param string|null $urlPage Url of custom unsubscribe page.
     * @return string
     * @throws Main\ArgumentTypeException
     * @throws SystemException
     */
    public static function getLinkUnsub($moduleId, $fields, $urlPage = null)
    {
    }
    /**
     * @param $tag
     * @param $opCode
     * @param null $uri
     * @return null|string
     * @throws SystemException
     */
    protected static function getTaggedLink($tag, $opCode, $uri = null)
    {
    }
    /**
     * Get sign.
     *
     * @param string $value Value.
     * @return string
     * @throws Main\ArgumentTypeException
     */
    public static function getSign($value)
    {
    }
    /**
     * Verify sign.
     *
     * @param string $value Value.
     * @param string $signature Signature.
     * @return bool
     */
    public static function validateSign($value, $signature)
    {
    }
    /**
     * Get subscription list.
     *
     * @param array $data Data.
     * @return array|bool
     */
    public static function getSubscriptionList($data)
    {
    }
    /**
     * Subscribe.
     *
     * @param array $data Data.
     * @return bool
     */
    public static function subscribe($data)
    {
    }
    /**
     * Unsubscribe.
     *
     * @param array $data Data.
     * @return bool
     */
    public static function unsubscribe($data)
    {
    }
    /**
     * Click.
     *
     * @param array $data Data.
     * @return bool
     */
    public static function click(array $data)
    {
    }
    /**
     * Track click from request.
     *
     * @return void
     */
    public static function clickFromRequest()
    {
    }
    /**
     * Track read from request.
     *
     * @return bool
     */
    public static function readFromRequest()
    {
    }
    /**
     * Read.
     *
     * @param array $data Data.
     * @return bool
     */
    public static function read(array $data)
    {
    }
    /**
     * Change status of sending.
     *
     * @param Callback\Result $callbackResult Callback result instance.
     * @return bool
     */
    public static function changeStatus(\Bitrix\Main\Mail\Callback\Result $callbackResult)
    {
    }
}