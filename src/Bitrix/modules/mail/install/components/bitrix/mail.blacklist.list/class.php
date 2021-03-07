<?php

/**
 */
class MailBlacklistListComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable
{
    protected $gridId = 'MAIL_BLACKLIST_LIST';
    protected $filterId = 'MAIL_BLACKLIST_LIST';
    private $userId = 0;
    private $errorCollection;
    /** @inheritdoc */
    public function __construct(\CBitrixComponent $component = \null)
    {
    }
    /** @inheritdoc */
    public function executeComponent()
    {
    }
    /**
     * @param \Bitrix\Mail\EO_Blacklist_Collection $mails
     */
    private function makeRows($mails)
    {
    }
    /**
     * @return bool
     */
    private function isUserAdmin()
    {
    }
    /**
     * @return \Bitrix\Mail\EO_Blacklist_Collection|null
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getBlacklistMails()
    {
    }
    private function processDelete()
    {
    }
    /**
     * @param $errorMessage
     */
    private function addError($errorMessage)
    {
    }
    /**
     * @param $gridId
     */
    private function processGridActions($gridId)
    {
    }
    /**
     * @return array
     */
    public function configureActions()
    {
    }
    /**
     * @param $emails
     * @param bool $isForAllUsers
     * @return void|array
     * @throws Main\ArgumentException
     * @throws Main\Db\SqlQueryException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function addMailsAction($emails, $isForAllUsers = \false)
    {
    }
    /**
     * @param $id
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function deleteAction($id)
    {
    }
    private function runBeforeAction()
    {
    }
    private function deleteEmailAddressById($id)
    {
    }
    /**
     * @param $emails
     * @return array
     */
    private function sanitizeEmails($emails)
    {
    }
    private function checkMail($email)
    {
    }
    /**
     * @param \Bitrix\Mail\Internals\Entity\BlacklistEmail $email
     * @return bool
     */
    private function isAddressForAllUsers($email)
    {
    }
}