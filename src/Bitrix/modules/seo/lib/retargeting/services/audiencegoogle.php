<?php

namespace Bitrix\Seo\Retargeting\Services;

class AudienceGoogle extends \Bitrix\Seo\Retargeting\Audience
{
    const TYPE_CODE = 'google';
    const MAX_CONTACTS_PER_PACKET = 0;
    const MIN_CONTACTS_FOR_ACTIVATING = 5000;
    const URL_AUDIENCE_LIST = 'https://ads.google.com/aw/audiences/management';
    protected static $listRowMap = array('ID' => 'ID', 'NAME' => 'NAME', 'SUPPORTED_CONTACT_TYPES' => array(self::ENUM_CONTACT_TYPE_EMAIL, self::ENUM_CONTACT_TYPE_IDFA_GAID));
    public static function normalizeListRow(array $row)
    {
    }
    public static function isSupportMultiTypeContacts()
    {
    }
    public static function isSupportAccount()
    {
    }
    public static function isSupportRemoveContacts()
    {
    }
    public function add(array $data)
    {
    }
    protected function prepareContacts(array $contacts = array(), $type = null)
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
    public function getAudienceIdFromRow(array $row = null)
    {
    }
    public static function isSupportAddAudience()
    {
    }
}