<?php

namespace Bitrix\Rest\Event;

class ProviderOffline implements \Bitrix\Rest\Event\ProviderOfflineInterface
{
    /**
     * @var ProviderOffline
     */
    protected static $instance = null;
    public static function instance()
    {
    }
    public function send(array $eventList)
    {
    }
    protected function getServerAuthData()
    {
    }
    protected function notifyApplications(array $counters)
    {
    }
    protected function notifyApplication($clientId, array $connectorCounters)
    {
    }
}