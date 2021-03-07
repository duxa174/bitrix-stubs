<?php

namespace Bitrix\Calendar\ICal;

class OutcomingAttachmentManager extends \Bitrix\Calendar\ICal\Basic\AttachmentManager
{
    private $event = [];
    private $attendees = [];
    private $attachment = '';
    private $method = '';
    private $uid = '';
    public function __construct($data, $attendees, $method)
    {
    }
    public function prepareRequestAttachment() : \Bitrix\Calendar\ICal\OutcomingAttachmentManager
    {
    }
    public function getAttachment() : string
    {
    }
    public function getUid()
    {
    }
    public function prepareReplyAttachment() : \Bitrix\Calendar\ICal\OutcomingAttachmentManager
    {
    }
    public function prepareCancelAttachment() : \Bitrix\Calendar\ICal\OutcomingAttachmentManager
    {
    }
    private function getReplyAddress() : string
    {
    }
    private function prepareRequestEvent()
    {
    }
}