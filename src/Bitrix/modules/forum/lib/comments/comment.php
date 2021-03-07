<?php

namespace Bitrix\Forum\Comments;

class Comment extends \Bitrix\Forum\Comments\BaseObject
{
    const ERROR_PARAMS_MESSAGE = 'params0006';
    const ERROR_PERMISSION = 'params0007';
    const ERROR_MESSAGE_IS_NULL = 'params0008';
    const ERROR_PARAMS_TYPE = 'params0009';
    /* @var integer */
    private $id = 0;
    /* @var array */
    private $message = null;
    private function prepareFields(array &$params, \Bitrix\Forum\Internals\Error\ErrorCollection $errorCollectionParam)
    {
    }
    private function updateStatisticModule($messageId)
    {
    }
    /**
     * Adds new comment
     * @param array $params
     * @return array|false
     */
    public function add(array $params)
    {
    }
    /**
     * Edit new comment
     * @param array $params
     * @return array|false
     */
    public function edit(array $params)
    {
    }
    public function delete()
    {
    }
    public function moderate($show)
    {
    }
    public function canEdit()
    {
    }
    /**
     * @return bool
     */
    public function canEditOwn()
    {
    }
    /**
     * @return bool
     */
    public function canDelete()
    {
    }
    public function setComment($id)
    {
    }
    public function getComment()
    {
    }
    /**
     * Creates new
     * @param Feed $feed
     * @param $id
     * @return Comment
     */
    public static function createFromId(\Bitrix\Forum\Comments\Feed $feed, $id)
    {
    }
    /**
     * Creates new
     * @param Feed $feed
     * @return Comment
     */
    public static function create(\Bitrix\Forum\Comments\Feed $feed)
    {
    }
}