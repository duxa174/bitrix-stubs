<?php

namespace Bitrix\Sender\Message;

/**
 * Interface iBeforeAfter
 * @package Bitrix\Sender\Message
 */
interface iBeforeAfter
{
    public function onBeforeStart() : \Bitrix\Main\Result;
    public function onAfterEnd() : \Bitrix\Main\Result;
}