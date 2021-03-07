<?php

namespace Bitrix\Sale\PaySystem;

interface IRequested
{
    /**
     * @param Request $request
     * @return ServiceResult
     */
    public function createMovementListRequest(\Bitrix\Main\Request $request);
    /**
     * @param $requestId
     * @return ServiceResult
     */
    public function getMovementListStatus($requestId = null);
    /**
     * @param $requestId
     * @return ServiceResult
     */
    public function getMovementList($requestId = null);
}