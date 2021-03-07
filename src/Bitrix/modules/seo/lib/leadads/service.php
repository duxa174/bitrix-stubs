<?php

namespace Bitrix\Seo\LeadAds;

/**
 * Class Service
 *
 * @package Bitrix\Seo\LeadAds
 */
class Service implements \Bitrix\Seo\Retargeting\IService
{
    const GROUP = 'leadads';
    const TYPE_FACEBOOK = 'facebook';
    const TYPE_VKONTAKTE = 'vkontakte';
    /**
     * Get instance.
     *
     * @return static
     */
    public static function getInstance()
    {
    }
    /**
     * Get engine code by type.
     *
     * @param string $type Type
     * @return string
     */
    public static function getEngineCode($type)
    {
    }
    /**
     * Get Form by type.
     *
     * @param string $type Type
     * @return Form
     */
    public static function getForm($type)
    {
    }
    /**
     * Get group auth.
     *
     * @param string $type Type
     * @return AuthAdapter
     */
    public static function getGroupAuth($type)
    {
    }
    /**
     * Register group.
     *
     * @param string $type Type.
     * @param string $groupId Group ID.
     * @return bool
     */
    public static function registerGroup($type, $groupId)
    {
    }
    /**
     * UnRegister group.
     *
     * @param string $type Type.
     * @param string $groupId Group ID.
     * @return bool
     */
    public static function unRegisterGroup($type, $groupId)
    {
    }
    /**
     * Remove group auth.
     *
     * @param string $type Type
     * @return void
     */
    public static function removeGroupAuth($type)
    {
    }
    /**
     * Get Account by type.
     *
     * @param string $type Type
     * @return Account
     */
    public static function getAccount($type)
    {
    }
    /**
     * Get type list.
     *
     * @return array
     */
    public static function getTypes()
    {
    }
    /**
     * Get auth adapter.
     *
     * @param string $type Type
     * @return AuthAdapter
     */
    public static function getAuthAdapter($type)
    {
    }
}