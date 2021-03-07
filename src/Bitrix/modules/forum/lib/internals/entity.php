<?php

namespace Bitrix\Forum\Internals;

abstract class Entity implements \ArrayAccess
{
    use \Bitrix\Forum\Internals\EntityBaseMethods;
    /** @var int */
    protected $authorId;
    /** @var Forum */
    protected $forum;
    /** @var array */
    protected $data;
    public function __construct($id)
    {
    }
    /**
     * Init Entity data, Forum
     * @return $this
     */
    protected abstract function init();
    public function getId()
    {
    }
    public function getForumId()
    {
    }
    public function getAuthorId()
    {
    }
    public abstract function edit(array $fields);
    public static abstract function create($parentObject, array $fields);
}