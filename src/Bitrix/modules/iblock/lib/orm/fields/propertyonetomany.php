<?php

namespace Bitrix\Iblock\ORM\Fields;

/**
 * @package    bitrix
 * @subpackage iblock
 */
class PropertyOneToMany extends \Bitrix\Main\ORM\Fields\Relations\OneToMany
{
    use \Bitrix\Iblock\ORM\Fields\PropertyRelation;
}