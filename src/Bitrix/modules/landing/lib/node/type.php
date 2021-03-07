<?php

namespace Bitrix\Landing\Node;

class Type
{
    const COMPONENT = 'component';
    const MEDIA = 'embed';
    const ICON = 'icon';
    const IMAGE = 'img';
    const LINK = 'link';
    const MAP = 'map';
    const TEXT = 'text';
    protected static $classes = [];
    /**
     * Gets class handler for type of node.
     * @param string $type Node type.
     * @return string
     */
    public static function getClassName($type)
    {
    }
}