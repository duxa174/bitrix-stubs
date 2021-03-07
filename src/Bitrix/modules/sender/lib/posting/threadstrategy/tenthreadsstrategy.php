<?php

namespace Bitrix\Sender\Posting\ThreadStrategy;

class TenThreadsStrategy extends \Bitrix\Sender\Posting\ThreadStrategy\AbstractThreadStrategy
{
    public const THREADS_COUNT = 10;
    protected function setFilter() : void
    {
    }
    protected function setRuntime() : void
    {
    }
}