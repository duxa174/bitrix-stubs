<?php

namespace Bitrix\Main\UserField;

abstract class ConfigComponent extends \CBitrixComponent
{
    public const ERROR_CODE_NO_MODULE_ERROR = 'UF_CONFIG_NO_MODULE';
    /** @var \Bitrix\Main\UserField\UserFieldAccess */
    protected $access;
    protected $entityId = '';
    protected $moduleId;
    /** @var ErrorCollection */
    protected $errorCollection;
    protected $userTypes;
    protected function init() : void
    {
    }
    protected function getNoModuleError() : \Bitrix\Main\Error
    {
    }
    protected function getAccessDeniedError() : \Bitrix\Main\Error
    {
    }
    protected function getUserTypes() : array
    {
    }
    protected function setTitle(string $title) : void
    {
    }
}