<?php

namespace Bitrix\Iblock\ORM\Fields;

trait PropertyRelation
{
    /** @var Property */
    protected $iblockElementProperty;
    /**
     * @return Property
     */
    public function getIblockElementProperty()
    {
    }
    /**
     * @param $property
     *
     * @return $this
     */
    public function configureIblockElementProperty($property)
    {
    }
    public function getSetterTypeHint()
    {
    }
}