<?php

namespace Bitrix\Perfmon\Php;

class Condition
{
    protected $predicate = '';
    /**
     * @param string $predicate Php condition.
     */
    function __construct($predicate)
    {
    }
    /**
     * @return string
     */
    public function getPredicate()
    {
    }
}