<?php

namespace Bitrix\Rest\Integration;

/**
 * Class Externalizer
 * @package Bitrix\Catalog\Rest
 * externalizer for working with named lists | answers
 */
final class Externalizer extends \Bitrix\Rest\Integration\ModificationFieldsBase implements \Bitrix\Main\Type\Contract\Arrayable
{
    public function __construct(\Bitrix\Rest\Integration\ViewManager $manager, $data = [])
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
     * the externalizer works only with a NOT named list. list id is not supported
     */
    private function externalize($fields)
    {
    }
    /**
     * @param $data
     * @return int|null|string
     * array key is required
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