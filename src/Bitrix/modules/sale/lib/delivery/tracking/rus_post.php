<?php

namespace Bitrix\Sale\Delivery\Tracking;

/**
 * Class RusPost
 * @package Bitrix\Sale\Delivery\Tracking
 * https://tracking.pochta.ru/specification
 */
class RusPost extends \Bitrix\Sale\Delivery\Tracking\Base
{
    /**
     * @return string
     */
    public function getClassTitle()
    {
    }
    /**
     * @return string
     */
    public function getClassDescription()
    {
    }
    /**
     * @param $trackingNumber
     * @return \Bitrix\Sale\Delivery\Tracking\StatusResult.
     */
    public function getStatus($trackingNumber)
    {
    }
    /**
     * @param array $trackingNumbers
     * @return StatusResult[]
     * todo: by package of 3000 items
     */
    public function getStatuses(array $trackingNumbers)
    {
    }
    /**
     * @return array
     */
    public function getParamsStructure()
    {
    }
    /**
     * Checks if tracknumber matches to required format.
     * 14 - digit,
     * 13 symbols like pattern XX123456789YY (UPU-S10)
     * @param string $trackNumber
     * @return bool
     */
    protected function checkTrackNumberFormat($trackNumber)
    {
    }
    /**
     * @param string $trackingNumber
     * @return string Url were we can see tracking information
     */
    public function getTrackingUrl($trackingNumber = '')
    {
    }
}
/**
 * Class RusPostSingle
 * @package Bitrix\Sale\Delivery\Tracking
 */
class RusPostSingle
{
    const LANG_RUS = "RUS";
    const LANG_ENG = "ENG";
    protected $client = null;
    protected $lang = "";
    protected $login = "";
    protected $password = "";
    protected static $url = 'https://tracking.russianpost.ru/rtm34';
    /**
     * @param string $login
     * @param string $password
     * @param string $lang
     */
    public function __construct($login, $password, $lang = self::LANG_RUS)
    {
    }
    public function sendRequest($requestData)
    {
    }
    /**
     * @param string $trackingNumber
     * @return StatusResult
     */
    public function getOperationHistory($trackingNumber)
    {
    }
    /**
     * @param $lastOperation
     * @return int
     */
    protected function extractLastChangeDate($lastOperation)
    {
    }
    /**
     * @param $answer
     * @return mixed|null
     */
    protected function getLastOperation(array $answer)
    {
    }
    /**
     * @param string $trackingNumber
     * @return string
     */
    protected function createDescription($trackingNumber)
    {
    }
    /**
     * @param $lastOperation
     * @return int
     */
    protected function extractStatus(array $lastOperation)
    {
    }
    /**
     * Maps outer operationCode and attributeCode to inner status enumerated in class Statuses
     * @param $oper
     * @param $attr
     * @return int
     */
    protected function mapStatus($oper, $attr)
    {
    }
}