<?php

namespace Bitrix\Seo\Retargeting\Services;

class AudienceVkontakte extends \Bitrix\Seo\Retargeting\Audience
{
    const TYPE_CODE = 'vkontakte';
    const MAX_CONTACTS_PER_PACKET = 1000;
    const MIN_CONTACTS_FOR_ACTIVATING = 20;
    const URL_AUDIENCE_LIST = 'https://vk.com/ads?act=retargeting';
    protected static $listRowMap = array('ID' => 'ID', 'NAME' => 'NAME', 'COUNT_VALID' => 'AUDIENCE_COUNT', 'COUNT_MATCHED' => 'AUDIENCE_COUNT', 'SUPPORTED_CONTACT_TYPES' => array(self::ENUM_CONTACT_TYPE_EMAIL, self::ENUM_CONTACT_TYPE_PHONE, self::ENUM_CONTACT_TYPE_IDFA_GAID, self::ENUM_CONTACT_TYPE_INTERNAL_ID));
    public static function isSupportRemoveContacts()
    {
    }
    public function add(array $data)
    {
    }
    protected function prepareContacts(array $contacts = array())
    {
    }
    public function importContacts($audienceId, array $contacts = array(), array $options)
    {
    }
    public function removeContacts($audienceId, array $contacts = array(), array $options)
    {
    }
    public function getList()
    {
    }
    public static function isSupportAddAudience()
    {
    }
    public function getLookalikeAudiencesParams()
    {
    }
    public function createLookalike($sourceAudienceId, array $options)
    {
    }
    protected function addLookalikeAudienceAgent($audienceRequestId, $audienceSize)
    {
    }
    protected function getLookalikeAudienceAgentName($audienceRequestId, $audienceSize)
    {
    }
    public static function processLookalikeAudienceAgent($clientId, $accountId, $audienceRequestId, $audienceSize)
    {
    }
}