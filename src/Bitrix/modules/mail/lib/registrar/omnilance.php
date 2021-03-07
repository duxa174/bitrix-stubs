<?php

namespace Bitrix\Mail\Registrar;

class Omnilance extends \Bitrix\Mail\Registrar\Registrar
{
    /**
     * Base endpoint url.
     */
    const BASE_ENDPOINT = 'https://api.omnilance.com/v3/';
    /**
     * API key.
     * @var string
     */
    private $apiKey;
    /**
     * Secret key.
     * @var string
     */
    private $secretKey;
    /**
     * Http Client instance.
     * @var \Bitrix\Main\Web\HttpClient
     */
    private $http;
    /**
     * Omnilance constructor.
     * @param string $apiKey API key.
     * @param string $secretKey Secret key.
     */
    public function __construct(string $apiKey, string $secretKey)
    {
    }
    /**
     * Set necessary headers.
     * @param string $endPoint End point.
     * @param string $payLoad Payload.
     * @return void
     */
    private function setHeaders(string $endPoint, string $payLoad) : void
    {
    }
    /**
     * Sends command.
     * @param string $endPoint End point.
     * @param string $payLoad Payload.
     * @return string
     */
    private function sendPostCommand(string $endPoint, string $payLoad) : string
    {
    }
    /**
     * Checks domain available.
     * @param string $user User name.
     * @param string $password User password.
     * @param string $domain Domain name.
     * @param string|null &$error Error message if occurred.
     * @return bool|null Returns true if domain exists.
     */
    public static function checkDomain(string $user, string $password, string $domain, ?string &$error) : ?bool
    {
    }
    /**
     * Suggests domains by query words.
     * @param string $user User name.
     * @param string $password User password.
     * @param string $word1 Query word 1.
     * @param string $word2 Query word 2.
     * @param array $tlds Query tlds.
     * @param string|null &$error Error message if occurred.
     * @return array|null
     */
    public static function suggestDomain(string $user, string $password, string $word1, string $word2, array $tlds, ?string &$error) : ?array
    {
    }
    /**
     * Creates new domain.
     * @param string $user User name.
     * @param string $password User password.
     * @param string $domain Domain name.
     * @param array $params Additional params.
     * @param string|null &$error Error message if occurred.
     * @return bool|null Returns true on success.
     */
    public static function createDomain(string $user, string $password, string $domain, array $params, ?string &$error) : ?bool
    {
    }
    /**
     * Updates domain DNS.
     * @param string $user User name.
     * @param string $password User password.
     * @param string $domain Domain name.
     * @param array $params Additional params.
     * @param string|null &$error Error message if occurred.
     * @return bool|null Returns true on success.
     */
    public static function updateDns(string $user, string $password, string $domain, array $params, ?string &$error) : ?bool
    {
    }
}