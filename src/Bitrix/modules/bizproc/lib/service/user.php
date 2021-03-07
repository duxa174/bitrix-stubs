<?php

namespace Bitrix\Bizproc\Service;

class User extends \CBPRuntimeService
{
    protected const DEPARTMENT_MODULE_ID = 'intranet';
    protected const DEPARTMENT_OPTION_NAME = 'iblock_structure';
    public function getUserDepartments(int $userId) : array
    {
    }
    public function getUserInfo(int $userId) : ?array
    {
    }
    public function getUserDepartmentChains(int $userId) : array
    {
    }
    public function getDepartmentChain(int $departmentId) : array
    {
    }
    public function getUserHeads(int $userId) : array
    {
    }
    public function getDepartmentHead(int $departmentId) : ?int
    {
    }
    public function getUserSchedule(int $userId) : \Bitrix\Bizproc\Service\Sub\UserSchedule
    {
    }
    protected function getDepartmentIblockId() : int
    {
    }
    private function canUseIblockApi()
    {
    }
}