<?php

class CMailClientAjaxController extends \Bitrix\Main\Engine\Controller
{
    /** @var bool */
    private $isCrmEnable = \false;
    /**
     * Initializes controller.
     * @return void
     */
    protected function init()
    {
    }
    /**
     * Common operations before process action.
     *
     * @param \Bitrix\Main\Engine\Action $action Action.
     *
     * @return bool If method will return false, then action will not execute.
     * @throws Main\LoaderException
     */
    protected function processBeforeAction(\Bitrix\Main\Engine\Action $action)
    {
    }
    /**
     * Move messages to folder.
     * @param string[] $ids
     * @param string $folder
     */
    public function moveToFolderAction($ids, $folder)
    {
    }
    protected function markMessages($ids, $seen = \true)
    {
    }
    /**
     * Mark messages as unseen.
     * @param string[] $ids
     */
    public function markAsUnseenAction($ids)
    {
    }
    /**
     * Mark messages as seen.
     * @param string[] $ids
     */
    public function markAsSeenAction($ids)
    {
    }
    /**
     * Restore messages from spam.
     * @param $ids
     */
    public function restoreFromSpamAction($ids)
    {
    }
    /**
     * Marks messages as spam.
     * @param string[] $ids
     *
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function markAsSpamAction($ids)
    {
    }
    /**
     * Deletes messages.
     * @param string[] $ids
     */
    public function deleteAction($ids)
    {
    }
    /**
     * @param $ids
     *
     * @return \Bitrix\Main\Result
     */
    private function getIds($ids)
    {
    }
    /**
     * Generates message Id.
     * @param string $hostname
     *
     * @return string
     */
    private function generateMessageId($hostname)
    {
    }
    /**
     * Generates message Id for CRM email.
     * @param string $hostname
     * @param string $urn
     *
     * @return string
     */
    private function generateCrmMessageId($hostname, $urn)
    {
    }
    /**
     * Gets host name.
     *
     * @return string
     */
    private function getHostname()
    {
    }
    /**
     * @param $id
     * @param $dir
     * @param $onlySyncCurrent
     *
     * @return array
     * @throws Exception
     */
    public function syncMailboxAction($id, $dir, $onlySyncCurrent = \false)
    {
    }
    /**
     * Sends email.
     *
     * @param array $data
     *
     * @return void
     *
     * @throws Exception
     * @throws Main\NotImplementedException
     * @throws Main\SystemException
     */
    public function sendMessageAction($data)
    {
    }
    /**
     * Creates crm activity.
     *
     * @param string $messageId
     *
     * @return array|void
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function createCrmActivityAction($messageId, $level = 1)
    {
    }
    /**
     * Removes crm activity.
     * @param string $messageId
     *
     * @return array|void
     * @throws Main\ArgumentException
     * @throws Main\DB\SqlQueryException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function removeCrmActivityAction($messageId)
    {
    }
    /**
     * Append contact reference.
     *
     * @param \Bitrix\Main\Mail\Address[] $addressList Email address list.
     * @param string $fromField Email field TO|CC|BCC.
     *
     * @return void
     * @throws Main\ArgumentException
     * @throws Main\Db\SqlQueryException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function appendMailContacts($addressList, $fromField = '')
    {
    }
    public function icalAction()
    {
    }
}