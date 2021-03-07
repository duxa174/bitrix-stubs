<?php

namespace Bitrix\Main\Web\DOM;

class QuerySelectorEngine extends \Bitrix\Main\Web\DOM\QueryEngine
{
    const PATH_CODE_NAME = 'name';
    const PATH_CODE_CHILD = 'child';
    const PATH_CODE_CLASS = 'class';
    const PATH_CODE_DESCENDANT = 'descendant';
    const PATH_CODE_ATTR = 'attr';
    const PATH_CODE_PSEUDO = 'pseudo';
    public function query($queryString = "", \Bitrix\Main\Web\DOM\Node $node, $limit = 0, $direction = self::DIR_DOWN)
    {
    }
    public function queryInternal(array $instructionList, \Bitrix\Main\Web\DOM\Node $node, $limit = 0, $direction = self::DIR_DOWN)
    {
    }
    public function parseQueryStringPseudo($string)
    {
    }
    public function parseQueryStringAttr($string)
    {
    }
    /**
     * @param string $string
     * @return array
     */
    public function parseQueryString($string)
    {
    }
    /**
     * @param string $string
     * @param int $length
     * @param int $i
     * @param array $dividers
     * @return string
     */
    protected function writeToBuffer($string, $length, &$i, array $dividers)
    {
    }
}