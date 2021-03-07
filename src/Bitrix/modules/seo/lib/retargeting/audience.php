<?php

namespace Bitrix\Seo\Retargeting;

abstract class Audience extends \Bitrix\Seo\Retargeting\BaseApiObject
{
    const TYPE_FACEBOOK = 'facebook';
    const TYPE_VKONTAKTE = 'vkontakte';
    const TYPE_MYCOM = 'mycom';
    const TYPE_YANDEX = 'yandex';
    const TYPE_GOOGLE = 'google';
    const ENUM_CONTACT_TYPE_EMAIL = 'email';
    // email
    const ENUM_CONTACT_TYPE_PHONE = 'phone';
    // phone
    const ENUM_CONTACT_TYPE_IDFA_GAID = 'idfa_gaid';
    // IDFA (Identifier For Advertising) or device ID (Android ID and UDID on iOS)
    const ENUM_CONTACT_TYPE_INTERNAL_ID = 'int';
    // internal social net id like Vk ID or Fb ID
    const MAX_CONTACTS_PER_PACKET = 100;
    const MIN_CONTACTS_FOR_ACTIVATING = 5000;
    const URL_AUDIENCE_LIST = '';
    protected $accountId;
    protected $audienceId;
    protected static $listRowMap = array('ID' => 'ID', 'NAME' => 'NAME', 'COUNT_VALID' => 'COUNT', 'COUNT_MATCHED' => 'COUNT', 'SUPPORTED_CONTACT_TYPES' => array(self::ENUM_CONTACT_TYPE_EMAIL, self::ENUM_CONTACT_TYPE_PHONE, self::ENUM_CONTACT_TYPE_IDFA_GAID, self::ENUM_CONTACT_TYPE_INTERNAL_ID));
    protected $isQueueModeEnabled = false;
    protected $isQueueAutoRemove = true;
    protected $queueDaysAutoRemove = 7;
    protected $emptyResponse = null;
    public function __construct($accountId = null)
    {
    }
    public function setAccountId($accountId)
    {
    }
    public static function normalizeEmail($email)
    {
    }
    public static function normalizePhone($phone)
    {
    }
    public static function isSupportMultiTypeContacts()
    {
    }
    public static function isSupportAccount()
    {
    }
    public static function isSupportAddAudience()
    {
    }
    public static function isAddingRequireContacts()
    {
    }
    public static function isSupportRemoveContacts()
    {
    }
    public function getLookalikeAudiencesParams()
    {
    }
    public static function getUrlAudienceList()
    {
    }
    public static function getMaxContactsPerPacket()
    {
    }
    public static function getMinContactsForActivating()
    {
    }
    public function disableQueueAutoRemove()
    {
    }
    public function enableQueueAutoRemove($daysNumber = null)
    {
    }
    public function disableQueueMode()
    {
    }
    public function enableQueueMode()
    {
    }
    public function isQueueModeEnabled()
    {
    }
    public function getById($itemId)
    {
    }
    protected function normalizeContacts(array $contacts = array())
    {
    }
    protected function addToQueue($audienceId, $contacts, $options = [], $isRemove = false)
    {
    }
    protected function deleteFromQueue($audienceId, $contacts)
    {
    }
    /**
     * @param $audienceId
     * @param array $contacts
     * @param array $options
     * @return Response
     */
    public function addContacts($audienceId, array $contacts = array(), array $options)
    {
    }
    /**
     * @param $audienceId
     * @param array $contacts
     * @param array $options
     * @return Response
     */
    public function deleteContacts($audienceId, array $contacts = array(), array $options)
    {
    }
    /**
     * Add.
     *
     * @param array $data Data.
     * @return Response
     */
    public abstract function add(array $data);
    /**
     * Get list.
     *
     * @return Response
     */
    public abstract function getList();
    /**
     * Import contacts.
     *
     * @param string $audienceId Audience ID.
     * @param array $contacts Contacts.
     * @param array $options Options.
     * @return Response
     */
    protected abstract function importContacts($audienceId, array $contacts = array(), array $options);
    /**
     * Remove contacts.
     *
     * @param string $audienceId Audience ID.
     * @param array $contacts Contacts.
     * @param array $options Options.
     * @return Response
     */
    protected abstract function removeContacts($audienceId, array $contacts = array(), array $options);
    public function createLookalike($sourceAudienceId, array $options)
    {
    }
    public function isQueueProcessed($parentId)
    {
    }
}