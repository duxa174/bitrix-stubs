<?php

namespace Bitrix\Lists\Entity;

class Field implements \Bitrix\Lists\Entity\Controllable, \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    const ERROR_SAVE_FIELD = "ERROR_SAVE_FIELD";
    const ERROR_UPDATE_FIELD = "ERROR_UPDATE_FIELD";
    private $param;
    private $params = [];
    private $fieldList = [];
    private $iblockId;
    public function __construct(\Bitrix\Lists\Service\Param $param)
    {
    }
    public function add()
    {
    }
    public function get(array $navData = [])
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
    public function getAvailableTypes()
    {
    }
    private function getFields()
    {
    }
    private function canChangeField($type)
    {
    }
    private function validateFields($fields)
    {
    }
    private function adjustmentFields($fields)
    {
    }
    private function getProperty($iblockId, $code)
    {
    }
}