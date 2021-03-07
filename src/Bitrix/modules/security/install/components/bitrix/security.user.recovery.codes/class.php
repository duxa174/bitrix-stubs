<?php

class CSecurityUserRecoveryCodesComponent extends \CBitrixComponent
{
    const VIEW_PAGE = 'template';
    const PRINT_PAGE = 'print';
    public function onPrepareComponentParams($arParams)
    {
    }
    public function executeComponent()
    {
    }
    protected function doPostAction($action)
    {
    }
    /**
     * @param string $action
     * @return array
     */
    protected function toView($action = \null)
    {
    }
    /**
     * @param string $action
     * @return array
     */
    protected function toEdit($action = \null)
    {
    }
    protected function getRecoveryCodes($isActiveOnly = \false, $isRegenerationAllowed = \false)
    {
    }
    protected function regenerateRecoveryCodes()
    {
    }
    protected function checkRequirements()
    {
    }
}