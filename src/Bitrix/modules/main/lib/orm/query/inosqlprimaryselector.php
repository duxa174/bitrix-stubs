<?php

namespace Bitrix\Main\ORM\Query;

interface INosqlPrimarySelector
{
    public function getEntityByPrimary(\Bitrix\Main\ORM\Entity $entity, $primary, $select);
}