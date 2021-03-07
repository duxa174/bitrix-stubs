<?php

namespace Bitrix\Form;

class SenderEventHandler
{
    /**
     * @param array $data
     * @return array
     */
    public static function onConnectorListForm($data)
    {
    }
}
class SenderConnectorForm extends \Bitrix\Sender\Connector
{
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * @return bool
     */
    public function requireConfigure()
    {
    }
    /** @return \CDBResult */
    public function getData()
    {
    }
    /**
     * @return string
     */
    public function getForm()
    {
    }
}