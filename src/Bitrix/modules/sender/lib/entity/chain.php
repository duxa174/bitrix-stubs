<?php

namespace Bitrix\Sender\Entity;

/**
 * Class Chain
 * @package Bitrix\Sender\Entity
 */
class Chain
{
    /** @var Letter[] $letters */
    protected $letters = [];
    /** @var int[] $removeLetterList */
    protected $removeLetterList = [];
    /**
     * Get list.
     *
     * @return Letter[]
     */
    public function getList()
    {
    }
    /**
     * Get list.
     *
     * @return Letter|null
     */
    public function getLast()
    {
    }
    /**
     * Get letter.
     *
     * @param int $letterId Letter ID.
     * @return Letter|null
     */
    public function getLetter($letterId)
    {
    }
    /**
     * Add by ID.
     *
     * @param int $letterId Letter ID.
     * @return $this
     */
    public function addLetter($letterId)
    {
    }
    /**
     * shiftTime.
     *
     * @param int $letterId Letter ID.
     * @param int $timeShift Time shift.
     * @return $this
     */
    public function shiftTime($letterId, $timeShift = 0)
    {
    }
    /**
     * Remove.
     *
     * @param int $letterId Letter ID.
     * @return $this
     */
    public function removeLetter($letterId)
    {
    }
    /**
     * Move up.
     *
     * @param int $letterId Letter ID.
     * @return $this
     */
    public function moveUp($letterId)
    {
    }
    /**
     * Move down.
     *
     * @param int $letterId Letter ID.
     * @return $this
     */
    public function moveDown($letterId)
    {
    }
    /**
     * Sort.
     *
     * @return $this
     */
    public function sort()
    {
    }
    /**
     * Save data.
     *
     * @return $this
     */
    public function save()
    {
    }
    /**
     * Load data.
     *
     * @param integer $id Campaign ID.
     * @return $this
     */
    public function load($id)
    {
    }
    protected static function createInstanceById($id)
    {
    }
    protected static function getIdByParentId(array $list, $parentId = null)
    {
    }
    protected function move($letterId, $offset)
    {
    }
}