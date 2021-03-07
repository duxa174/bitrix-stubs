<?php

namespace Bitrix\Socialnetwork\CommentAux;

final class TaskInfo extends \Bitrix\Socialnetwork\CommentAux\Base
{
    const TYPE = 'TASKINFO';
    const POST_TEXT = 'commentAuxTaskInfo';
    public function getParamsFromFields($fields = array())
    {
    }
    public function getText()
    {
    }
    public function canDelete()
    {
    }
    public function checkRecalcNeeded($fields, $params)
    {
    }
    public function sendRatingNotification($fields = array(), $ratingVoteParams = array())
    {
    }
}