<?php

namespace Bitrix\Sale\Discount\Preset;

final class State extends \Bitrix\Main\Type\Dictionary
{
    private const STATE_NAME_VAR = '__state';
    private const CHAIN_NAME_VAR = '__chain';
    private const STATE_SIGNER_SALT = 'discount.preset.state';
    /** @var Signer */
    private $signer = null;
    /**
     * State constructor.
     * @param array $values
     */
    public function __construct(array $values = null)
    {
    }
    private function setDefaultValues()
    {
    }
    private function initSigner() : void
    {
    }
    private function sign(string $data) : string
    {
    }
    public function unSign(string $data) : string
    {
    }
    public function set($name, $value = null)
    {
    }
    public function append(array $values)
    {
    }
    /**
     * @param string $name
     * @param callable|null $defaultValue
     *
     * @return null|string|array
     */
    public function get($name, $defaultValue = null)
    {
    }
    public static function createFromEncodedData($data)
    {
    }
    public static function createFromRequest(\Bitrix\Main\HttpRequest $request)
    {
    }
    public function addStepChain($step)
    {
    }
    public function popStepChain()
    {
    }
    public function getPrevStep()
    {
    }
    private function getStepChain() : array
    {
    }
    public function __toString()
    {
    }
    public function toString()
    {
    }
    public function toArray()
    {
    }
    public function getStepNumber()
    {
    }
}