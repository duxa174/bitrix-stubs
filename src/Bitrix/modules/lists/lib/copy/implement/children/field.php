<?php

namespace Bitrix\Lists\Copy\Implement\Children;

class Field extends \Bitrix\Iblock\Copy\Implement\Children\Field
{
    /**
     * Copies lists fields.
     * @param int $iblockId Iblock id.
     * @param int $copiedIblockId Copied iblock id.
     * @return Result
     */
    public function copy($iblockId, $copiedIblockId) : \Bitrix\Main\Result
    {
    }
    private function getFieldsToCopy($iblockId, $copiedIblockId)
    {
    }
    private function addListsFields($iblockId, $copiedIblockId, array $fields)
    {
    }
}