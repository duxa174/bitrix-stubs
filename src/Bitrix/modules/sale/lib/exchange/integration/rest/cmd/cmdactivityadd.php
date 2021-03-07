<?php

namespace Bitrix\Sale\Exchange\Integration\Rest\Cmd;

class CmdActivityAdd extends \Bitrix\Sale\Exchange\Integration\Rest\Cmd\CmdBase
{
    const ACTIVITY_PRIORITY_MEDIUM = 2;
    //\CCrmActivityPriority::Medium,
    const ACTIVITY_PROVIDER_ID = 'REST_APP';
    const ACTIVITY_PROVIDER_TYPE_ID = 'ESHOP';
    const ACTIVITY_TYPE_ID = 6;
    const CONTENT_TYPE_PLAIN_TEXT = 1;
    //\CCrmContentType::PlainText,
    const ACTIVITY_NOTIFY_TYPE_NONE = 0;
    //\CCrmActivityNotifyType::None,
    public function fill()
    {
    }
    protected function getCmdName()
    {
    }
}