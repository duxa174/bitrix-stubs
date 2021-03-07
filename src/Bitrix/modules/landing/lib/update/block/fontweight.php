<?php

namespace Bitrix\Landing\Update\Block;

class FontWeight
{
    // todo: check this!
    protected const FONT_BOLD_MATCHER = '/font-weight-bold/i';
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
    protected function changeWeightClass()
    {
    }
    public static function updateLanding(int $lid) : void
    {
    }
}