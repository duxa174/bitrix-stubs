<?php

namespace Bitrix\Landing;

class Agent
{
    /**
     * Tech method for adding new unique agent.
     * @param string $funcName Function name from this class.
     * @param array $params Some params for agent function.
     * @param int $time Time in seconds for executing period.
     * @return void
     */
    public static function addUniqueAgent($funcName, array $params = [], $time = 7200)
    {
    }
    /**
     * Clear recycle bin for scope.
     * @param string $scope Scope code.
     * @param int $days After this time items will be deleted.
     * @return string
     */
    public static function clearRecycleScope($scope, $days = null)
    {
    }
    /**
     * Clear recycle bin.
     * @param int $days After this time items will be deleted.
     * @return string
     */
    public static function clearRecycle($days = null)
    {
    }
    /**
     * Remove marked for deleting files.
     * @param int $count Count of files wich will be deleted per once.
     * @return string
     */
    public static function clearFiles($count = null)
    {
    }
    /**
     * Send used rest statistic.
     * @return string
     */
    public static function sendRestStatistic() : string
    {
    }
}