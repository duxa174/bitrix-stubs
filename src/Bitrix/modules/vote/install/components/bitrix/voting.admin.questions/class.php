<?php

class CVoteAdminQuestions extends \CBitrixComponent
{
    /**@var CAdminSorting */
    public $sort;
    /** @var CAdminList */
    public $list;
    /** @var ErrorCollection */
    protected $errorCollection;
    protected $rights = "D";
    /** @var string */
    protected $gridId = 'grid_vote_questions';
    /** @var $vote \Bitrix\Vote\Vote */
    protected $vote;
    public function __construct($component = \null)
    {
    }
    public function executeComponent()
    {
    }
    protected function prepareParams()
    {
    }
    protected function processAction()
    {
    }
    protected function updateQuestion($id, $data, $files = \null)
    {
    }
    protected function deleteQuestion($id)
    {
    }
    protected function activateQuestion(int $id, bool $activate)
    {
    }
    /**
     * @return Application|\Bitrix\Main\HttpApplication|\CAllMain|\CMain
     */
    protected function getApplication()
    {
    }
    /**
     * @return array|bool|\CAllUser|\CUser
     */
    protected function getCurrentUser()
    {
    }
    protected function initFilter()
    {
    }
}