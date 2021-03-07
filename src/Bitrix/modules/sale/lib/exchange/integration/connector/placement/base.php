<?php

namespace Bitrix\Sale\Exchange\Integration\Connector\Placement;

abstract class Base
{
    protected $appUrl;
    public function __construct(\Bitrix\Sale\Exchange\Integration\App\Base $app)
    {
    }
    protected function getAppUrl()
    {
    }
    public abstract function getTitle();
    public abstract function getGroupName();
    public abstract function getPlacement();
    public abstract function getPlacmentHandler();
}