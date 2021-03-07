<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class TaxcomOfd
 * @package Bitrix\Sale\Cashbox
 */
class TaxcomOfd extends \Bitrix\Sale\Cashbox\Ofd
{
    const ACTIVE_URL = 'https://receipt.taxcom.ru/v01/show?';
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
     * @return array
     */
    protected function getLinkParamsMap()
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