<?php

namespace Bitrix\Seo\LeadAds\Services;

class FormFacebook extends \Bitrix\Seo\LeadAds\Form
{
    const TYPE_CODE = \Bitrix\Seo\LeadAds\Service::TYPE_FACEBOOK;
    const URL_FORM_LIST = 'https://www.facebook.com/ads/manager/audiences/manage/';
    protected static $listRowMap = array('ID' => 'ID', 'NAME' => 'NAME', 'LOCALE' => 'LOCALE');
    protected function getLocaleByLanguageId($languageId = null)
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
    /**
     * Add.
     *
     * @param array $data Data.
     * @return \Bitrix\Seo\Retargeting\Response
     */
    public function add(array $data)
    {
    }
    /**
     * Unlink.
     *
     * @param string $id ID.
     * @return bool
     */
    public function unlink($id)
    {
    }
    protected function subscribeAppToPageEvents($pageAccessToken)
    {
    }
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
}