<?php

namespace Bitrix\Subscribe;

class SenderEventHandler
{
    /**
     * Handler of sender:OnConnectorList event.
     *
     * @param array $data Empty array.
     * @return array
     */
    public static function onConnectorListSubscriber($data)
    {
    }
}
class SenderConnectorSubscriber extends \Bitrix\Sender\Connector
{
    /**
     * Returns localized name of subscribers source.
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Returns internal code of subscribers source.
     *
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Returns subscribers depended on side filter fields.
     *
     * @return \CDBResult
     */
    public function getData()
    {
    }
    /**
     * Returns Html form to display filter criteria.
     *
     * @return string
     */
    public function getForm()
    {
    }
}
class CDBResultSenderConnectorIBlock extends \CDBResult
{
    /**
     * Fetch fields from database resource
     * @return array|null
     */
    public function Fetch()
    {
    }
}