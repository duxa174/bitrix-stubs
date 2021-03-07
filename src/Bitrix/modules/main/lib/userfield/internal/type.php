<?php

namespace Bitrix\Main\UserField\Internal;

/**
 * Class Type
 * @deprecated
 * @see TypeDataManager
 * @method string getName()
 * @method string getTableName()
 */
class Type extends \Bitrix\Main\ORM\Objectify\EntityObject
{
    protected function getFactory() : \Bitrix\Main\UserField\Internal\TypeFactory
    {
    }
}