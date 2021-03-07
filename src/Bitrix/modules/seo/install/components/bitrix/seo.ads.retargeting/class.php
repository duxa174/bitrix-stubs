<?php

class SeoAdsRetargetingComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable
{
    /** @var ErrorCollection $errors */
    protected $errors;
    protected function checkRequiredParams()
    {
    }
    protected function initParams()
    {
    }
    protected function listKeysSignedParameters()
    {
    }
    protected function prepareResult()
    {
    }
    protected function printErrors()
    {
    }
    public function executeComponent()
    {
    }
    public function onPrepareComponentParams($arParams)
    {
    }
    protected function checkAccess()
    {
    }
    protected function prepareAjaxAnswer(array $data)
    {
    }
    public function configureActions()
    {
    }
    public function getAccountsAction($type, $clientId = \null)
    {
    }
    public function getProviderAction($type, $clientId = \null)
    {
    }
    public function logoutAction($type, $clientId = \null, $logoutClientId = \null)
    {
    }
    public function getAudiencesAction($type, $clientId = \null, $accountId = \null)
    {
    }
    public function addAudienceAction($type, $name = \null, $clientId = \null, $accountId = \null)
    {
    }
    public function getRegionsAction($type, $clientId = \null)
    {
    }
    protected static function getAdsProvider($adsType, $clientId = \null)
    {
    }
}