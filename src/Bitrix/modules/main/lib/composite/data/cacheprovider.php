<?php

namespace Bitrix\Main\Composite\Data;

abstract class CacheProvider
{
    public abstract function isCacheable();
    public abstract function setUserPrivateKey();
    public abstract function getCachePrivateKey();
    public abstract function onBeforeEndBufferContent();
}