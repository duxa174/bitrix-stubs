<?php

class MainUfDetailComponent extends \Bitrix\Main\UserField\ConfigComponent implements \Bitrix\Main\Engine\Contract\Controllerable
{
    protected const DEFAULT_USER_TYPE_ID = 'string';
    protected const DEFAULT_SORT = 100;
    protected $fieldId;
    protected $data;
    protected function init() : void
    {
    }
    public function executeComponent()
    {
    }
    protected function prepareField() : array
    {
    }
    protected function prepareForm(array $field) : array
    {
    }
    protected function getLanguages() : array
    {
    }
    public function configureActions() : array
    {
    }
    public function getSettingsAction(string $userTypeId) : \Bitrix\Main\Engine\Response\HtmlContent
    {
    }
    protected function generateFieldName() : string
    {
    }
    protected function getFieldPrefix() : string
    {
    }
}