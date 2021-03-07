<?php

namespace Bitrix\Iblock;

class SenderEventHandler
{
    /**
     * Return connector class description.
     *
     * @param array $data		Connector data.
     * @return array
     */
    public static function onConnectorListIblock($data)
    {
    }
}
class SenderConnectorIblock extends \Bitrix\Sender\Connector
{
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * @return bool
     */
    public function requireConfigure()
    {
    }
    /** @return \CDBResult */
    public function getData()
    {
    }
    /**
     * @return string
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getForm()
    {
    }
    protected static function getIblockFieldList()
    {
    }
}
class CDBResultSenderConnector extends \CDBResult
{
    public $senderConnectorFieldName = null;
    public $senderConnectorFieldEmail = null;
    /**
     * @return array|null
     */
    public function Fetch()
    {
    }
}