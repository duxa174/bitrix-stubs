<?php

namespace Bitrix\Sender\Posting\ThreadStrategy;

abstract class AbstractThreadStrategy implements \Bitrix\Sender\Posting\ThreadStrategy\IThreadStrategy
{
    /**
     * @var int
     */
    protected $threadId;
    protected $postingId;
    protected $select;
    protected $filter;
    protected $runtime;
    /**
     *
     * @return array
     */
    public function fillThreads() : void
    {
    }
    /**
     * @param $limit
     *
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getRecipients(int $limit) : \Bitrix\Main\ORM\Query\Result
    {
    }
    protected abstract function setRuntime() : void;
    protected abstract function setFilter() : void;
    protected function setSelect() : void
    {
    }
    /**
     * lock thread for duplicate select
     * @return int|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function lockThread() : void
    {
    }
    /**
     * lock table from selecting of the thread
     * @return bool
     * @throws SqlQueryException
     * @throws \Bitrix\Main\SystemException
     */
    protected function lock()
    {
    }
    /**
     * update status with expire date
     * @param $threadId
     * @param $status
     */
    public function updateStatus(string $status) : bool
    {
    }
    /**
     * unlock table for select
     * @return bool
     * @throws SqlQueryException
     * @throws \Bitrix\Main\SystemException
     */
    protected function unlock()
    {
    }
    /**
     * checking that all threads are completed
     * @return bool
     */
    public function hasUnprocessedThreads() : bool
    {
    }
    /**
     * get current thread id
     * @return int
     */
    public function getThreadId() : ?int
    {
    }
    /**
     * get last thread number
     * @return int
     */
    public function lastThreadId() : int
    {
    }
    /**
     * @param int $postingId
     *
     * @return TenThreadsStrategy
     */
    public function setPostingId(int $postingId) : \Bitrix\Sender\Posting\ThreadStrategy\IThreadStrategy
    {
    }
    /**
     * wait while threads are calculating
     * @return bool
     */
    protected function checkLock()
    {
    }
    /**
     * Finalize thread activity
     */
    public function finalize()
    {
    }
    private function checkToFinalizeStatus()
    {
    }
}