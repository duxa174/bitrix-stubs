<?php

namespace Bitrix\Socialnetwork\CommentAux;

abstract class Base
{
    const TYPE = 'BASE';
    const POST_TEXT = 'commentAuxBase';
    protected $params = array();
    protected $options = array();
    public static function className()
    {
    }
    public static function getType()
    {
    }
    public static function getPostText()
    {
    }
    public function getText()
    {
    }
    public function canDelete()
    {
    }
    public function getLiveParams()
    {
    }
    public function setParams(array $params)
    {
    }
    public function setOptions(array $options)
    {
    }
    public function getOptions()
    {
    }
    public function checkRecalcNeeded($fields, $params)
    {
    }
    public static function init($type = 'BASE', array $params = array(), array $options = array())
    {
    }
    public static final function findProvider($fields = array(), $options = array())
    {
    }
    public function sendLikeNotification()
    {
    }
    public function getParamsFromFields($fields = array())
    {
    }
    public function sendRatingNotification($fields = array(), $ratingVoteParams = array())
    {
    }
    protected final function getRatingCommentLink($params)
    {
    }
}