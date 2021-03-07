<?php

/**
 * Class AddressBookComponent
 */
class AddressBookComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable
{
    public function configureActions()
    {
    }
    protected $rowsCount = 20;
    private function getRowsCount()
    {
    }
    protected $gridId = 'MAIL_ADDRESSBOOK_LIST';
    private function canEdit()
    {
    }
    private function getDataFilter()
    {
    }
    private function setUiFilter()
    {
    }
    private function setColumns()
    {
    }
    private function setRows()
    {
    }
    /**
     * @return false|mixed|null
     * @throws \Bitrix\Main\LoaderException
     */
    public function executeComponent()
    {
    }
    private function removeContacts($idSet)
    {
    }
    private function processGridRequests($gridId)
    {
    }
}