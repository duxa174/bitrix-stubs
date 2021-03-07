<?php

/**
 * Class ProductSubscribe
 *
 * It provides an interface to work on a subscription product.
 */
class ProductSubscribe extends \CBitrixComponent
{
    /**
     * Errors list.
     * @var string[]
     */
    protected $errors = array();
    /**
     * Event called from includeComponent before component execution.
     */
    public function onIncludeComponentLang()
    {
    }
    /**
     * Event called from includeComponent before component execution.
     * Takes component parameters as argument and should return it formatted as needed.
     *
     * @param $params
     * @return mixed
     */
    public function onPrepareComponentParams($params)
    {
    }
    /**
     * Check Required Modules
     * @throws Exception
     */
    protected function checkModules()
    {
    }
    /**
     * Prepare data to render.
     * @throws SystemException
     */
    protected function formatResult()
    {
    }
    protected function getStatusSubscribe()
    {
    }
    /**
     * Function calls __includeComponent in order to execute the component.
     */
    public function executeComponent()
    {
    }
}