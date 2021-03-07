<?php

namespace Bitrix\Socialnetwork\CommentAux;

final class FileVersion extends \Bitrix\Socialnetwork\CommentAux\Base
{
    const TYPE = 'FILEVERSION';
    const POST_TEXT = 'commentAuxFileVersion';
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