<?php

namespace Bitrix\UI\Form;

class EntityEditorConfigScope
{
    const UNDEFINED = '';
    const PERSONAL = 'P';
    const COMMON = 'C';
    const CUSTOM = 'CUSTOM';
    private static $captions = array();
    public static function isDefined(string $scope) : bool
    {
    }
    /**
     * @param string $entityTypeId
     * @param string $moduleId
     * @return mixed
     */
    public static function getCaptions(string $entityTypeId = '', ?string $moduleId = null) : array
    {
    }
    /**
     * @param string $scope
     * @param string $moduleId
     * @param string $entityTypeId
     * @param int|null $scopeId
     * @return string
     */
    public static function getCaption(string $scope, string $entityTypeId = '', ?int $scopeId = null, ?string $moduleId = null) : string
    {
    }
}