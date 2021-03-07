<?php

namespace Bitrix\Sale\Location\Comparator;

abstract class Mapper extends \Bitrix\Sale\Delivery\ExternalLocationMap
{
    protected $collectDuplicated = false;
    protected $collectNotFound = false;
    protected $collectMapped = false;
    /**
     * @param string $stage Identities current stage.
     * @param string $step Idenifies current step of the stage.
     * @param int $progress Operation progress (%) 0 - 100.
     * @param int $timeout Seconds for stepping.
     * @return array
     */
    public abstract function map($stage, $step = '', $progress = 0, $timeout = 0);
    public function setCollectDuplicated($collect)
    {
    }
    public function setCollectNotFound($collect)
    {
    }
    public function setCollectMapped($collect)
    {
    }
}