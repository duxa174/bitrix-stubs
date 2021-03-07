<?php

class CSocNetLogDestination
{
    const LIST_USER_LIMIT = 11;
    /**
     * Retrieves last used users from socialnetwork/log_destination UserOption
     * @deprecated
     */
    public static function GetLastUser()
    {
    }
    /**
     * Retrieves last used sonet groups from socialnetwork/log_destination UserOption
     * @deprecated
     */
    public static function GetLastSocnetGroup()
    {
    }
    /**
     * Retrieves last used department from socialnetwork/log_destination UserOption
     * @deprecated
     */
    public static function GetLastDepartment()
    {
    }
    public static function GetStucture($arParams = array())
    {
    }
    public static function GetExtranetUser(array $arParams = array())
    {
    }
    public static function GetUsers($arParams = array(), $bSelf = \true)
    {
    }
    public static function GetGratMedalUsers($arParams = array())
    {
    }
    public function __percent_walk(&$val)
    {
    }
    public static function searchUsers($search, &$nt = "", $bSelf = \true, $bEmployeesOnly = \false, $bExtranetOnly = \false, $departmentId = \false)
    {
    }
    public static function searchSonetGroups($params = array())
    {
    }
    public static function SearchCrmEntities($arParams)
    {
    }
    public static function getSocnetGroup($arParams = array(), &$limitReached = \false)
    {
    }
    public static function GetTreeList($id, $relation, $compat = \false)
    {
    }
    private static function GetSocnetGroupFilteredByFeaturePerms(&$arGroups, $arFeaturePerms)
    {
    }
    private static function GetSocnetGroupFilteredByInitiatePerms(&$arGroups)
    {
    }
    public static function GetDestinationUsers($accessCodes, $fetchUsers = \false)
    {
    }
    public static function GetDestinationSort($arParams = array(), &$dataAdditional = \false)
    {
    }
    public static function fillLastDestination($arDestinationSort, &$arLastDestination, $arParams = array())
    {
    }
    public static function fillEmails(&$arDest)
    {
    }
    public static function fillCrmEmails(&$arDest)
    {
    }
    public static function getUsersAll($arParams = [])
    {
    }
    public static function formatUser($arUser, $arParams = array())
    {
    }
    public static function formatCrmEmailEntity($fields, $params = array())
    {
    }
    public static function formatNetworkUser($fields, $params = array())
    {
    }
    private static function getExternalAuthIdBlackList($params = array())
    {
    }
    public static function getUserDescription(array $userFields = [], array $params = [])
    {
    }
}