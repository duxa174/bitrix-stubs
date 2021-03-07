<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class ConturOfd
 * @package Bitrix\Sale\Cashbox
 */
class ConturOfd extends \Bitrix\Sale\Cashbox\Ofd
{
    const ACTIVE_URL = 'https://cash-ntt.kontur.ru/CashReceipt/View';
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