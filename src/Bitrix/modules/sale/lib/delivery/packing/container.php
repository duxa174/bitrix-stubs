<?php

namespace Bitrix\Sale\Delivery\Packing;

/**
 * Class Container
 * Contains Boxes
 * @package Bitrix\Sale\Delivery\Packing
 */
class Container
{
    /** @var Box[] Boxes list.*/
    protected $boxes = array();
    protected $availableVertexes = array(array(0, 0, 0));
    /**
     * @param int[] $boxDims Point move box to
     * @return bool
     */
    public function addBox(array $boxDims)
    {
    }
    public function addBoxToVertex(array $boxDims, $vertexIdx)
    {
    }
    public function extractLastBox()
    {
    }
    public function insertBox(\Bitrix\Sale\Delivery\Packing\Box $box, $vertexId = 0)
    {
    }
    protected function refreshVertexesAfterBoxAdd(\Bitrix\Sale\Delivery\Packing\Box $box)
    {
    }
    /**
     * @return Box[]
     */
    public function getBoxes()
    {
    }
    public function getAvailableVertexes()
    {
    }
    /**
     * Check if box can be added
     * @param Box $newBox
     * @return bool
     */
    protected function isVertexSuitable(\Bitrix\Sale\Delivery\Packing\Box $newBox)
    {
    }
    /**
     * Checks if boxes intersect
     * @param Box $box1
     * @param Box $box2
     * @return bool
     */
    protected static function isBoxesIntersects(\Bitrix\Sale\Delivery\Packing\Box $box1, \Bitrix\Sale\Delivery\Packing\Box $box2)
    {
    }
    /**
     * Are edges intersect
     * @param int $min1
     * @param int $max1
     * @param int $min2
     * @param int $max2
     * @return bool
     */
    protected static function isEdgesIntersects($min1, $max1, $min2, $max2)
    {
    }
    /**
     * @return array Dimensions of space filled by boxes
     */
    public function getFilledDimensions()
    {
    }
    /**
     * @return int Volume of space filled by boxes
     */
    public function getFilledVolume()
    {
    }
    /**
     * @param int[] $p1
     * @param int[] $p2
     * @return int
     * @internal
     */
    public static function distanceCompare(array $p1, array $p2)
    {
    }
    /**
     * Calculate distance between two points
     * @param array $p1
     * @param array $p2
     * @return float
     */
    public static function calculateDistance(array $p1, array $p2)
    {
    }
}