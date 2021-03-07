<?php

namespace Bitrix\Main\Data;

/**
 * Class Connection
 *
 * Abstarct base class for data connections.
 */
abstract class Connection
{
    /** @var resource */
    protected $resource;
    protected $isConnected = false;
    protected $configuration;
    public function __construct(array $configuration)
    {
    }
    /**
     * Connects to data source.
     */
    public function connect()
    {
    }
    /**
     * Disconects from data source.
     */
    public function disconnect()
    {
    }
    /**
     * Returns the resource of the connection.
     *
     * @return resource
     */
    public function getResource()
    {
    }
    /**
     * Returns the state of the connection.
     *
     * @return bool
     */
    public function isConnected()
    {
    }
    protected abstract function connectInternal();
    protected abstract function disconnectInternal();
    /**
     * Returns the array with the connection parameters.
     *
     * @return array
     */
    public function getConfiguration()
    {
    }
    /**
     * Returns max packet length to send to or receive from the database server.
     *
     * @return int
     */
    public function getMaxAllowedPacket()
    {
    }
}