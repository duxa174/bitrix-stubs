<?php

namespace Bitrix\Sender\Dispatch;

/**
 * Class State
 * @package Bitrix\Sender\Dispatch
 */
class Semantics
{
    const FINISHED = 1;
    const READY = 2;
    const WORKING = 3;
    /**
     * Get finish states.
     *
     * @return array
     */
    public static function getFinishStates()
    {
    }
    /**
     * Get ready states.
     *
     * @return array
     */
    public static function getReadyStates()
    {
    }
    /**
     * Get work states.
     *
     * @return array
     */
    public static function getWorkStates()
    {
    }
    /**
     * Get states by semantic ID.
     *
     * @param integer $semanticId Semantic ID.
     * @return array
     */
    public static function getStates($semanticId)
    {
    }
}