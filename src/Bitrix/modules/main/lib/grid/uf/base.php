<?php

namespace Bitrix\Main\Grid\Uf;

class Base
{
    protected $entityTypeId;
    protected $userFieldsReserved = [];
    public function __construct($entityTypeId)
    {
    }
    protected function getEntityUFList()
    {
    }
    protected function getUserFieldsReserved()
    {
    }
    public function addUFHeaders(&$gridHeaders, $import = false)
    {
    }
    protected function postFilterFields(array $fields)
    {
    }
}