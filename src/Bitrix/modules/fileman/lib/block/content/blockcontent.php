<?php

namespace Bitrix\Fileman\Block\Content;

class BlockContent
{
    const TYPE_STYLES = 'STYLES';
    const TYPE_BLOCKS = 'BLOCKS';
    protected $list = array();
    public function __construct()
    {
    }
    public function add($type, $place, $value)
    {
    }
    public function getStyles()
    {
    }
    public function getBlocks()
    {
    }
    public function setList(array $list)
    {
    }
    public function getList()
    {
    }
    protected function filterListByType($type)
    {
    }
}