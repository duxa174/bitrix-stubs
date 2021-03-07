<?php

namespace Bitrix\Main\Numerator\Service;

/**
 * Class NumeratorRequestManager
 * @package Bitrix\Main\Numerator\Model
 */
class NumeratorRequestManager
{
    /*** @var \Bitrix\Main\HttpRequest */
    private $request;
    /**
     * NumeratorRequestManager constructor.
     * @param \Bitrix\Main\HttpRequest $request
     */
    public function __construct($request)
    {
    }
    /**
     * @return \Bitrix\Main\Entity\AddResult|\Bitrix\Main\Entity\UpdateResult|Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function saveFromRequest()
    {
    }
    /**
     * @param $id
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function updateNextSequentialNumber($id)
    {
    }
}