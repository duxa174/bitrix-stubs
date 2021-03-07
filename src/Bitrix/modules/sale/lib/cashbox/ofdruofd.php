<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class OfdruOfd
 * @package Bitrix\Sale\Cashbox
 */
class OfdruOfd extends \Bitrix\Sale\Cashbox\Ofd
{
    const ACTIVE_URL = 'https://ofd.ru/rec/';
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
    /**
     * @return array
     */
    public static function getSettings()
    {
    }
    /**
     * @return Result
     */
    public function validate()
    {
    }
}