<?php

namespace Bitrix\Perfmon\Sql;

class Compare
{
    private $difference = array();
    /**
     * Compares two database schemas and returns array of pairs.
     * <p>
     * Pair is the two element array:
     * - First element with index "0" is the object from the source collection.
     * - Second element with index "1" is the object from $targetList.
     * - if pair element is null when no such element found (by name) in the collection.
     *
     * @param Schema $source Source schema.
     * @param Schema $target Target schema.
     *
     * @return array
     */
    public static function diff(\Bitrix\Perfmon\Sql\Schema $source, \Bitrix\Perfmon\Sql\Schema $target)
    {
    }
    /**
     * Compares sequences.
     *
     * @param Schema $source Source schema.
     * @param Schema $target Target schema.
     *
     * @return void
     */
    private function compareSequences(\Bitrix\Perfmon\Sql\Schema $source, \Bitrix\Perfmon\Sql\Schema $target)
    {
    }
    /**
     * Compares procedures.
     *
     * @param Schema $source Source schema.
     * @param Schema $target Target schema.
     *
     * @return void
     */
    private function compareProcedures(\Bitrix\Perfmon\Sql\Schema $source, \Bitrix\Perfmon\Sql\Schema $target)
    {
    }
    /**
     * Compares tables.
     *
     * @param Schema $source Source schema.
     * @param Schema $target Target schema.
     *
     * @return void
     */
    private function compareTables(\Bitrix\Perfmon\Sql\Schema $source, \Bitrix\Perfmon\Sql\Schema $target)
    {
    }
    /**
     * Compares tables columns, indexes, constraints, and triggers..
     *
     * @param Table $source Source table.
     * @param Table $target Target table.
     *
     * @return void
     */
    private function compareTable(\Bitrix\Perfmon\Sql\Table $source, \Bitrix\Perfmon\Sql\Table $target)
    {
    }
    /**
     * Compares columns
     *
     * @param Column $source Source column.
     * @param Column $target Target column.
     *
     * @return void
     */
    private function compareColumn(\Bitrix\Perfmon\Sql\Column $source, \Bitrix\Perfmon\Sql\Column $target)
    {
    }
}