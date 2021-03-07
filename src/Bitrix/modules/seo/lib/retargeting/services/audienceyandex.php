<?php

namespace Bitrix\Seo\Retargeting\Services;

class AudienceYandex extends \Bitrix\Seo\Retargeting\Audience
{
    const TYPE_CODE = 'yandex';
    const MAX_CONTACTS_PER_PACKET = 0;
    const MIN_CONTACTS_FOR_ACTIVATING = 1000;
    const URL_AUDIENCE_LIST = 'https://audience.yandex.ru/';
    const NEW_AUDIENCE_FAKE_ID = -1;
    const UPDATE_AUDIENCE_TIMEOUT = 60;
    protected static $listRowMap = array('ID' => 'ID', 'NAME' => 'NAME', 'COUNT_VALID' => 'VALID_UNIQUE_QUANTITY', 'COUNT_MATCHED' => 'MATCHED_QUANTITY', 'HASHED' => 'HASHED', 'STATUS' => 'STATUS', 'SUPPORTED_CONTACT_TYPES' => array(self::ENUM_CONTACT_TYPE_PHONE, self::ENUM_CONTACT_TYPE_EMAIL));
    public static function normalizeListRow(array $row)
    {
    }
    public static function isSupportMultiTypeContacts()
    {
    }
    public static function isSupportAccount()
    {
    }
    public static function isAddingRequireContacts()
    {
    }
    public static function isSupportRemoveContacts()
    {
    }
    /**
     * @param array $data Data.
     * @return \Bitrix\Seo\Retargeting\Response
     * @deprecated Not supported by Yandex
     * @throws NotImplementedException
     */
    public function add(array $data)
    {
    }
    /**
     * Create contacts list in proper format.
     * @param array $contacts Contacts.
     * @param bool $hashed Should result be hashed.
     * @param string $type Type (email|phone).
     * @return string
     */
    protected function prepareContacts(array $contacts = array(), $hashed = false, $type = '')
    {
    }
    /**
     * @param string $audienceId Audience id.
     * @param array $contacts Contacts.
     * @param array $options Options.
     * @return Result|\Bitrix\Seo\Retargeting\Response
     * @throws \Bitrix\Main\SystemException
     */
    public function importContacts($audienceId, array $contacts = array(), array $options)
    {
    }
    /**
     * Remove contacts from audience
     * @param string $audienceId Audience id.
     * @param array $contacts Contacts.
     * @param array $options Options.
     * @deprecated Not supported by Yandex anymore
     * @return \Bitrix\Seo\Retargeting\Response|null
     */
    public function removeContacts($audienceId, array $contacts = array(), array $options)
    {
    }
    /**
     * Audiences list
     * @return \Bitrix\Seo\Retargeting\Response
     * @throws \Bitrix\Main\SystemException
     */
    public function getList()
    {
    }
    /**
     * "New audience" value in audiences list
     * @param array $data Audiences list.
     * @return array
     */
    protected function addNewAudienceValue($data)
    {
    }
}