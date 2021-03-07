<?php

namespace Bitrix\Landing\Note;

class Source
{
    /**
     * Supported sources (modules).
     */
    const AVAILABLE_SOURCES = ['blog', 'blogcomment', 'taskcomment', 'livefeed'];
    /**
     * Block codes for different content types.
     */
    const BLOCKS = ['header' => ['code' => '27.2.one_col_full_title', 'selector' => '.landing-block-node-title'], 'text' => ['code' => '27.6.one_col_fix_text_with_headings', 'selector' => '.landing-block-node-text'], 'quote' => ['code' => '27.5.one_col_fix_text_with_border', 'selector' => '.landing-block-node-text'], 'code' => ['code' => '27.7.one_col_fix_text_on_bg', 'selector' => '.landing-block-node-text'], 'img' => ['code' => '32.2.img_one_big', 'selector' => '.landing-block-node-img'], 'table' => ['code' => '27.6.one_col_fix_text_with_headings', 'selector' => '.landing-block-node-text'], 'video' => ['code' => '49.1.video_just_video', 'selector' => '.landing-block-node-embed']];
    /**
     * Returns self::BLOCKS item by code.
     * @param string $type Content type.
     * @return array
     */
    protected static function getBlockMetaByType(string $type) : ?array
    {
    }
    /**
     * Returns last created site id.
     * @return int
     */
    protected static function getLastCreatedSite() : int
    {
    }
    /**
     * Creates new knowledge page and returns info about it.
     * @param int $kbId Knowledge id.
     * @param string $sourceType Source type.
     * @param int $sourceId Source id.
     * @return array|null
     */
    public static function createFromSource(int $kbId, string $sourceType, int $sourceId) : ?array
    {
    }
}