<?php

namespace Bitrix\Blog\Copy\Implement;

class BlogComment extends \Bitrix\Blog\Copy\Implement\Base
{
    const BLOG_COMMENT_COPY_ERROR = "BLOG_COMMENT_COPY_ERROR";
    protected $ufEntityObject = "BLOG_COMMENT";
    protected $ufDiskFileField = "UF_BLOG_COMMENT_FILE";
    /**
     * Adds comment.
     *
     * @param Container $container
     * @param array $fields
     * @return int|bool return comment id or false.
     */
    public function add(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Returns comment fields.
     *
     * @param Container $container
     * @param int $entityId
     * @return array $fields
     */
    public function getFields(\Bitrix\Main\Copy\Container $container, $entityId)
    {
    }
    /**
     * Preparing data before creating a new comment.
     *
     * @param Container $container
     * @param array $fields List comment fields.
     * @return array $fields
     */
    public function prepareFieldsToCopy(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Starts copying children entities.
     *
     * @param Container $container
     * @param int $entityId Entity id.
     * @param int $copiedEntityId Copied entity id.
     * @return Result
     */
    public function copyChildren(\Bitrix\Main\Copy\Container $container, $entityId, $copiedEntityId)
    {
    }
    public function update($entityId, array $fields)
    {
    }
    public function getText($entityId)
    {
    }
}