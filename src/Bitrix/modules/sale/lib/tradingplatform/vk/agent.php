<?php

namespace Bitrix\Sale\TradingPlatform\Vk;

/**
 * Class Agent
 * Working with agent for VK-export: running, update, delete. Provide multistep processing.
 * @package Bitrix\Sale\TradingPlatform\Vk
 */
class Agent
{
    /**
     * Starting agents from start position. Need for multisteps.
     *
     * @param $feedType - type of export. May be ALL - then after ending ALBUMS export will be created PRODUCTS agent
     * @param $exportId
     * @param string $startPosition - in first run must be ""
     * @param bool $once - if true - agent will be deleted after ending process
     * @param int $execNumber - number of repeated running without changing position. Need for alert of slow agent.
     * @return string
     * @throws ArgumentNullException
     * @throws ArgumentOutOfRangeException
     * @throws \Bitrix\Main\SystemException
     */
    public static function start($feedType, $exportId, $startPosition = "", $once = false, $execNumber = 1)
    {
    }
    /**
     * @param $feedType - type of export. May be ALL - then after ending ALBUMS export will be created PRODUCTS agent
     * @param $exportId
     * @param string $startPosition - in first run must be ""
     * @param $interval - time of repeating
     * @param bool $once - if true - agent will be deleted after ending process
     * @return bool|int
     * @throws ArgumentNullException
     *
     * Add new agent for export products, albums or all
     */
    public static function add($feedType, $exportId, $startPosition = "", $interval, $once = false)
    {
    }
    /**
     * @param $feedType - type of export. May be ALL - then after ending ALBUMS export will be created PRODUCTS agent
     * @param $exportId
     * @param $startPosition
     * @param bool $once - if true - agent will be deleted after ending process
     * @param int $execNumber
     * @return string
     *
     * Create name for creating new agent
     */
    protected static function createAgentNameForAdd($feedType, $exportId, $startPosition, $once = false, $execNumber = 1)
    {
    }
    /**
     * Update params for existing agent. If agent if not exist - create new
     *
     * @param $exportId
     * @param $feedType - type of export. May be ALL - then after ending ALBUMS export will be created PRODUCTS agent
     * @param $interval - time of repeating
     * @param bool $once - if true - agent will be deleted after ending process
     * @return bool|int
     * @throws ArgumentNullException
     */
    public static function update($exportId, $feedType, $interval, $once = false)
    {
    }
    /**
     * Remove all agents, saving in VK settings
     */
    public static function deleteAll()
    {
    }
    /**
     * Delete agent by ID
     */
    public static function deleteAgent($agentId)
    {
    }
    /**
     * Find vk-export agents which running once.
     * Return array of IDs.
     *
     * @param $feedType - type of export. May be ALL - then after ending ALBUMS export will be created PRODUCTS agent
     * @param $exportId
     * @return array - IDs of existing agents
     */
    public static function getExistingOnceAgent($feedType, $exportId)
    {
    }
    /**
     * Find vk-export agents which was running but not finished (have not null start position)
     * Return array of IDs.
     *
     * @param $feedType
     * @param $exportId
     * @return array
     */
    public static function getRunningPereodicalAgents($feedType, $exportId)
    {
    }
    /**
     * Create name for vk-export agents which running onced.
     * @param $feedType
     * @param $exportId
     * @return string
     */
    protected static function createOnceAgentName($feedType, $exportId)
    {
    }
    /**
     * Create name for vk-export agents which was running but not finished (have not null start position)
     *
     * @param $feedType
     * @param $exportId
     * @return string
     */
    protected static function createRunningPereodicalAgentName($feedType, $exportId)
    {
    }
}