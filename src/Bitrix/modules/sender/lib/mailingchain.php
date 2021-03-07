<?php

namespace Bitrix\Sender;

/**
 * Class MailingChainTable
 * @package Bitrix\Sender
 * @internal
 */
class MailingChainTable extends \Bitrix\Main\Entity\DataManager
{
    const STATUS_NEW = 'N';
    const STATUS_SEND = 'S';
    const STATUS_PAUSE = 'P';
    const STATUS_WAIT = 'W';
    const STATUS_PLAN = 'T';
    const STATUS_END = 'Y';
    const STATUS_CANCEL = 'C';
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
     * Returns validators for EMAIL_FROM field.
     *
     * @return array
     */
    public static function validateEmailForm()
    {
    }
    /**
     * @param string $value Value.
     * @return mixed
     */
    public static function checkEmail($value)
    {
    }
    /**
     * Copy mailing chain.
     *
     * @param integer $id Chain id
     * @return int|null Copied chain id
     */
    public static function copy($id)
    {
    }
    /**
     * @param integer $mailingChainId
     * @param bool $prepareFields
     *
     * @return int|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function initPosting($mailingChainId, $prepareFields = true)
    {
    }
    /**
     * @param Entity\Event $event
     * @return Entity\EventResult
     */
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * @param Entity\Event $event
     * @return Entity\EventResult
     */
    public static function onBeforeUpdate(\Bitrix\Main\Entity\Event $event)
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
    public static function onDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * @param Entity\Event $event
     * @return void
     */
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * @param $id
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function isReadyToSend($id)
    {
    }
    /**
     * @param $id
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function isManualSentPartly($id)
    {
    }
    /**
     * Return true if chain will auto send.
     *
     * @param $id
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function isAutoSend($id)
    {
    }
    /**
     * Return true if chain can resend mails to recipients who have error sending
     *
     * @param $id
     * @return bool
     */
    public static function canReSendErrorRecipients($id)
    {
    }
    /**
     * Change status of recipients and mailing chain for resending mails to recipients who have error sending
     *
     * @param $id
     * @return void
     */
    public static function prepareReSendErrorRecipients($id)
    {
    }
    /**
     * @param $mailingId
     */
    public static function setStatusNew($mailingId)
    {
    }
    /**
     * @return array
     */
    public static function getStatusList()
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getDefaultEmailFromList()
    {
    }
    /**
     * @return array
     */
    public static function getEmailFromList()
    {
    }
    /**
     * @param $email
     */
    public static function setEmailFromToList($email)
    {
    }
    /**
     * @return array
     */
    public static function getEmailToMeList()
    {
    }
    /**
     * @param $email
     */
    public static function setEmailToMeList($email)
    {
    }
    /**
     * @param string|null $templateType Template type.
     * @param string|null $templateId Template ID.
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function onPresetTemplateList($templateType = null, $templateId = null)
    {
    }
    /**
     * Get message of mailing chain by ID.
     *
     * @param string $id ID of mailing chain
     * @return null|string
     * @internal
     */
    public static function getMessageById($id)
    {
    }
}
class MailingAttachmentTable extends \Bitrix\Main\Entity\DataManager
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