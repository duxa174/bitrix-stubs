<?php

namespace Bitrix\Sale\Delivery\Packing;

/**
 * Class Box
 * @package Bitrix\Sale\Delivery\Packing
 */
class Box
{
    /** @var int[] Vertex closest to origin */
    protected $vMin = array(0, 0, 0);
    /** @var int[] Vertex most far from origin */
    protected $vMax = array(0, 0, 0);
    /**
     * Box constructor.
     * @param int[] $sizes Box sizes array($sizeX, $sizeY, $sizeZ).
     */
    public function __construct(array $sizes)
    {
    }
    /**
     * @return int[]
     */
    public function getVMin()
    {
    }
    public function getSizes()
    {
    }
    /**
     * @return int[]
     */
    public function getVMax()
    {
    }
    /**
     * @return array[]
     */
    public function getVertexes()
    {
    }
    /**
     * @param int[] $vertex
     */
    public function setVMin(array $vertex)
    {
    }
    /**
     * @param int[] $vertex
     */
    public function setVMax(array $vertex)
    {
    }
    /**
     * Set nearest to origin vertex to given point.
     * @param int[] $point Point coordinates.
     */
    public function move(array $point)
    {
    }
    /**
     * Rotates box around given axe pi/2 degree
     * @param bool[] $axes Axes for rotation
     */
    public function rotate(array $axes)
    {
    }
}