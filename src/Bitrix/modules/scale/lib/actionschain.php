<?php

namespace Bitrix\Scale;

/**
 * Class ActionsChain
 * @package Bitrix\Scale
 */
class ActionsChain
{
    protected $id = "";
    protected $userParams = array();
    protected $freeParams = array();
    protected $actionParams = array();
    protected $resultData = array();
    protected $serverHostname = "";
    public $results = [];
    /**
     * @param string $actionId
     * @param array $actionParams
     * @param string $serverHostname
     * @param array $userParams
     * @param array $freeParams
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function __construct($actionId, $actionParams, $serverHostname = "", $userParams = array(), $freeParams = array())
    {
    }
    public function getResult()
    {
    }
    public function getActionObj($actionId)
    {
    }
    public function start($inputParams = array())
    {
    }
}