<?php

namespace Bitrix\Bizproc\Copy\Implement;

class Trigger
{
    const TRIGGER_COPY_ERROR = "TRIGGER_COPY_ERROR";
    private $targetDocumentType = [];
    private $mapStatusIdsCopiedDocument = [];
    private $result;
    public function __construct($targetDocumentType = [], $mapStatusIdsCopiedDocument = [])
    {
    }
    /**
     * @param $triggerId
     * @return array|false
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getFields($triggerId)
    {
    }
    public function prepareFieldsToCopy(array $fields)
    {
    }
    /**
     * @param array $fields
     * @return array|bool|int
     * @throws \Exception
     */
    public function add(array $fields)
    {
    }
}