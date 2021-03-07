<?php

namespace Bitrix\Socialnetwork\CommentAux;

final class Share extends \Bitrix\Socialnetwork\CommentAux\Base
{
    const TYPE = 'SHARE';
    const POST_TEXT = 'commentAuxShare';
    public function getParamsFromFields($fields = array())
    {
    }
    public function getText()
    {
    }
    public function sendRatingNotification($fields = array(), $ratingVoteParams = array())
    {
    }
    public function checkRecalcNeeded($fields, $params)
    {
    }
}