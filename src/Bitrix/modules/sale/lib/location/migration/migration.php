<?php

namespace Bitrix\Sale\Location\Migration;

final class MigrationProcess extends \Bitrix\Sale\Location\Util\Process
{
    const SESS_KEY = 'location_migration';
    const NOTIF_TAG = 'SALE_LOCATIONPRO_PLZ_MIGRATE';
    private $migrator = null;
    public function __construct()
    {
    }
    public function onBeforePerformIteration()
    {
    }
    public function onAfterPerformIteration()
    {
    }
    protected function stageCreateTypes()
    {
    }
    protected function stageConvertTree()
    {
    }
    protected function stageConvertZones()
    {
    }
    protected function stageConvertLinks()
    {
    }
    protected function stageCopyDefaultLocations()
    {
    }
    protected function stageCopyZipCodes()
    {
    }
    public function hideNotifier()
    {
    }
}