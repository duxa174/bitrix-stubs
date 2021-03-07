<?php

namespace Bitrix\Main\Engine\Response;

class Redirect extends \Bitrix\Main\HttpResponse
{
    /** @var string|Main\Web\Uri $url */
    private $url;
    /** @var bool */
    private $skipSecurity;
    public function __construct($url, bool $skipSecurity = false)
    {
    }
    /**
     * @return Main\Web\Uri|string
     */
    public function getUrl()
    {
    }
    /**
     * @param Main\Web\Uri|string $url
     * @return $this
     */
    public function setUrl($url)
    {
    }
    /**
     * @return bool
     */
    public function isSkippedSecurity() : bool
    {
    }
    /**
     * @param bool $skipSecurity
     * @return $this
     */
    public function setSkipSecurity(bool $skipSecurity)
    {
    }
    private function checkTrial() : bool
    {
    }
    private function isExternalUrl($url) : bool
    {
    }
    private function modifyBySecurity($url)
    {
    }
    private function processInternalUrl($url)
    {
    }
    public function send()
    {
    }
}