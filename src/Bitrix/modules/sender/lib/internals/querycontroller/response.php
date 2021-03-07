<?php

namespace Bitrix\Sender\Internals\QueryController;

/**
 * Class Response
 * @package Bitrix\Sender\Internals\QueryController
 */
class Response extends \Bitrix\Main\HttpResponse
{
    /** @var Content $content Content. */
    protected $content;
    /**
     * Flush content.
     *
     */
    public function flushContent()
    {
    }
    /**
     * Set Content instance.
     *
     * @param Content $content Content.
     * @return $this
     */
    public function setContent($content)
    {
    }
    /**
     * Get Content instance.
     *
     * @return Content
     */
    public function getContent()
    {
    }
    /**
     * Create Content instance.
     *
     * @param string $type Type.
     * @return Content
     */
    public function initContent($type = \Bitrix\Sender\Internals\QueryController\Content::TYPE_JSON)
    {
    }
    /**
     * Create ContentJson instance.
     *
     * @return ContentJson|Content
     */
    public function initContentJson()
    {
    }
    /**
     * Create ContentHtml instance.
     *
     * @return ContentHtml|Content
     */
    public function initContentHtml()
    {
    }
}