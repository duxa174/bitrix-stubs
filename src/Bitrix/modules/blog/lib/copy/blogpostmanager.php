<?php

namespace Bitrix\Blog\Copy;

class BlogPostManager
{
    private $executiveUserId;
    private $blogPostIdsToCopy = [];
    private $features = [];
    private $changedRights = [];
    private $result;
    private $mapIdsCopiedPosts = [];
    public function __construct($executiveUserId, array $blogPostIdsToCopy)
    {
    }
    /**
     * Writes features to the copy queue.
     *
     * @param array $features
     */
    public function setFeatures(array $features)
    {
    }
    public function setChangedRights($changedRights)
    {
    }
    public function startCopy()
    {
    }
    public function getMapIdsCopiedPosts()
    {
    }
    private function getContainerCollection()
    {
    }
    private function getBlogPostCopier(\Bitrix\Blog\Copy\Implement\BlogPost $blogPostImplementer)
    {
    }
    private function getBlogPostImplementer()
    {
    }
    private function getBlogCommentCopier()
    {
    }
}