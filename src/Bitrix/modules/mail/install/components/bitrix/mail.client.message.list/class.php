<?php

class CMailClientMessageListComponent extends \CBitrixComponent
{
    protected $componentId;
    protected $mailbox;
    protected $foldersItems;
    /** @var Mailbox */
    protected $mailboxHelper;
    public function getComponentId()
    {
    }
    public function executeComponent()
    {
    }
    /**
     * @param $items
     * @param \Bitrix\Main\UI\PageNavigation $navigation
     *
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws Main\LoaderException
     */
    private function getRows($items, $navigation)
    {
    }
    /**
     * @param $emails
     *
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getAvatarConfigs($items)
    {
    }
    private function getGridActionsData()
    {
    }
    private function getSenderColumnCell($avatarParams)
    {
    }
    private function getDirsForFilter()
    {
    }
    private function setFilterSettings($dirsForFilter)
    {
    }
    private function setFilterPresets()
    {
    }
    private function prepareDirsHierarchyForGrid()
    {
    }
    private function dirsTreeForGrid($counts)
    {
    }
    private function prepareDirsMenu(&$list)
    {
    }
    private function arrayDiffRecursive($arr1, $arr2)
    {
    }
    private function rememberCurrentMailboxId($mailboxId)
    {
    }
}