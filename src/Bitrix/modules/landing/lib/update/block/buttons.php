<?php

namespace Bitrix\Landing\Update\Block;

class Buttons
{
    protected const BTN_CLASS_MATCHER = '/class=(["\'][^"\']*\\s|["\'])btn(\\s[^"\']*["\']|["\'])/i';
    protected const OLD_BUTTON_MATCHER = '/class=["\'][^"\']*u-btn-\\w+[^"\']*["\']/i';
    protected const BUTTON_COLOR_MATCHER = '/(?<=[\\s\'"])u-btn-(\\w+)([\\s\'"])/i';
    protected const BUTTON_COLOR_OUTLINE_MATCHER = '/(?<=[\\s\'"])u-btn-outline-(\\w+)([\\s\'"])/i';
    protected const BUTTON_COLOR_THEME_MATCHER = '/(?<=[\\s\'"])u-(theme-bitrix-btn-v)(\\d{1,})([\\s\'"])/i';
    protected const BUTTON_COLOR_THEME_OUTLINE_MATCHER = '/(?<=[\\s\'"])u-(theme-bitrix-btn-outline-v)(\\d{1,})([\\s\'"])/i';
    protected const BUTTON_BORDER_MATCHER = '/(?<=[\\s\'"])g-brd-[\\d]{1,2}([\\s\'"])/i';
    protected const PADDING_MATCHER = '/(?<=[\\s\'"])(g-p[abtlrxy]-\\d{1,3}(--\\w\\w)?)([\\s\'"])/i';
    /**
     * @var integer
     */
    protected $blockId;
    /**
     * @var string
     */
    protected $content;
    public function __construct($blockId, $content)
    {
    }
    public function update() : void
    {
    }
    protected function save() : void
    {
    }
    protected function changeColor($content)
    {
    }
    protected function changeBorder($content)
    {
    }
    protected function changeRound($content)
    {
    }
    protected function changePadding($content)
    {
    }
    public static function isOldButton($content) : bool
    {
    }
    public static function updateLanding(int $lid) : void
    {
    }
}