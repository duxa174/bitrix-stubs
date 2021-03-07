<?php

namespace Bitrix\Sale\Internals;

/**
 * Class CollectionFilterIterator
 * @package Bitrix\Sale\Internals
 */
class CollectionFilterIterator extends \FilterIterator
{
    protected $callback = null;
    /**
     * CustomFilterIterator constructor.
     * @param \Iterator $iterator
     * @param $callback
     */
    public function __construct(\Iterator $iterator, $callback)
    {
    }
    /**
     * @return mixed
     */
    public function accept()
    {
    }
    /**
     * @return int
     */
    public function count()
    {
    }
}