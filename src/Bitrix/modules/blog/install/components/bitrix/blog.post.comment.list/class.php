<?php

class CBlogPostCommentList extends \CBlogPostCommentEdit
{
    protected function createCacheId($uniqueString = "")
    {
    }
    /**
     * Create list of ALL comments for this post, but with just base parameters.
     * Need to small cache of comments list, to convert them in tree or flat list.
     * And next we can add additional params only for visible elements.
     */
    protected function createCommentsList()
    {
    }
    protected function createAdditionalCommentsParams()
    {
    }
    protected function createAdditionalCommentParams($comment, \blogTextParser $textParser)
    {
    }
    protected function markNewComments()
    {
    }
    private function addTitleToMessage($message, $title)
    {
    }
    private function createCacheIdByPagination()
    {
    }
}