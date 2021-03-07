<?php

namespace Bitrix\Landing\Binding;

class Group extends \Bitrix\Landing\Binding\Entity
{
    /**
     * Type of role for group's type.
     */
    const ROLE_TYPE = 'GROUP';
    /**
     * Binding type.
     * @var string
     */
    protected static $bindingType = 'G';
    /**
     * Accepts array with site data and replaces site title to group title.
     * @param array $input Site data ([ID] at least).
     * @return array
     */
    public static function recognizeSiteTitle(array $input) : array
    {
    }
    /**
     * Returns tasks for access.
     * @return array
     */
    protected static function getAccessTasks()
    {
    }
    /**
     * Returns role id for access to new site.
     * @return int
     */
    protected static function getRoleId()
    {
    }
    /**
     * Call when binding new group.
     * @param int $siteId Site id.
     * @return void
     */
    protected function addSiteRights($siteId)
    {
    }
    /**
     * Call when unbinding group.
     * @param int $siteId Site id.
     * @return void
     */
    protected function removeSiteRights($siteId)
    {
    }
}