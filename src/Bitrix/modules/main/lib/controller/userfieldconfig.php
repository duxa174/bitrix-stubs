<?php

namespace Bitrix\Main\Controller;

class UserFieldConfig extends \Bitrix\Main\Engine\Controller
{
    protected $moduleId;
    /** @var UserFieldAccess */
    protected $access;
    protected function init() : void
    {
    }
    protected function processBeforeAction(\Bitrix\Main\Engine\Action $action) : bool
    {
    }
    protected function processAfterAction(\Bitrix\Main\Engine\Action $action, $result)
    {
    }
    protected function getEmptyModuleIdError() : \Bitrix\Main\Error
    {
    }
    protected function getReadAccessDeniedError() : \Bitrix\Main\Error
    {
    }
    protected function getAddAccessDeniedError() : \Bitrix\Main\Error
    {
    }
    protected function getUpdateAccessDeniedError() : \Bitrix\Main\Error
    {
    }
    protected function getDeleteAccessDeniedError() : \Bitrix\Main\Error
    {
    }
    protected function getCommonError() : \Bitrix\Main\Error
    {
    }
    public function getTypesAction() : array
    {
    }
    protected function prepareFields(array $fields) : array
    {
    }
    public function preparePublicData(array $field) : array
    {
    }
    protected function fillErrorsFromApplication() : void
    {
    }
    protected function prepareEnums(array $newEnums, array $currentEnums) : array
    {
    }
    protected function updateEnums(int $id, array $enums, array $currentEnums = []) : void
    {
    }
    public function getAction(int $id) : ?array
    {
    }
    public function listAction(array $select = ['*'], array $order = [], array $filter = [], \Bitrix\Main\UI\PageNavigation $pageNavigation = null) : ?\Bitrix\Main\Engine\Response\DataType\Page
    {
    }
    public function addAction(array $field) : ?array
    {
    }
    public function updateAction(int $id, array $field) : ?array
    {
    }
    public function deleteAction(int $id) : void
    {
    }
}