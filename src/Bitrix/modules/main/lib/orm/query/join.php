<?php

namespace Bitrix\Main\ORM\Query;

/**
 * Class for nice description of join reference. Alias to Query::filter().
 * @package    bitrix
 * @subpackage main
 */
class Join
{
    const TYPE_INNER = 'INNER';
    const TYPE_LEFT = 'LEFT';
    const TYPE_LEFT_OUTER = 'LEFT OUTER';
    const TYPE_RIGHT = 'RIGHT';
    const TYPE_RIGHT_OUTER = 'RIGHT OUTER';
    /**
     * Short alias to init filter with whereColumn.
     * @see Filter::whereColumn()
     *
     * @param array ...$condition
     *
     * @return Filter
     */
    public static function on()
    {
    }
    public static function getTypes()
    {
    }
}