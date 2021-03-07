<?php

namespace Bitrix\Sale\Exchange\Integration\Rest\Cmd;

abstract class CmdBase extends \Bitrix\Sale\Exchange\Integration\Rest\Cmd\Base
{
    public function __construct()
    {
    }
    protected abstract function getCmdName();
}