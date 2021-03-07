<?php

namespace Bitrix\Main\UI\AccessRights;

class DataProvider
{
    public function getEntity(string $type, int $id) : \Bitrix\Main\UI\AccessRights\Entity\AccessRightEntityInterface
    {
    }
    private function getEntityClassByType(string $type) : ?string
    {
    }
}