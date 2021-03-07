<?php

namespace Bitrix\Rest\OAuth;

class StorageCache implements \Bitrix\Rest\AuthStorageInterface
{
    const CACHE_TTL = 3600;
    const CACHE_PREFIX = "oauth_";
    public function store(array $authResult)
    {
    }
    public function rewrite(array $authResult)
    {
    }
    public function restore($accessToken)
    {
    }
    protected function getCacheId($accessToken)
    {
    }
    protected function getCache()
    {
    }
}