<?php

namespace Bitrix\Blog\Copy\Integration;

class Group implements \Bitrix\Socialnetwork\Copy\Integration\Feature
{
    const MODULE_ID = "blog";
    const QUEUE_OPTION = "BlogGroupQueue";
    const CHECKER_OPTION = "BlogGroupChecker_";
    const STEPPER_OPTION = "BlogGroupStepper_";
    const STEPPER_CLASS = \Bitrix\Blog\Copy\Integration\GroupStepper::class;
    const ERROR_OPTION = "BlogGroupError_";
    private $executiveUserId;
    private $features = [];
    public function __construct($executiveUserId = 0, array $features = [])
    {
    }
    public function copy($groupId, $copiedGroupId)
    {
    }
    private function getBlogPostIdsByGroupId($groupId)
    {
    }
    // use it if need attach posts to another group
    private function attachGroupToPost($groupIdToCopy, $copiedGroupId)
    {
    }
    private function getBlogPosts($groupId)
    {
    }
    private function getSonetBlogPostRights($blogPostId)
    {
    }
    private function addToQueue(int $copiedGroupId)
    {
    }
}