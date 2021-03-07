<?php

namespace Bitrix\Landing\Connector;

class SocialNetwork
{
    /**
     * Binding code short.
     */
    const SETTINGS_CODE_SHORT = 'knowledge';
    /**
     * Binding code.
     */
    const SETTINGS_CODE = 'landing_knowledge';
    /**
     * Path for binding group with new site.
     * @todo: it's not good, specify path in the code, but temporary it's ok
     */
    const PATH_GROUP_BINDING = 'kb/binding/group/create.php?groupId=#groupId#';
    /**
     * Gets binding row by group id.
     * @param int $groupId Group id.
     * @param bool $checkAccess Check read access.
     * @return array
     */
    public static function getBindingRow(int $groupId, bool $checkAccess = true)
    {
    }
    /**
     * Builds and returns social group menu link.
     * @param int $groupId Group id.
     * @param bool $returnCreateLink If true and link is no exist, returns create link.
     * @return string
     */
    public static function getSocNetMenuUrl($groupId, $returnCreateLink = true)
    {
    }
    /**
     * Fill settings array for social network group.
     * @param array &$socNetFeaturesSettings Settings array.
     * @return void
     */
    public static function onFillSocNetFeaturesList(&$socNetFeaturesSettings)
    {
    }
    /**
     * Fill menu array for social network group.
     * @param array &$result Menu array.
     * @return void
     */
    public static function onFillSocNetMenu(&$result)
    {
    }
    /**
     * Returns true, if current site is extranet.
     * @return bool
     */
    protected static function isExtranet()
    {
    }
    /**
     * If current hit is for opening url.
     * @param string $url Url for opening.
     * @return void
     */
    protected static function processTabHit($url)
    {
    }
    /**
     * Returns group path by id.
     * @param int $groupId Group id.
     * @param string $pagePath Page of landing.
     * @return string
     */
    public static function getTabUrl($groupId, $pagePath = null)
    {
    }
    /**
     * Returns true, if current user are member of group.
     * @param int $groupId Group id.
     * @return bool
     */
    public static function userInGroup($groupId)
    {
    }
    /**
     * On social network group delete.
     * @param int $groupId Group id.
     * @return void
     */
    public static function onSocNetGroupDelete($groupId)
    {
    }
}