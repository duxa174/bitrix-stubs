<?php

namespace Bitrix\Main\UI\Selector;

class Entities
{
    const CODE_USER_REGEX = '/^U(\\d+)$/i';
    const CODE_USERALL_REGEX = '/^UA$/i';
    const CODE_USERMANAGER_REGEX = '/^USER_MANAGER$/i';
    const CODE_SONETGROUP_REGEX = '/^SG(\\d+)$/i';
    const CODE_GROUP_REGEX = '/^G(\\d+)$/i';
    const CODE_DEPT_REGEX = '/^D(\\d+)$/i';
    const CODE_DEPTR_REGEX = '/^DR(\\d+)$/i';
    const CODE_CRMCONTACT_REGEX = '/^CRMCONTACT(\\d+)$/i';
    const CODE_CRMCOMPANY_REGEX = '/^CRMCOMPANY(\\d+)$/i';
    const CODE_CRMLEAD_REGEX = '/^CRMLEAD(\\d+)$/i';
    const CODE_CRMDEAL_REGEX = '/^CRMDEAL(\\d+)$/i';
    const ENTITY_TYPE_DEPARTMENTS = 'DEPARTMENTS';
    const LIST_USER_LIMIT = 11;
    public static function getList($params = array())
    {
    }
    public static function getEntityType($params)
    {
    }
    public static function getData($options = array(), $entityTypes = array(), $selectedItems = array())
    {
    }
    public static function getProviderByEntityType($entityType)
    {
    }
    public static function getLastSort($params = array())
    {
    }
    public static function fillLastDestination($destSortData, $params = array())
    {
    }
    private static function compareDestinations($a, $b)
    {
    }
    private static function sortDestinations(&$destinationList, $destSortData)
    {
    }
    public static function search($options = array(), $entityTypes = array(), $requestFields = array())
    {
    }
    public static function loadAll($entityType)
    {
    }
    public static function save($params = [])
    {
    }
}