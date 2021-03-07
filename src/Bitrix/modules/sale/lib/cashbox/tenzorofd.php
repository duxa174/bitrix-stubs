<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class TenzorOfd
 * @package Bitrix\Sale\Cashbox
 */
class TenzorOfd extends \Bitrix\Sale\Cashbox\Ofd
{
    const ACTIVE_URL = 'https://ofd.sbis.ru/rec/';
    /**
     * @return string
     */
    protected function getUrl()
    {
    }
    /**
     * @throws Main\NotImplementedException
     * @return string
     */
    public static function getName()
    {
    }
    /**
     * @param $data
     * @return string
     */
    public function generateCheckLink($data)
    {
    }
}