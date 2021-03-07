<?php

namespace Bitrix\Socialnetwork\Ui\Preview;

class Post
{
    /**
     * Returns HTML code for blog post preview.
     * @param array $params Expected keys: postId, userId.
     * @return string
     */
    public static function buildPreview(array $params)
    {
    }
    /**
     * Returns attach to display in the messenger.
     * @param array $params Expected keys: postId, userId
     * @return \CIMMessageParamAttach | false
     */
    public static function getImAttach(array $params)
    {
    }
    /**
     * Returns true if current user has read access to the blog post.
     * @param array $params Allowed keys: postId, userId.
     * @param int $userId Current user's id.
     * @return bool
     */
    public static function checkUserReadAccess(array $params, $userId)
    {
    }
}