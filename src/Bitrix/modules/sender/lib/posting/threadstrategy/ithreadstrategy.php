<?php

namespace Bitrix\Sender\Posting\ThreadStrategy;

interface IThreadStrategy
{
    public const TEN = 'Ten';
    public const SINGLE = 'Single';
    function getRecipients(int $limit) : \Bitrix\Main\ORM\Query\Result;
    function fillThreads() : void;
    function lockThread() : void;
    function hasUnprocessedThreads() : bool;
    function getThreadId() : ?int;
    function setPostingId(int $postingId) : \Bitrix\Sender\Posting\ThreadStrategy\IThreadStrategy;
    function updateStatus(string $status) : bool;
    function lastThreadId() : int;
}