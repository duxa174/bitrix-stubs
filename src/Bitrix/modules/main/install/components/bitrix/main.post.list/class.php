<?php

final class MainPostList extends \CBitrixComponent
{
    const STATUS_SCOPE_MOBILE = 'mobile';
    const STATUS_SCOPE_WEB = 'web';
    private $scope = \null;
    private $sign;
    static $users = array();
    public $exemplarId;
    public function __construct($component = \null)
    {
    }
    protected function isWeb()
    {
    }
    protected function isAjax()
    {
    }
    protected function getMode()
    {
    }
    protected function joinToPull()
    {
    }
    protected function sendIntoPull(array &$arParams, array &$arResult)
    {
    }
    protected function buildUser($id)
    {
    }
    protected function buildComment(&$res)
    {
    }
    public function parseTemplate(array $res, array $arParams, $template)
    {
    }
    protected function prepareParams(array &$arParams, array &$arResult)
    {
    }
    public function executeComponent()
    {
    }
    protected function sendJsonResponse($response)
    {
    }
    private function parseHTML($response, $mode = "RECORD")
    {
    }
    protected function getApplication()
    {
    }
    protected function getUser()
    {
    }
    protected function getUserId()
    {
    }
    public function getDateTimeFormatted($timestamp, $arFormatParams)
    {
    }
}