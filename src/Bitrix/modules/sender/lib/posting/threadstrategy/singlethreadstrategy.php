<?php

namespace Bitrix\Sender\Posting\ThreadStrategy;

class SingleThreadStrategy extends \Bitrix\Sender\Posting\ThreadStrategy\AbstractThreadStrategy
{
    public const THREADS_COUNT = 1;
    protected function setFilter() : void
    {
    }
    protected function setRuntime() : void
    {
    }
    /**
     * wait while threads are calculating
     * @return bool
     */
    protected function checkLock()
    {
    }
}