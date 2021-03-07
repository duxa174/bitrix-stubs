<?php

namespace Bitrix\Main\UserField;

/**
 * Class Renderer
 * @package Bitrix\Main\UserField
 */
class Renderer
{
    /**
     * @var array $userField
     * @var array $additionalParameters
     * @var array $defaultAdditionalParameters
     * @var string|array $mode
     */
    protected $userField = [], $additionalParameters = [], $defaultAdditionalParameters = ['bVarsFromForm' => false], $mode;
    /**
     * Renderer constructor.
     * @param array $userField
     * @param array $additionalParameters
     */
    public function __construct(array $userField, ?array $additionalParameters = [])
    {
    }
    /**
     * @return string|null
     */
    public function render() : ?string
    {
    }
    /**
     * @return array|string
     */
    public function getMode()
    {
    }
    /**
     * @param string|array $mode
     * @return Renderer
     */
    public function setMode($mode) : \Bitrix\Main\UserField\Renderer
    {
    }
    /**
     * @return array
     */
    public function getUserField() : array
    {
    }
    /**
     * @param string $param
     * @param string|array|int $value
     * @param bool|null $storeAsDefault
     * @return Renderer
     */
    public function setAdditionalParameter(string $param, $value, ?bool $storeAsDefault = false) : \Bitrix\Main\UserField\Renderer
    {
    }
    /**
     * @param string $param
     * @return null|mixed
     */
    public function getAdditionalParameter(string $param)
    {
    }
    /**
     * @return array
     */
    protected function getAdditionalParameters() : array
    {
    }
    /**
     * @param array $userField
     * @return Renderer
     */
    public function setUserField(array $userField) : \Bitrix\Main\UserField\Renderer
    {
    }
    /**
     * @param array|null $additionalParameters
     * @return Renderer
     */
    public function setAdditionalParameters(?array $additionalParameters) : \Bitrix\Main\UserField\Renderer
    {
    }
}