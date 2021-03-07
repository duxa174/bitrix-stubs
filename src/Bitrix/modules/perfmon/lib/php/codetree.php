<?php

namespace Bitrix\Perfmon\Php;

class CodeTree
{
    protected $statements = array();
    protected $tree = array();
    /**
     * @param array $statements Sequence of updater statements.
     */
    function __construct(array $statements)
    {
    }
    /**
     * Returns php code.
     *
     * @param integer $level Alignment level.
     *
     * @return string
     */
    public function getCode($level)
    {
    }
    /**
     * @param array $result Nested arrays of structured code.
     * @param integer $level Alignment level.
     *
     * @return string
     */
    protected function formatCodeTree($result, $level = 0)
    {
    }
    /**
     * @return array
     */
    public function getCodeTree()
    {
    }
    /**
     * Adds one more line to the body.
     *
     * @param Statement[] $updaterSteps Plain array of updater steps.
     * @param array &$result Nested arrays of structured code.
     *
     * @return void
     */
    protected function makeCodeTree(array $updaterSteps, &$result)
    {
    }
    /**
     * @param array $predicate Array describing predicate.
     *
     * @return integer
     */
    protected function getPredicateSort($predicate)
    {
    }
}