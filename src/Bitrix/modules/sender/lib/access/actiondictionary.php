<?php

namespace Bitrix\Sender\Access;

class ActionDictionary
{
    const ACTION_MAILING_VIEW = 'mailing_view';
    const ACTION_MAILING_EMAIL_EDIT = 'mailing_email_edit';
    const ACTION_MAILING_SMS_EDIT = 'mailing_sms_edit';
    const ACTION_MAILING_MESSENGER_EDIT = 'mailing_messenger_edit';
    const ACTION_MAILING_INFO_CALL_EDIT = 'mailing_info_call_edit';
    const ACTION_MAILING_AUDIO_CALL_EDIT = 'mailing_audio_call_edit';
    const ACTION_MAILING_PAUSE_START_STOP = 'mailing_pause_start_stop';
    const ACTION_MAILING_CLIENT_VIEW = 'mailing_client_view';
    const ACTION_ADS_VIEW = 'ads_view';
    const ACTION_ADS_YANDEX_EDIT = 'ads_yandex_edit';
    const ACTION_ADS_GOOGLE_EDIT = 'ads_google_edit';
    const ACTION_ADS_VK_EDIT = 'ads_vk_edit';
    const ACTION_ADS_FB_INSTAGRAM_EDIT = 'ads_fb_instagram_edit';
    const ACTION_ADS_LOOK_ALIKE_VK_EDIT = 'ads_look_alike_vk_edit';
    const ACTION_ADS_LOOK_ALIKE_FB_EDIT = 'ads_look_alike_fb_edit';
    const ACTION_ADS_PAUSE_START_STOP = 'ads_pause_start_stop';
    const ACTION_ADS_CLIENT_VIEW = 'ads_client_view';
    const ACTION_ADS_CONNECT_CABINET = 'ads_connect_cabinet';
    const ACTION_RC_EDIT = 'rc_edit';
    const ACTION_RC_VIEW = 'rc_view';
    const ACTION_RC_PAUSE_START_STOP = 'rc_pause_start_stop';
    const ACTION_SEGMENT_EDIT = 'segment_edit';
    const ACTION_SEGMENT_VIEW = 'segment_view ';
    const ACTION_SEGMENT_CLIENT_EDIT = 'segment_client_edit';
    const ACTION_SEGMENT_CLIENT_VIEW = 'segment_client_view';
    const ACTION_SEGMENT_CLIENT_OWN_CATEGORY = 'segment_client_own_category';
    const ACTION_SEGMENT_LEAD_EDIT = 'segment_lead_edit';
    const ACTION_SEGMENT_CLIENT_PERSONAL_EDIT = 'segment_client_personal_edit';
    const ACTION_BLACKLIST_EDIT = 'blacklist_edit';
    const ACTION_BLACKLIST_VIEW = 'blacklist_view';
    const ACTION_TEMPLATE_EDIT = 'template_edit';
    const ACTION_TEMPLATE_VIEW = 'template_view';
    const ACTION_START_VIEW = 'start_view';
    const ACTION_SETTINGS_EDIT = 'settings_edit';
    //	const ACTION_SETTINGS_VIEW  = 'settings_view';
    public const PREFIX = "ACTION_";
    protected static function getClassName()
    {
    }
    /**
     * permission on action
     * @return array
     */
    public static function getActionPermissionMap()
    {
    }
    /**
     * legacy security map
     * @return array
     */
    public static function getLegacyMap()
    {
    }
    /**
     * get action name by string value
     * @param string $value string value of action
     *
     * @return string|null
     * @throws \ReflectionException
     */
    public static function getActionName(string $value) : ?string
    {
    }
    /**
     * @return array
     * @throws \ReflectionException
     */
    private static function getActionNames() : array
    {
    }
}