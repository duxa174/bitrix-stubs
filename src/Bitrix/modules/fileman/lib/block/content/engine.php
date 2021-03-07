<?php

namespace Bitrix\Fileman\Block\Content;

/**
 * Class Engine
 * @package Bitrix\Fileman\Block
 */
class Engine
{
    const BLOCK_PLACE_ATTR = 'data-bx-block-editor-place';
    const STYLIST_TAG_ATTR = 'data-bx-stylist-container';
    const BLOCK_PLACE_ATTR_DEF_VALUE = 'body';
    const CONTENT_SLICE = 0;
    const CONTENT_JSON = 1;
    /** @var  BlockContent $content Block content. */
    protected $content;
    /** @var  Document $document Document. */
    protected $document;
    /** @var string|null $encoding Encoding.  */
    protected $encoding = null;
    /**
     * Check string for the presence of slices.
     *
     * @param string $string String.
     * @return bool
     */
    public static function isSupported($string)
    {
    }
    /**
     * Create instance.
     * @param Document|null $document Template document.
     * @return static
     */
    public static function create(\Bitrix\Main\Web\DOM\Document $document = null)
    {
    }
    /**
     * Engine constructor.
     * @param Document|null $document Template document.
     */
    public function __construct(\Bitrix\Main\Web\DOM\Document $document = null)
    {
    }
    /**
     * Set html.
     *
     * @param string $html Html.
     * @return $this
     */
    public function setHtml($html)
    {
    }
    /**
     * Set document.
     *
     * @param Document $document Template document.
     * @return $this
     */
    public function setDocument(\Bitrix\Main\Web\DOM\Document $document)
    {
    }
    /**
     * Set content string.
     *
     * @param string $string Content string.
     * @return Engine
     */
    public function setContent($string)
    {
    }
    /**
     * Set block content.
     *
     * @param BlockContent $blockContent Block content.
     * @return $this
     */
    public function setBlockContent(\Bitrix\Fileman\Block\Content\BlockContent $blockContent)
    {
    }
    /**
     * Set encoding.
     *
     * @param string|null $encoding Encoding.
     * @return $this
     */
    public function setEncoding($encoding = null)
    {
    }
    public function getDocument()
    {
    }
    public function getHtml()
    {
    }
    /**
     * Fill HTML template by content.
     *
     * @param string $htmlTemplate Html template.
     * @param string $content Content.
     * @param string $encoding Encoding.
     * @return string
     */
    public static function fillHtmlTemplate($htmlTemplate, $content, $encoding = null)
    {
    }
    /**
     * Fill document by content.
     *
     * @return bool
     */
    public function fill()
    {
    }
    protected function addBlocksToDocument($blocks)
    {
    }
    protected function addStylesToDocumentHead($styleString)
    {
    }
    /**
     * Parse string to array of block content.
     *
     * @param string $string String.
     * @return BlockContent
     * @throws SystemException
     */
    protected static function createBlockContent($string)
    {
    }
    protected static function getConverters()
    {
    }
}