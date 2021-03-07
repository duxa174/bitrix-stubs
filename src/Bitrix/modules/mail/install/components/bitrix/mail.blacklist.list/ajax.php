<?php

/**
 * Class MailBlacklistAjaxController
 * @package Bitrix\Main\Controller
 */
class MailBlacklistAjaxController extends \Bitrix\Main\Engine\Controller
{
    /**
     * @return array
     */
    public function getPopupContentAction()
    {
    }
    /**@inheritdoc */
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
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function deleteAction($id)
    {
    }
    /**
     * @param $emails
     * @return array
     */
    private function sanitizeEmails($emails)
    {
    }
    /**
     * @return bool
     */
    private function isUserAdmin()
    {
    }
}