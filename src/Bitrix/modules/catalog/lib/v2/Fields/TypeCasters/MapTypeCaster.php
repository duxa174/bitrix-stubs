<?php

namespace Bitrix\Catalog\v2\Fields\TypeCasters;

// ToDo check it with real world on product/sku editing
/**
 * Class MapTypeCaster
 *
 * @package Bitrix\Catalog\v2\Fields\TypeCasters
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class MapTypeCaster implements \Bitrix\Catalog\v2\Fields\TypeCasters\TypeCasterContract
{
    public const NOTHING = 'Nothing';
    public const STRING = 'String';
    public const NULLABLE_STRING = 'NullableString';
    public const INT = 'Int';
    public const NULLABLE_INT = 'NullableInt';
    public const FLOAT = 'Float';
    public const NULLABLE_FLOAT = 'NullableFloat';
    public const BOOLEAN = 'Boolean';
    public const Y_OR_N = 'YesOrNo';
    public const Y_OR_N_OR_D = 'YesOrNoOrDefault';
    public const DATE = 'Date';
    public const DATETIME = 'DateTime';
    private $fieldMap = [];
    public function __construct(array $fieldMap = null)
    {
    }
    private function castToNothing($value)
    {
    }
    private function castToString($value) : string
    {
    }
    private function castToNullableString($value) : ?string
    {
    }
    private function castToInt($value) : int
    {
    }
    private function castToNullableInt($value) : ?int
    {
    }
    private function castToFloat($value) : float
    {
    }
    private function castToNullableFloat($value) : ?float
    {
    }
    private function castToYesOrNo($value) : string
    {
    }
    private function castToYesOrNoOrDefault($value) : string
    {
    }
    private function castToBoolean($value) : bool
    {
    }
    private function castToDate($value) : ?\Bitrix\Main\Type\Date
    {
    }
    private function castToDateTime($value) : ?\Bitrix\Main\Type\DateTime
    {
    }
    public function cast($name, $value)
    {
    }
    public function has($name) : bool
    {
    }
}