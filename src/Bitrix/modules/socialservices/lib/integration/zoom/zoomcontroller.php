<?php

namespace Bitrix\SocialServices\Integration\Zoom;

class ZoomController extends \Bitrix\Main\Service\MicroService\BaseSender
{
    protected const DEFAULT_SERVICE_URL = "https://zoom.bitrix.info/";
    protected function getServiceUrl() : string
    {
    }
    public function registerZoomUser(array $userData) : \Bitrix\Main\Result
    {
    }
}