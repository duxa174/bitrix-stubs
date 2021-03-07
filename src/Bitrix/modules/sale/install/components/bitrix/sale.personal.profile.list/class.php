<?php

class PersonalProfileList extends \CBitrixComponent
{
    const E_SALE_MODULE_NOT_INSTALLED = 10000;
    const E_NOT_AUTHORIZED = 10001;
    /** @var  Main\ErrorCollection $errorCollection*/
    protected $errorCollection;
    /**
     * Function checks and prepares all the parameters passed. Everything about $arParam modification is here.
     * @param mixed[] $params List of unchecked parameters
     * @return mixed[] Checked and valid parameters
     */
    public function onPrepareComponentParams($params)
    {
    }
    public function executeComponent()
    {
    }
    /**
     * Function checks if required modules installed. If not, throws an exception
     * @throws Main\SystemException
     * @return void
     */
    protected function checkRequiredModules()
    {
    }
}