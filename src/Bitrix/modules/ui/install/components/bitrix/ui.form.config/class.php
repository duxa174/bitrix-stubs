<?php

/**
 * Class UiFormConfig
 */
class UiFormConfig extends \CBitrixComponent
{
    protected $navParamName = 'page', $defaultGridSort = ['ID' => 'desc'];
    public function executeComponent()
    {
    }
    protected function prepareData() : array
    {
    }
    /**
     * @return string
     */
    protected function getGridId() : string
    {
    }
    /**
     * @return array
     */
    protected function getColumns() : array
    {
    }
    /**
     * @return Onchange
     */
    protected function getOnChange() : \Bitrix\Main\Grid\Panel\Snippet\Onchange
    {
    }
    /**
     * @return Onchange
     */
    protected function getOnRemove() : \Bitrix\Main\Grid\Panel\Snippet\Onchange
    {
    }
}