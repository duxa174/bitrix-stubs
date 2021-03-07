<?php

namespace Bitrix\Landing\Note\Source;

class Parser
{
    /**
     * Download URL for files in text.
     */
    const ACTION_DOWNLOAD_FILE = '/bitrix/tools/disk/uf.php?attachedId=#attachedId#&amp;action=download&amp;ncc=1';
    /**
     * Returns converted to html bb text.
     * @param string $text Text to convert.
     * @return string
     */
    protected static function convertText(string $text) : string
    {
    }
    /**
     * Returns video data by video src.
     * @param string $videoSrc Video source url.
     * @return array|null
     */
    protected static function getVideoContent(string $videoSrc) : ?array
    {
    }
    /**
     * Returns img content by attache id.
     * @param int|string $attacheId Attache id.
     * @param array $files Files array.
     * @return array|null
     */
    protected static function getImgContent($attacheId, array $files = []) : ?array
    {
    }
    /**
     * Replaces files in text content.
     * @param string $text Content.
     * @param array $files Files array.
     * @return string
     */
    protected static function replaceFilesInContent(string $text, array $files = []) : string
    {
    }
    /**
     * Returns block info from DOM Node.
     * @param DOM\Node $node Node instance.
     * @param array $params Additional params.
     * @return array|null
     */
    protected static function getBlockFromNode(\Bitrix\Main\Web\DOM\Node $node, array $params = []) : ?array
    {
    }
    /**
     * Converts bb text to semantic blocks.
     * @param string $text BB text.
     * @param array $params Additional params.
     * @return array
     */
    public static function textToBlocks(string $text, array $params = []) : array
    {
    }
}