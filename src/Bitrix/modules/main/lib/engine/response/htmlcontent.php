<?php

namespace Bitrix\Main\Engine\Response;

/**
 * Response type for rendering ajax html content from action
 */
class HtmlContent extends \Bitrix\Main\Engine\Response\AjaxJson
{
    private $jsPathList = [];
    private $cssPathList = [];
    /**
     * @param ContentAreaInterface $content
     * @param string $status
     * @param ErrorCollection|null $errorCollection
     * @param array $additionalResponseParams
     */
    public function __construct(\Bitrix\Main\Engine\Response\ContentArea\ContentAreaInterface $content, $status = self::STATUS_SUCCESS, \Bitrix\Main\ErrorCollection $errorCollection = null, array $additionalResponseParams = [])
    {
    }
    protected final function collectAssetsPathList()
    {
    }
    /**
     * @return array
     */
    protected final function getJsList()
    {
    }
    /**
     * @return array
     */
    protected final function getCssList()
    {
    }
    /**
     * @return array
     */
    protected final function getStringList()
    {
    }
}