<?php

class PersonalAccountComponent extends \CBitrixComponent
{
    const E_SALE_MODULE_NOT_INSTALLED = 10000;
    const E_NOT_AUTHORIZED = 10001;
    /**
     * @return bool
     * @throws \Bitrix\Main\LoaderException
     */
    protected function checkRequirements()
    {
    }
    /**
     * PersonalAccountComponent constructor.
     *
     * @param null $component
     */
    public function __construct($component = \null)
    {
    }
    /**
     * Execute component
     *
     * @return void
     */
    public function executeComponent()
    {
    }
    private function obtainAccountData()
    {
    }
}