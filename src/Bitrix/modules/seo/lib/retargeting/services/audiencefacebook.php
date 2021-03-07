<?php

namespace Bitrix\Seo\Retargeting\Services;

class AudienceFacebook extends \Bitrix\Seo\Retargeting\Audience
{
    const TYPE_CODE = 'facebook';
    const MAX_CONTACTS_PER_PACKET = 10000;
    const MIN_CONTACTS_FOR_ACTIVATING = 50;
    const URL_AUDIENCE_LIST = 'https://business.facebook.com/adsmanager/audiences';
    protected static $listRowMap = array('ID' => 'ID', 'NAME' => 'NAME', 'COUNT_VALID' => 'APPROXIMATE_COUNT', 'COUNT_MATCHED' => 'APPROXIMATE_COUNT', 'SUPPORTED_CONTACT_TYPES' => array(self::ENUM_CONTACT_TYPE_EMAIL, self::ENUM_CONTACT_TYPE_PHONE, self::ENUM_CONTACT_TYPE_IDFA_GAID, self::ENUM_CONTACT_TYPE_INTERNAL_ID));
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
}