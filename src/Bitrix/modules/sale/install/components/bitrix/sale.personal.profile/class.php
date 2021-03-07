<?php

class PersonalProfile extends \CBitrixComponent
{
    const E_SALE_MODULE_NOT_INSTALLED = 10000;
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