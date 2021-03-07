<?php

class CMailClientMessageViewComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable, \Bitrix\Main\Errorable
{
    /** @var Main\ErrorCollection */
    private $errorCollection;
    /** @var bool */
    private $isCrmEnable = \false;
    /**
     * @return array
     */
    public function configureActions()
    {
    }
    /**
     * @return mixed|void
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function executeComponent($level = 1)
    {
    }
    /**
     * @param $id
     * @param $log
     * @param $size
     *
     * @return array|void
     *
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function logAction($id, $log, $size)
    {
    }
    /**
     * @param $messages
     *
     * @return array
     */
    private function getAvatarParams($messages)
    {
    }
    /**
     * @param $id
     *
     * @return string|void
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function logitemAction($id, $level = 1)
    {
    }
    /**
     * @return void
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function prepareUser()
    {
    }
    protected function prepareICal($message)
    {
    }
    /**
     * @param $message
     *
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function prepareMessage(&$message)
    {
    }
    /**
     * @param $messageField
     *
     * @return string
     */
    private function getEmailFromFieldFrom($messageField)
    {
    }
    /**
     * Getting array of errors.
     * @return Main\Error[]
     */
    public final function getErrors()
    {
    }
    /**
     * Getting once error with the necessary code.
     * @param string $code Code of error.
     * @return Main\Error|null
     */
    public final function getErrorByCode($code)
    {
    }
    private function markMessageAsSeen($message)
    {
    }
}