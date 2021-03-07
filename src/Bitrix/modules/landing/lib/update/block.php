<?php

namespace Bitrix\Landing\Update;

class Block extends \Bitrix\Main\Update\Stepper
{
    /**
     * Items count for one step.
     */
    const STEPPER_COUNT = 1;
    /**
     * Target module for stepper.
     * @var string
     */
    protected static $moduleId = 'landing';
    /**
     * Register new block for stepper update.
     * @param string|string[] $codes Block codes.
     * @param array $params Additional params.
     * @return void
     */
    public static function register($codes, array $params = [])
    {
    }
    /**
     * Unregister block for stepper update.
     * @param string[] $codes Block codes.
     * @return void
     */
    public static function unregister($codes)
    {
    }
    /**
     * Preparing css classes array before set to node.
     * @param array|string $classes Base classes to set.
     * @param array $addClasses New classes for base array.
     * @param array $removeClasses Classes to remove from base array.
     * @return array
     */
    protected static function prepareClassesToSet($classes, array $addClasses = [], array $removeClasses = [])
    {
    }
    /**
     * Execute one step.
     * @param array $filter Filter for step.
     * @param int &$count Updated count.
     * @param int $limit Select limit.
     * @param array $params Additional params.
     * @return int Last updated id.
     */
    public static function executeStep(array $filter, &$count = 0, $limit = 0, array $params = [])
    {
    }
    /**
     * One step of stepper.
     * @param array &$result Result array.
     * @return bool
     */
    public function execute(array &$result)
    {
    }
    protected static function updateVideoToLazyload($nodes)
    {
    }
}