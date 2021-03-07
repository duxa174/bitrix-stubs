<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class Cashbox1C
 * @package Bitrix\Sale\Cashbox
 */
class Cashbox1C extends \Bitrix\Sale\Cashbox\Cashbox
{
    const CACHE_ID = 'BITRIX_CASHBOX_1C_ID';
    const TTL = 31536000;
    /**
     * @param Check $check
     * @return array
     */
    public function buildCheckQuery(\Bitrix\Sale\Cashbox\Check $check)
    {
    }
    /**
     * @param $id
     * @return array
     */
    public function buildZReportQuery($id)
    {
    }
    /**
     * @return string
     */
    public static function getName()
    {
    }
    /**
     * @return int
     */
    public static function getId()
    {
    }
    /**
     * @param array $data
     * @throws Main\NotImplementedException
     * @return array
     */
    protected static function extractCheckData(array $data)
    {
    }
}