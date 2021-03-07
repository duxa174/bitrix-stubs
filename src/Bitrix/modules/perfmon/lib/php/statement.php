<?php

namespace Bitrix\Perfmon\Php;

class Statement
{
    public $tableName = '';
    public $dependOn = '';
    protected $bodyLines = array();
    public $conditions = array();
    /**
     * Adds one more line to the body.
     *
     * @param string $line Line of code.
     *
     * @return Statement
     */
    public function addLine($line)
    {
    }
    /**
     * Adds condition on which statement have to be executed.
     *
     * @param string $predicate Condition predicate.
     *
     * @return Statement
     */
    public function addCondition($predicate)
    {
    }
    /**
     * Merges two statements.
     *
     * @param Statement $stmt Contains lines to be added.
     *
     * @return Statement
     */
    public function merge(\Bitrix\Perfmon\Php\Statement $stmt)
    {
    }
    /**
     * Return body aligned with tab characters.
     *
     * @param integer $level Code align level.
     *
     * @return string
     */
    public function formatBodyLines($level = 0)
    {
    }
}