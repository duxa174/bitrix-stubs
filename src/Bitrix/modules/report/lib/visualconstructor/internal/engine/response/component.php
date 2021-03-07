<?php

namespace Bitrix\Report\VisualConstructor\Internal\Engine\Response;

/**
 * Response type for rendering ajax components from action
 * @package Bitrix\Report\VisualConstructor\Internal\Engine\Response
 */
final class Component extends \Bitrix\Main\Engine\Response\Json implements \Bitrix\Main\Errorable
{
    const STATUS_SUCCESS = 'success';
    const STATUS_DENIED = 'denied';
    const STATUS_ERROR = 'error';
    private $jsPathList = [];
    private $cssPathList = [];
    private $asset;
    /**
     * @var string
     */
    private $status;
    /**
     * @var ErrorCollection
     */
    private $errorCollection;
    /**
     * Component constructor.
     * @param string $componentName
     * @param string $templateName
     * @param array $params
     * @param array $parentComponent
     * @param array $functionParams
     * @param array $additionalResponseParams
     * @param string $status
     * @param ErrorCollection|null $errorCollection
     */
    public function __construct($componentName, $templateName = '', $params = [], $additionalResponseParams = [], $parentComponent = [], $functionParams = [], $status = self::STATUS_SUCCESS, \Bitrix\Main\ErrorCollection $errorCollection = null)
    {
    }
    private function collectAssetsPathList()
    {
    }
    /**
     * @return array
     */
    private function getJsList()
    {
    }
    /**
     * @return array
     */
    private function getCssList()
    {
    }
    /**
     * @return array
     */
    private function getStringList()
    {
    }
    /**
     * @return array
     */
    protected function getErrorsToResponse()
    {
    }
    /**
     * Getting array of errors.
     * @return Error[]
     */
    public function getErrors()
    {
    }
    /**
     * Getting once error with the necessary code.
     * @param string $code Code of error.
     * @return Error
     */
    public function getErrorByCode($code)
    {
    }
}