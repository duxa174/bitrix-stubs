<?php

namespace Bitrix\Main\ORM\Fields\Relations;

/**
 * @package    bitrix
 * @subpackage main
 */
class CascadePolicy
{
    const NO_ACTION = 1;
    const SET_NULL = 2;
    const FOLLOW = 3;
    const FOLLOW_ORPHANS = 4;
}