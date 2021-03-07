<?php

namespace Bitrix\Main\UserField;

class Display implements \Bitrix\Main\UserField\IDisplay
{
    const MODE_EDIT = \Bitrix\Main\UserField\Types\BaseType::MODE_EDIT;
    const MODE_VIEW = \Bitrix\Main\UserField\Types\BaseType::MODE_VIEW;
    protected $userField;
    protected $additionalParameters = array();
    protected $defaultAdditionalParameters = array("bVarsFromForm" => false);
    protected $mode = self::MODE_VIEW;
    protected $tpl = '';
    public function __construct($mode = self::MODE_VIEW, string $tpl = '')
    {
    }
    /**
     * @return mixed
     */
    public function getField()
    {
    }
    /**
     * @param mixed $userField
     */
    public function setField(array $userField)
    {
    }
    public function setAdditionalParameter($param, $value, $storeAsDefault = false)
    {
    }
    public function clear()
    {
    }
    protected function getAdditionalParameters()
    {
    }
    public function display()
    {
    }
}