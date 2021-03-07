<?php

namespace Bitrix\Socialservices\Controller;

class ZoomUser extends \Bitrix\Main\Service\MicroService\BaseReceiver
{
    protected $zoomSocServ;
    public function deauthorizeAction(string $socServLogin, array $payload) : void
    {
    }
}