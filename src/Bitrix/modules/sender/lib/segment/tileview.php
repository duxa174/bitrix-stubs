<?php

namespace Bitrix\Sender\Segment;

/**
 * Class TileView
 * @package Bitrix\Sender\Entity
 * @internal
 */
class TileView
{
    const MAX_COUNT = 4;
    /** @var bool $isInclude Is include. */
    protected $isInclude = true;
    /** @var Message\Adapter $message Message. */
    protected $message;
    /**
     * Create instance.
     *
     * @param bool $isInclude Get stat by including or excluding segments in letters.
     * @return static
     */
    public static function create($isInclude = true)
    {
    }
    /**
     * Constructor.
     *
     * @param bool $isInclude Get stat by including or excluding segments in letters.
     */
    public function __construct($isInclude = true)
    {
    }
    /**
     * Set message.
     *
     * @param Message\Adapter|null $message Message.
     *
     * @return $this
     */
    public function setMessage(\Bitrix\Sender\Message\Adapter $message = null)
    {
    }
    /**
     * Get segments as tiles array.
     *
     * @return array
     */
    public function getSections()
    {
    }
    /**
     * Get segments as tiles array.
     *
     * @param integer $segmentId Segment ID.
     * @return array|null
     */
    public function getTile($segmentId)
    {
    }
    /**
     * Get segments as tiles array.
     *
     * @param array $parameters Parameters.
     * @return array
     */
    public function getTiles(array $parameters = array())
    {
    }
    protected static function getBackgroundColor(array $data)
    {
    }
}