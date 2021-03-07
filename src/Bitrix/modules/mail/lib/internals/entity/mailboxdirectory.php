<?php

namespace Bitrix\Mail\Internals\Entity;

class MailboxDirectory extends \Bitrix\Mail\Internals\EO_MailboxDirectory implements \JsonSerializable
{
    private $children = [];
    public function isSync()
    {
    }
    public function isDisabled()
    {
    }
    public function isSpam()
    {
    }
    public function isTrash()
    {
    }
    public function isDraft()
    {
    }
    public function isOutcome()
    {
    }
    public function isIncome()
    {
    }
    public function hasChildren()
    {
    }
    public function getChildren()
    {
    }
    public function addChild($dir)
    {
    }
    public function getCountChildren()
    {
    }
    public function getCountSyncChildren()
    {
    }
    public function getFormattedName()
    {
    }
    public function getName()
    {
    }
    public function isSyncLock()
    {
    }
    public function startSyncLock()
    {
    }
    public function stopSyncLock()
    {
    }
    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
    }
}