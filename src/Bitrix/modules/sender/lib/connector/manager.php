<?php

namespace Bitrix\Sender\Connector;

/**
 * Class Manager
 * @package Bitrix\Sender\Connector
 */
class Manager
{
    /**
     * Return connector for contacts.
     *
     * @param array $data Event Data.
     * @return mixed
     * @deprecated
     */
    public static function onConnectorListContact($data)
    {
    }
    /**
     * Return connector for recipients.
     *
     * @param array $data Event Data.
     * @return mixed
     * @deprecated
     */
    public static function onConnectorListRecipient($data)
    {
    }
    /**
     * Return list of connectors.
     *
     * @param array $data Event Data.
     * @return array
     */
    public static function onConnectorList($data)
    {
    }
    /**
     * Get fields from endpoint.
     *
     * @param array $endpointList Endpoints.
     * @return array
     */
    public static function getFieldsFromEndpoint(array $endpointList)
    {
    }
    /**
     * Get endpoint from fields.
     *
     * @param array $postData Post data.
     * @return array|null
     */
    public static function getEndpointFromFields(array $postData)
    {
    }
    /**
     * Return instance of connector by endpoint array.
     *
     * @param array
     * @return Base|null
     */
    public static function getConnector(array $endpoint)
    {
    }
    /**
     * Return array of instances of connector by endpoints array.
     *
     * @param array
     * @return Base[]
     */
    public static function getConnectorList(array $endpointList = null)
    {
    }
    /**
     * Return array of connectors information by endpoints array.
     *
     * @param array
     * @return array
     */
    public static function getConnectorClassList(array $endpointList = null)
    {
    }
    /**
     * Sort.
     *
     * @param $a
     * @param $b
     * @return int
     */
    public static function sort($a, $b)
    {
    }
}