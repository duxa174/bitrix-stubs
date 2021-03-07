<?php

namespace Bitrix\Sender\Posting;

/**
 * Class Counter
 * @package Bitrix\Sender\Posting
 */
class Counter
{
    /** @var Entity\Letter $letter Letter. */
    private $letter;
    /**
     * Constructor.
     *
     * @param Entity\Letter $letter Letter.
     */
    public function __construct(\Bitrix\Sender\Entity\Letter $letter)
    {
    }
    /**
     * Get all.
     *
     * @return integer.
     */
    public function getAll()
    {
    }
    /**
     * Get unsent.
     *
     * @return integer.
     */
    public function getUnsent()
    {
    }
    /**
     * Get sent.
     *
     * @return integer.
     */
    public function getSent()
    {
    }
    /**
     * Get success.
     *
     * @return integer.
     */
    public function getSuccess()
    {
    }
    /**
     * Get errors.
     *
     * @return integer.
     */
    public function getErrors()
    {
    }
    /**
     * Get read.
     *
     * @return integer.
     */
    public function getRead()
    {
    }
    /**
     * Get clicked.
     *
     * @return integer.
     */
    public function getClicked()
    {
    }
    /**
     * Get unsubscribed.
     *
     * @return integer.
     */
    public function getUnsubscribed()
    {
    }
}