<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class FirstOfd
 * @package Bitrix\Sale\Cashbox
 */
class FirstOfd extends \Bitrix\Sale\Cashbox\Ofd
{
    const ACTIVE_URL = 'https://consumer.1-ofd.ru/v1?';
    const TEST_URL = 'https://test-consumer.1-ofd.ru/v1?';
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
     * @param $data
     * @return string
     */
    public function generateCheckLink($data)
    {
    }
    /**
     * @return array
     */
    private function getCalculatedSignMap()
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