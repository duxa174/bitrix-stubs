<?php

namespace Bitrix\Iblock\ORM;

/**
 * @package    bitrix
 * @subpackage iblock
 */
abstract class ElementV1 extends \Bitrix\Iblock\ORM\CommonElement
{
    /**
     * Accepts PropertyValue and scalar, converts it to property reference
     *
     * @param $fieldName
     * @param $value
     *
     * @return EntityObject
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function sysSetValue($fieldName, $value)
    {
    }
    public function sysSaveRelations(\Bitrix\Main\ORM\Data\Result $result)
    {
    }
}