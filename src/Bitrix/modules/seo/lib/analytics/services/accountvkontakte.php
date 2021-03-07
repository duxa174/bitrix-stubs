<?php

namespace Bitrix\Seo\Analytics\Services;

class AccountVkontakte extends \Bitrix\Seo\Analytics\Account implements \Bitrix\Seo\Retargeting\IRequestDirectly
{
    const TYPE_CODE = 'vkontakte';
    const MAX_ADS_EDIT = 20;
    const CURRENCY_CODE = 'RUB';
    protected static $listRowMap = array('ID' => 'ACCOUNT_ID', 'NAME' => 'NAME');
    public function getList()
    {
    }
    public function getProfile()
    {
    }
    /**
     * @param mixed $accountId VK Ad Account Id.
     * @param Date|null $dateFrom
     * @param Date|null $dateTo
     * @return Response
     */
    public function getExpenses($accountId, \Bitrix\Main\Type\Date $dateFrom = null, \Bitrix\Main\Type\Date $dateTo = null)
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
     * @param $accountId
     * @param array $params
     * @param array $publicPageIds
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    public function updateAnalyticParams($accountId, array $params, array $publicPageIds = [])
    {
    }
    /**
     * @param $accountId
     * @param array $data
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    protected function editAds($accountId, array $data)
    {
    }
    /**
     * @param $accountId
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    protected function getAdsLayout($accountId)
    {
    }
    /**
     * @param array $groupIDs
     * @param array $params
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    protected function editGroupAnalyticParams(array $groupIDs, array $params)
    {
    }
    /**
     * @param array $groupIDs
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    protected function getGroups(array $groupIDs)
    {
    }
    /**
     * @param string $url
     * @return array|false
     */
    protected function parseVkUrl($url)
    {
    }
    /**
     * @param array $postIDs
     * @param array $params
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    protected function editPostAnalyticParams(array $postIDs, array $params)
    {
    }
    /**
     * @param array $postIDs
     * @return Response
     * @throws \Bitrix\Main\SystemException
     */
    protected function getPosts(array $postIDs)
    {
    }
}