<?php

namespace Bitrix\Blog\Copy\Implement;

class BlogPost extends \Bitrix\Blog\Copy\Implement\Base
{
    const BLOG_POST_COPY_ERROR = "BLOG_POST_COPY_ERROR";
    /**
     * @var EntityCopier|null
     */
    private $blogCommentCopier = null;
    private $features = [];
    private $changedRights = [];
    protected $ufEntityObject = "BLOG_POST";
    protected $ufDiskFileField = "UF_BLOG_POST_FILE";
    /**
     * To copy comments needs comment copier.
     *
     * @param EntityCopier $blogCommentCopier Comment copier.
     */
    public function setBlogCommentCopier(\Bitrix\Main\Copy\EntityCopier $blogCommentCopier)
    {
    }
    /**
     * Writes features to the copy queue.
     *
     * @param array $features List features.
     */
    public function setFeatures(array $features)
    {
    }
    /**
     * To overwrite access rights to a post in a new entity, you need to specify the identifier of the new entity.
     *
     * @param array $changedRights Ration changed id.
     */
    public function setChangedRights($changedRights)
    {
    }
    /**
     * Adds entity.
     *
     * @param Container $container
     * @param array $fields
     * @return int|bool Added entity id or false.
     */
    public function add(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    public function update($blogPostId, array $fields)
    {
    }
    /**
     * Returns entity fields.
     *
     * @param Container $container
     * @param int $entityId
     * @return array $fields
     */
    public function getFields(\Bitrix\Main\Copy\Container $container, $entityId)
    {
    }
    /**
     * Preparing data before creating a new BlogPost.
     *
     * @param Container $container
     * @param array $fields List entity fields.
     * @return array $fields
     */
    public function prepareFieldsToCopy(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Starts copying children entities.
     *
     * @param Container $container
     * @param int $entityId BlogPost id.
     * @param int $copiedEntityId Copied BlogPost id.
     * @return Result
     */
    public function copyChildren(\Bitrix\Main\Copy\Container $container, $entityId, $copiedEntityId)
    {
    }
    /**
     * Copies vote.
     *
     * @param int $voteId Vote id.
     * @return int copied vote id.
     */
    public function copyVote(int $voteId) : int
    {
    }
    protected function getText($blogPostId)
    {
    }
    private function addCategory($blogPostId, array $fields)
    {
    }
    private function getSocnetRights($blogPostId)
    {
    }
    private function copyComments($blogPostId, $copiedBlogPostId)
    {
    }
    private function addNotify($blogPostId, $fields)
    {
    }
    private function getCopiedVoteId($voteId, array $result)
    {
    }
}