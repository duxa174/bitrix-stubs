<?php

namespace Bitrix\Rest;

class LicenseException extends \Bitrix\Rest\AccessException
{
    const MESSAGE = 'This feature is not enabled for the current license:';
    const CODE = 'WRONG_LICENSE';
}