<?php

namespace Bitrix\Seo\LeadAds;

abstract class Form extends \Bitrix\Seo\Retargeting\BaseApiObject implements \Bitrix\Seo\Retargeting\IRequestDirectly
{
    const URL_FORM_LIST = '';
    const USE_GROUP_AUTH = false;
    /** @var  array $listRowMap Map. */
    protected static $listRowMap = array('ID' => 'ID', 'NAME' => 'NAME');
    /** @var  string|null $accountId Account ID. */
    protected $accountId;
    /** @var  string|null $formId Form ID. */
    protected $formId;
    /**
     * Form constructor.
     *
     * @param string|null $accountId Account ID.
     */
    public function __construct($accountId = null)
    {
    }
    /**
     * Set account id.
     *
     * @param string $accountId Account ID.
     * @return mixed
     */
    public function setAccountId($accountId)
    {
    }
    /**
     * Get list.
     *
     * @return Response
     */
    public abstract function getList();
    /**
     * Get result.
     *
     * @param WebHook\Payload\LeadItem $item Payload item instance.
     * @return Result
     */
    public abstract function getResult(\Bitrix\Seo\WebHook\Payload\LeadItem $item);
    /**
     * Add.
     *
     * @param array $data Data.
     * @return Response
     */
    public abstract function add(array $data);
    /**
     * Unlink.
     *
     * @param string $id.
     * @return bool
     */
    public abstract function unlink($id);
    /**
     * Get registered groups.
     *
     * @return string[]
     */
    public function getRegisteredGroups()
    {
    }
    /**
     * Unregister group.
     *
     * @param string $groupId Group ID.
     * @return bool
     */
    public function unRegisterGroup($groupId)
    {
    }
    /**
     * Register group.
     *
     * @param string $groupId Group ID.
     * @return bool
     */
    public function registerGroup($groupId)
    {
    }
    /**
     * Convert field.
     *
     * @param Field $field Field.
     * @return array
     */
    public static function convertField(\Bitrix\Seo\LeadAds\Field $field)
    {
    }
    /**
     * Convert fields.
     *
     * @param Field[] $fields Fields.
     * @return array
     */
    public static function convertFields(array $fields)
    {
    }
    /**
     * Get form list url.
     *
     * @return string
     */
    public static function getUrlFormList()
    {
    }
    /**
     * Is account supported.
     *
     * @return bool
     */
    public static function isSupportAccount()
    {
    }
    /**
     * Get privacy policy url.
     *
     * @return string
     */
    public static function getPrivacyPolicyUrl()
    {
    }
    protected function registerFormWebHook($adsFormId, array $parameters = [])
    {
    }
    protected function removeFormWebHook($adsFormId)
    {
    }
    /**
     * Return true if group auth used.
     *
     * @return bool
     */
    public static function isGroupAuthUsed()
    {
    }
    protected function getAuthParameters()
    {
    }
    /**
     * Get group auth adapter.
     *
     * @return Retargeting\AuthAdapter|null
     */
    public function getGroupAuthAdapter()
    {
    }
}