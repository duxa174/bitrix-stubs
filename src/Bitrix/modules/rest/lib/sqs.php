<?php

namespace Bitrix\Rest;

class Sqs
{
    const DATA_CHARSET = "utf-8";
    const CATEGORY_DEFAULT = "default";
    const CATEGORY_IMPORTANT = "important";
    const CATEGORY_BOT = "bot";
    const CATEGORY_CRM = "crm";
    const CATEGORY_BIZPROC = "bizproc";
    const CATEGORY_TELEPHONY = "telephony";
    public static function queryItem($clientId, $url, $data, array $authData = array(), array $additional = array())
    {
    }
}