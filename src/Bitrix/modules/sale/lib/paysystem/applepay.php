<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Class ApplePay
 * @package Bitrix\Sale\PaySystem
 */
final class ApplePay
{
    private const MERCHANT_SESSION_GATEWAY = "https://apple-pay-gateway.apple.com/paymentservices/paymentSession";
    private const FILE_PREFIX = "apple_pay_cert_";
    private const HTTP_RESPONSE_CODE_OK = 200;
    /** @var string */
    private $merchantIdentifier;
    /** @var string */
    private $displayName;
    /** @var string */
    private $domainName;
    /** @var string */
    private $initiativeContext;
    /** @var string */
    private $applePayCert;
    /**
     * ApplePay constructor.
     *
     * @param $merchantIdentifier
     * @param $displayName
     * @param $domainName
     * @param $applePayCert
     */
    public function __construct(string $merchantIdentifier, string $displayName, string $domainName, string $applePayCert)
    {
    }
    /**
     * @param string $initiativeContext
     */
    public function setInitiativeContext(string $initiativeContext) : void
    {
    }
    /**
     * @param $url
     * @return ServiceResult
     */
    public function getWebSession($url) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @return ServiceResult
     */
    public function getIMessageSession() : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param array $config
     * @return ServiceResult
     * @throws Main\ArgumentNullException
     */
    public function getIMessagePayment(\Bitrix\Sale\Payment $payment, array $config) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param array $config
     * @return ServiceResult
     * @throws Main\ArgumentNullException
     */
    private function prepareIMessageData(\Bitrix\Sale\Payment $payment, array $config) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param array $config
     * @return ServiceResult
     */
    private function checkConfig(array $config) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param $url
     * @param array $params
     * @return ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function sendRequest($url, array $params = array()) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @return array
     */
    private function getHeaders() : array
    {
    }
    /**
     * @param $applePayCert
     * @return array
     */
    private function getContextOptions($applePayCert) : array
    {
    }
    /**
     * @param $data
     * @return string
     */
    private function createTmpFile($data) : string
    {
    }
    /**
     * @param array $data
     * @return mixed
     * @throws Main\ArgumentException
     */
    private static function encode(array $data)
    {
    }
    /**
     * @param string $data
     * @return mixed
     */
    private static function decode($data)
    {
    }
    /**
     * @return string
     */
    private static function getUuid() : string
    {
    }
}