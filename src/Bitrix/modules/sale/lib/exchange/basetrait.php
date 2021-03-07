<?php

namespace Bitrix\Sale\Exchange;

trait BaseTrait
{
    /**
     * @param $typeId
     * @return DocumentBase
     */
    protected function documentFactoryCreate($typeId)
    {
    }
    /**
     * @param $typeId
     * @return Converter
     */
    protected function converterFactoryCreate($typeId)
    {
    }
    /**
     * @param $typeId
     * @return ImportBase
     */
    protected function entityFactoryCreate($typeId)
    {
    }
}