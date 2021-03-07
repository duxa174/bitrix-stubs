<?php

namespace Bitrix\Sender\Access\Service;

class RoleDealCategoryService implements \Bitrix\Sender\Access\Service\RoleDealCategoryServiceInterface
{
    public const ALL_CATEGORIES = -1;
    /**
     * @var RolePermissionServiceInterface
     */
    private $rolePermissionService;
    /**
     * @inheritDoc
     */
    public function __construct()
    {
    }
    /**
     * get able deal categories by user id
     * @param int $userId
     *
     * @return array
     * @throws SqlQueryException
     */
    public function getAbleDealCategories(int $userId) : array
    {
    }
    /**
     * @param int $userId
     * @param array $categories
     *
     * @return array
     * @throws SqlQueryException
     */
    public function getFilteredDealCategories(int $userId, array $categories) : array
    {
    }
    /**
     * @param int $dealCategoryId
     *
     * @return array
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws SqlQueryException
     *
     */
    public function fillDefaultDealCategoryPermission(int $dealCategoryId) : array
    {
    }
}