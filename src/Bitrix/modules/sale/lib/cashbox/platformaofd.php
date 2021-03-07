<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class PlatformaOfd
 * @package Bitrix\Sale\Cashbox
 */
class PlatformaOfd extends \Bitrix\Sale\Cashbox\Ofd
{
    const ACTIVE_URL = 'https://lk.platformaofd.ru/web/noauth/cheque?';
    /**
     * @return string
     */
    protected function getUrl()
    {
    }
    /**
     * @return array
     */
    protected function getLinkParamsMap()
    {
    }
    /**
     * @throws Main\NotImplementedException
     * @return string
     */
    public static function getName()
    {
    }
}