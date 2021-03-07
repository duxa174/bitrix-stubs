<?php

namespace Bitrix\Seo\Analytics\Services;

class AccountFacebook extends \Bitrix\Seo\Analytics\Account implements \Bitrix\Seo\Retargeting\IRequestDirectly
{
    const TYPE_CODE = 'facebook';
    public function getList()
    {
    }
    public function getProfile()
    {
    }
    /**
     * @param mixed $accountId Facebook Ad Account Id.
     * @param Date|null $dateFrom
     * @param Date|null $dateTo
     * @return ResponseFacebook
     */
    public function getExpenses($accountId, \Bitrix\Main\Type\Date $dateFrom = null, \Bitrix\Main\Type\Date $dateTo = null)
    {
    }
    protected function prepareExpensesData($data)
    {
    }
    /**
     * @return bool
     */
    public function hasPublicPages()
    {
    }
    /**
     * @param $accountId
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    public function getPublicPages($accountId)
    {
    }
    /**
     * @param $publicPageId
     * @param array $params
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    protected function updatePublicPage($publicPageId, array $params)
    {
    }
    /**
     * @param $accountId
     * @param array $params
     * @param array $publicPageIds
     * @return Response
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function updateAnalyticParams($accountId, array $params, array $publicPageIds = [])
    {
    }
    /**
     * @param $accountId
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    protected function getAds($accountId)
    {
    }
    /**
     * @param $creativeId
     * @return Response
     */
    protected function getAdCreative($creativeId)
    {
    }
    /**
     * @param $accountId
     * @param $adId
     * @param array $creative
     * @return Response
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    protected function updateAdCreative($accountId, $adId, array $creative)
    {
    }
    /**
     * @param $accountId
     * @param array $urlParams
     * @return Response
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    protected function updateAdUrlTags($accountId, array $urlParams)
    {
    }
    /**
     * @param $string
     * @return array
     */
    protected function parseUrlParams($string)
    {
    }
    /**
     * @param array $currentParams
     * @param array $newParams
     * @return array
     */
    protected function mergeUrlParams(array $currentParams, array $newParams)
    {
    }
    /**
     * @return array
     */
    protected function getPublisherPlatforms()
    {
    }
    /**
     * @param $accountId
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    public function getAdSetIds($accountId)
    {
    }
}