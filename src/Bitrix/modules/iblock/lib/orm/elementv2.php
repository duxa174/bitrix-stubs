<?php

namespace Bitrix\Iblock\ORM;

/**
 * @property-read ElementV2Entity $entity
 *
 * @package    bitrix
 * @subpackage iblock
 */
abstract class ElementV2 extends \Bitrix\Iblock\ORM\CommonElement
{
    public function sysSaveRelations(\Bitrix\Main\ORM\Data\Result $result)
    {
    }
}