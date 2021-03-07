<?php

class VariationGridController extends \Bitrix\Main\Engine\Controller
{
    /**
     * @return \Bitrix\Main\Engine\Response\HtmlContent
     * @throws \Bitrix\Main\LoaderException
     */
    public function getProductGridAction() : \Bitrix\Main\Engine\Response\HtmlContent
    {
    }
    private function sendErrorResponse(string $message)
    {
    }
    /**
     * @param string $gridId
     * @param string $propertyCode
     * @param string $anchor
     * @param array $currentHeaders
     *
     * @return Response\AjaxJson
     */
    public function addPropertyHeaderAction(string $gridId, string $propertyCode, array $currentHeaders, string $anchor = '') : \Bitrix\Main\Engine\Response\AjaxJson
    {
    }
}