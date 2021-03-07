<?php

namespace Bitrix\Seo\Retargeting;

abstract class Account extends \Bitrix\Seo\Retargeting\BaseApiObject
{
    const PROFILE_INFO_CACHE_TTL = 86400;
    protected static $listRowMap = array('ID' => 'ID', 'NAME' => 'NAME');
    /**
     * Get profile data (cached)
     * @return array
     * @throws \Bitrix\Main\SystemException
     */
    public function getProfileCached()
    {
    }
    /**
     * Clear profile cache
     * @return void
     * @throws \Bitrix\Main\SystemException
     */
    public function clearCache()
    {
    }
    /**
     * Get cache id
     * @return string
     */
    protected function getCacheId()
    {
    }
    /**
     * @return Response
     */
    public abstract function getList();
    /**
     * @return Response
     */
    public abstract function getProfile();
    public function getRegionsList()
    {
    }
}