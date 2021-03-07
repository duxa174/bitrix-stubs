<?php

namespace Bitrix\Iblock\ORM;

/**
 * Separate query to fix PropertyValue emulation in 2.0
 * Collapses similar joins to b_iblock_element_prop_sX table into one join
 *
 * @package    bitrix
 * @subpackage iblock
 */
class Query extends \Bitrix\Main\ORM\Query\Query
{
    protected function buildJoin()
    {
    }
}