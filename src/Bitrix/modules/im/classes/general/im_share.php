<?php

class CIMShare
{
    const TYPE_POST = 'POST';
    const TYPE_TASK = 'TASK';
    function __construct($user_id = \null)
    {
    }
    public function Chat($messageId)
    {
    }
    public function Task($messageId, $date = '')
    {
    }
    public function Calendar($messageId, $date = '')
    {
    }
    public function Post($messageId)
    {
    }
    private function SonetPostCreateBlog($userId, $blogGroupId, $siteId)
    {
    }
    /**
     * @param Task $task
     * @return Task
     */
    private function prepareTaskFlags(\Bitrix\Tasks\Item\Task $task) : \Bitrix\Tasks\Item\Task
    {
    }
    private function PrepareText($quoteMessage)
    {
    }
    private function SendMessage($startText, $endText, $quoteMessage, $messageParams = array())
    {
    }
}