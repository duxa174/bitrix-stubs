<?php

namespace Bitrix\Landing\Controller;

class Note extends \Bitrix\Main\Engine\Controller
{
    public function getDefaultPreFilters()
    {
    }
    /**
     * Returns true if current user have 'edit' right.
     * @return bool
     */
    protected static function canCreateNew() : bool
    {
    }
    /**
     * Returns available entities short list for note creating.
     * @return array
     */
    public static function getTargetsAction() : array
    {
    }
    /**
     * Creates new knowledge page and returns info about it.
     * @param int $kbId Knowledge id.
     * @param string $sourceType Source type.
     * @param int $sourceId Source id.
     * @param string $scope Scope.
     * @return array|null
     */
    public function createNoteAction(int $kbId, string $sourceType, int $sourceId, ?string $scope = null) : ?array
    {
    }
}