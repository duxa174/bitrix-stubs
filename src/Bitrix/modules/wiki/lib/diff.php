<?php

namespace Bitrix\Wiki;

/**
 * This Class implements the Difference Algorithm published in
 * "An O(ND) Difference Algorithm and its Variations" by Eugene Myers
 *  Algorithmica Vol. 1 No. 2, 1986, p 251.
 */
class Diff
{
    protected $upVector = array();
    protected $downVector = array();
    protected $modifiedA = array();
    protected $modifiedB = array();
    /**
     * Function finds the difference between two versions of text and creates html output with highlighted edits to
     * transform text from first to second version.
     *
     * @param string $a First version of text to be compared.
     * @param string $b Second version of text to be compared.
     * @return string
     */
    public function getDiffHtml($a, $b)
    {
    }
    /**
     * Function compares two arrays and creates edit script, that is required to transform array $a to array $b
     *
     * @param array $a First array to be compared.
     * @param array $b Second array to be compared.
     * @return array Array of edit steps to transform array $a to array $b. Each step is an array with keys:
     * <li>startA - position in array $a
     * <li>startB - position in array $b
     * <li>deletedA - count of elements deleted from array $a
     * <li>insertedB - count of elements inserted from array $b.
     */
    public function getDiffScript(array $a, array $b)
    {
    }
    /**
     * Function initializes object's fields for usage in difference algorithm.
     *
     * @return void
     */
    protected function init()
    {
    }
    /**
     * Function looks for longest common subsequence between two array
     *
     * @param array $a First array to be compared.
     * @param int $lowerA Lower bound of the first array.
     * @param int $upperA Upper bound of the first array.
     * @param array $b Second array to be compared.
     * @param int $lowerB Lower bound of the second array.
     * @param int $upperB Upper bound of the second array.
     * @return void
     */
    protected function longestCommonSubsequence(array $a, $lowerA, $upperA, array $b, $lowerB, $upperB)
    {
    }
    /**
     * Function looks for shortest middle snake between two arrays (see Meyer's work
     * "An O(ND) Difference Algorithm and its Variations")
     *
     * @param array $a First array to be compared.
     * @param int $lowerA Lower bound of the first array.
     * @param int $upperA Upper bound of the first array.
     * @param array $b Second array to be compared.
     * @param int $lowerB Lower bound of the second array.
     * @param int $upperB Upper bound of the second array.
     * @return array Array with keys 'x' and 'y', describing found shortest middle snake
     */
    protected function shortestMiddleSnake(array $a, $lowerA, $upperA, array $b, $lowerB, $upperB)
    {
    }
    /**
     * Function creates diff script. Should be called after longestCommonSubsequence().
     * @param array $a First array to be compared.
     * @param array $b Second array to be compared.
     * @return array Array of edit steps to transform array $a to array $b.
     */
    protected function createDiff(array $a, array $b)
    {
    }
}