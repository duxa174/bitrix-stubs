<?php

namespace Bitrix\Sale\Rest;

/**
 * Class Externalizer
 * @package Bitrix\Sale\Rest
 * экстерналайзер для работы с именованными списками|ответами
 */
class Externalizer extends \Bitrix\Sale\Rest\ModificationFieldsBase implements \Bitrix\Main\Type\Contract\Arrayable
{
    public function __construct($name, $arguments, $controller, array $data = [], $scope = '')
    {
    }
    public function process()
    {
    }
    public function toArray()
    {
    }
    protected function multiSortKeysArray(array $data)
    {
    }
    /**
     * @param $data
     * @return array
     * экстерналайзер работает только с НЕ именнованым списком. id списка не передается
     */
    private function externalize($fields)
    {
    }
    /**
     * @param $data
     * @return int|null|string
     * обязательное именование (ключ в массиве) списка или результата в ответе
     */
    private function getIdList($data)
    {
    }
    protected function convertKeysToCamelCase($fields)
    {
    }
    public function getPage(\Bitrix\Main\Engine\Response\DataType\Page $page)
    {
    }
}