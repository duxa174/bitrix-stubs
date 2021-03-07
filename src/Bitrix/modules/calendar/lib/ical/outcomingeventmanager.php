<?php

namespace Bitrix\Calendar\ICal;

class OutcomingEventManager
{
    const ATTACHMENT_NAME = 'invite.ics';
    const CHARSET = 'utf-8';
    const CONTENT_TYPE = 'text/calendar';
    const MAX_SENT = 3;
    /**
     * @var string
     */
    private $method;
    /**
     * @var string
     */
    private $uid;
    /**
     * @var string
     */
    private $status;
    /**
     * @var array
     */
    private $eventFields;
    /**
     * @var array
     */
    private $attendees;
    /**
     * @var array
     */
    private $receiver;
    /**
     * @var array
     */
    private $sender;
    private $answer;
    /**
     * @var mixed
     */
    private $changeFields;
    private $counterInvitations;
    public static function getInstance(array $params) : \Bitrix\Calendar\ICal\OutcomingEventManager
    {
    }
    public function __construct(array $params)
    {
    }
    public function __serialize() : array
    {
    }
    public function __unserialize(array $data) : void
    {
    }
    public function inviteUser() : \Bitrix\Calendar\ICal\OutcomingEventManager
    {
    }
    public function replyInvitation() : \Bitrix\Calendar\ICal\OutcomingEventManager
    {
    }
    public function cancelInvitation() : \Bitrix\Calendar\ICal\OutcomingEventManager
    {
    }
    public function getUId() : string
    {
    }
    public function incrementCounterInvitations()
    {
    }
    public function getEventId()
    {
    }
    public function getEvent()
    {
    }
    public function getMethod()
    {
    }
    public function getCountInvitations()
    {
    }
    public function getStatus() : string
    {
    }
    public function getReceiver()
    {
    }
    private function getSenderAddress() : string
    {
    }
    private function getReceiverAddress() : string
    {
    }
    private function getBodyMessage() : string
    {
    }
    private function getSubjectMessage() : string
    {
    }
    private function getFiles() : array
    {
    }
    private function getRequestContent() : array
    {
    }
    private function getRequestMailEventFields() : array
    {
    }
    private function getReplyMailEventFields()
    {
    }
    private function getCancelMailEventFields()
    {
    }
    private function getAttendeesList() : string
    {
    }
    private function getOrganizerName() : string
    {
    }
    private function getFilesLink()
    {
    }
    private function getMessageId() : string
    {
    }
    private function getMessageReplyTo() : string
    {
    }
    private function getReplyContent() : array
    {
    }
    private function getReplyBodyMessage()
    {
    }
    private function getCancelContent() : array
    {
    }
    private function getDateForTemplate()
    {
    }
    private function getEditTitle()
    {
    }
    private function getChangeFieldsString()
    {
    }
    private function checkOrganizerEmail()
    {
    }
}