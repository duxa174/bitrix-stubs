<?php

namespace Bitrix\Lists\Entity;

class IblockType implements \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    private $param;
    private $params = [];
    public function __construct(\Bitrix\Lists\Service\Param $param)
    {
    }
    /**
     * Returns the iblock type id by the iblock.
     *
     * @return string|null
     */
    public function getIblockTypeId()
    {
    }
}