<?php

class CMailClientConfigDirsComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable, \Bitrix\Main\Errorable
{
    /** @var  ErrorCollection */
    protected $errorCollection;
    /**
     * @inheritDoc
     */
    public function configureActions()
    {
    }
    public function executeComponent()
    {
    }
    public function saveAction()
    {
    }
    public function levelAction()
    {
    }
    /**
     * Getting array of errors.
     * @return Error[]
     */
    public function getErrors()
    {
    }
    /**
     * Getting once error with the necessary code.
     * @param string $code Code of error.
     * @return Error
     */
    public function getErrorByCode($code)
    {
    }
}