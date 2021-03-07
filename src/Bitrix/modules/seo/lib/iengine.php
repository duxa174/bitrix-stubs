<?php

namespace Bitrix\Seo;

interface IEngine
{
    public function getCode();
    public function getInterface();
    public function getAuthSettings();
    public function setAuthSettings($settings);
}