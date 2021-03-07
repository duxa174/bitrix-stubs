<?php

namespace Bitrix\Seo\LeadAds\Services;

/**
 * Class FormVkontakte
 *
 * @package Bitrix\Seo\LeadAds\Services
 */
class FormVkontakte extends \Bitrix\Seo\LeadAds\Form
{
    const TYPE_CODE = \Bitrix\Seo\LeadAds\Service::TYPE_VKONTAKTE;
    const URL_FORM_LIST = 'https://www.facebook.com/ads/manager/audiences/manage/';
    const USE_GROUP_AUTH = true;
    protected static $fieldKeyPrefix = 'b24-seo-ads-';
    protected static $listRowMap = array('ID' => 'ID', 'NAME' => 'NAME', 'LOCALE' => 'LOCALE');
    protected function getAuthParameters()
    {
    }
    /**
     * Convert field.
     *
     * @param LeadAds\Field $field Field.
     * @return array
     */
    public static function convertField(\Bitrix\Seo\LeadAds\Field $field)
    {
    }
    protected static function getFieldMapper()
    {
    }
    public function add(array $data)
    {
    }
    /**
     * Unlink
     *
     * @param string $id ID.
     * @return bool
     */
    public function unlink($id)
    {
    }
    protected function registerGroupWebHook()
    {
    }
    protected function addCallbackServer($secretKey, \Bitrix\Seo\Retargeting\Response $response)
    {
    }
    protected function deleteCallbackServer($groupId)
    {
    }
    protected function getCallbackConfirmationCode()
    {
    }
    protected function setCallbackSettings($serverId, $catchLeads = true)
    {
    }
    protected function encodeString($text, $length = 60)
    {
    }
    protected function subscribeAppToPageEvents($pageAccessToken)
    {
    }
    /**
     * Get list.
     *
     * @return \Bitrix\Seo\Retargeting\Response
     */
    public function getList()
    {
    }
    /**
     * Get result.
     *
     * @param WebHook\Payload\LeadItem $item Payload item instance.
     * @return LeadAds\Result
     */
    public function getResult(\Bitrix\Seo\WebHook\Payload\LeadItem $item)
    {
    }
    /**
     * UnRegister group.
     *
     * @param string $groupId Group ID.
     * @return bool
     */
    public function unRegisterGroup($groupId)
    {
    }
}