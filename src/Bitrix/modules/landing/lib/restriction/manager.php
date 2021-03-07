<?php

namespace Bitrix\Landing\Restriction;

class Manager
{
    /**
     * Restrictions map.
     */
    const MAP = ['limit_sites_google_analytics' => ['check_callback' => ['\\Bitrix\\Landing\\Restriction\\Hook', 'isAllowed']], 'limit_sites_powered_by' => ['check_callback' => ['\\Bitrix\\Landing\\Restriction\\Hook', 'isAllowed']], 'limit_sites_html_js' => ['check_callback' => ['\\Bitrix\\Landing\\Restriction\\Hook', 'isAllowed']], 'limit_sites_access_permissions' => ['check_callback' => ['\\Bitrix\\Landing\\Restriction\\Rights', 'isAllowed']], 'limit_sites_transfer' => ['check_callback' => ['\\Bitrix\\Landing\\Restriction\\Site', 'isExportAllowed']], 'limit_free_domen' => ['check_callback' => ['\\Bitrix\\Landing\\Restriction\\Site', 'isFreeDomainAllowed']], 'limit_sites_number' => ['check_callback' => ['\\Bitrix\\Landing\\Restriction\\Site', 'isCreatingAllowed'], 'scope_alias' => ['knowledge' => 'limit_knowledge_base_number_page', 'group' => 'limit_knowledge_base_number_page']], 'limit_sites_number_page' => ['check_callback' => ['\\Bitrix\\Landing\\Restriction\\Landing', 'isCreatingAllowed'], 'scope_alias' => ['knowledge' => 'limit_knowledge_base_number_page', 'group' => 'limit_knowledge_base_number_page']], 'limit_knowledge_base_number_page' => ['check_callback' => ['\\Bitrix\\Landing\\Restriction\\Site', 'isCreatingAllowed']], 'limit_knowledge_base_number_page_view' => ['check_callback' => ['\\Bitrix\\Landing\\Restriction\\Knowledge', 'isViewAllowed']], 'limit_sites_dynamic_blocks' => ['check_callback' => ['\\Bitrix\\Landing\\Restriction\\Block', 'isDynamicEnabled']]];
    /**
     * Returns map's item by code.
     * @param string $code Item code.
     * @return array
     */
    protected static function getMapItem(string $code) : ?array
    {
    }
    /**
     * Returns JS action for the restriction.
     * @param string|null $code Restriction code.
     * @return string|null
     */
    public static function getActionCode(string $code) : ?string
    {
    }
    /**
     * Includes necessary component.
     * @return void
     */
    protected static function includeInformerComponent() : void
    {
    }
    /**
     * Returns lock icon html by restriction code.
     * @param string|null $code Restriction code.
     * @param array $nodes Html nodes for binding click event.
     * @return string|null
     */
    public static function getLockIcon(?string $code, array $nodes = []) : ?string
    {
    }
    /**
     * @param string|null $code Restriction code.
     * @return string|null
     */
    public static function getSystemErrorMessage($code) : ?string
    {
    }
    /**
     * Checks restriction existing by code.
     * @param string $code Restriction code.
     * @param array $params Additional params.
     * @return bool
     */
    public static function isAllowed(string $code, array $params = []) : bool
    {
    }
}