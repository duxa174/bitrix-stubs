<?php

namespace Bitrix\Main\Web\DOM;

class DisplayProperties
{
    const DISPLAY = 'display';
    const FONT = 'font';
    const DISPLAY_HIDDEN = 'hidden';
    const DISPLAY_BLOCK = 'block';
    const DISPLAY_INLINE = 'inline';
    const FONT_NORMAL = 'normal';
    const FONT_BOLD = 'bold';
    const FONT_ITALIC = 'italic';
    const FONT_UNDERLINED = 'underlined';
    const FONT_DELETED = 'deleted';
    protected $properties = [];
    public function __construct(\Bitrix\Main\Web\DOM\Node $node, array $properties = [], array $defaultProperties = [])
    {
    }
    /**
     * @return bool
     */
    public function isHidden()
    {
    }
    /**
     * @return bool
     */
    public function isDisplayBlock()
    {
    }
    /**
     * @return bool
     */
    public function isDisplayInline()
    {
    }
    /**
     * @return bool
     */
    public function isFontBold()
    {
    }
    /**
     * @return bool
     */
    public function isFontItalic()
    {
    }
    /**
     * @return bool
     */
    public function isFontUnderlined()
    {
    }
    /**
     * @return bool
     */
    public function isFontDeleted()
    {
    }
    /**
     * @return array
     */
    public function getProperties()
    {
    }
    /**
     * @return array
     */
    protected function getDefaultProperties()
    {
    }
    /**
     * Returns true if this node should be rendered.
     *
     * @param \Bitrix\Main\Web\DOM\Node $node
     * @return bool
     */
    protected function isHiddenNode(\Bitrix\Main\Web\DOM\Node $node)
    {
    }
    /**
     * Returns true if html-tag with this $tagName displays as block by default.
     *
     * @param string $tagName
     * @return bool
     */
    protected function isBlockTag($tagName)
    {
    }
    /**
     * Returns true if html-tag with this $tagName has bold font-weight by default.
     *
     * @param string $tagName
     * @return bool
     */
    protected function isBoldTag($tagName)
    {
    }
    /**
     * Returns true if html-tag with this $tagName has italic font-style by default.
     *
     * @param string $tagName
     * @return bool
     */
    protected function isItalicTag($tagName)
    {
    }
    /**
     * Returns true if html-tag with this $tagName has underlined font-decoration by default.
     *
     * @param string $tagName
     * @return bool
     */
    protected function isUnderlinedTag($tagName)
    {
    }
    /**
     * Returns true if html-tag with this $tagName renders as 'deleted' by default.
     *
     * @param string $tagName
     * @return bool
     */
    protected function isDeletedTag($tagName)
    {
    }
    /**
     * @param Node $node
     * @return array
     */
    protected function getNodeProperties(\Bitrix\Main\Web\DOM\Node $node)
    {
    }
}