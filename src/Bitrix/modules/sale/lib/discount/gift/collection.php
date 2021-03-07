<?php

namespace Bitrix\Sale\Discount\Gift;

class Collection extends \Bitrix\Main\Type\Dictionary
{
    const TYPE_GRANT_ALL = 'all';
    const TYPE_GRANT_ONE = 'one';
    protected $type = self::TYPE_GRANT_ONE;
    /**
     * GiftCollection constructor.
     * @param array  $gifts
     * @param string $type
     */
    public function __construct(array $gifts, $type)
    {
    }
    protected function setGift(\Bitrix\Sale\Discount\Gift\Gift $gift, $offset = null)
    {
    }
    public function offsetSet($offset, $value)
    {
    }
}