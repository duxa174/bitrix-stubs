<?php

namespace Bitrix\Main\Web\DOM;

abstract class QueryEngine
{
    const DIR_DOWN = 0;
    const DIR_UP = 1;
    const FILTER_NODE_TYPE = 'nodeType';
    const FILTER_NODE_NAME = 'nodeName';
    const FILTER_ATTR = 'attr';
    const FILTER_ATTR_VALUE = 'attrValue';
    const FILTER_ATTR_CLASS_NAME = 'attrClassName';
    const FILTER_OPERATION_EQUAL = '=';
    const FILTER_OPERATION_NOT_EQUAL = '!';
    const FILTER_OPERATION_START = '^';
    const FILTER_OPERATION_END = '$';
    const FILTER_OPERATION_CONTAIN = '*';
    const FILTER_OPERATION_CONTAIN_WORD = '|';
    protected $limit = null;
    protected $deep = true;
    protected $direction = self::DIR_DOWN;
    private static $querySelectorEngine;
    public static function getQuerySelectorEngine()
    {
    }
    protected function isNodeFiltered(\Bitrix\Main\Web\DOM\Node $node, array $filter)
    {
    }
    public function walk(array $filter = null, callable $callback = null, \Bitrix\Main\Web\DOM\Node $node, $limit = 0, $direction = self::DIR_DOWN)
    {
    }
    protected function walkInternal(array $filter = null, callable $callback = null, \Bitrix\Main\Web\DOM\Node $node)
    {
    }
    public abstract function query($queryString = "", \Bitrix\Main\Web\DOM\Node $node, $limit = 0, $direction = self::DIR_DOWN);
}