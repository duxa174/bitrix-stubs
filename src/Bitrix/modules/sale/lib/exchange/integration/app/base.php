<?php

namespace Bitrix\Sale\Exchange\Integration\App;

abstract class Base
{
    public abstract function getCode();
    public abstract function getClientId();
    public abstract function getClientSecret();
    public abstract function getAppUrl();
}