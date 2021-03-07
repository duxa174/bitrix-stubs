<?php

namespace Bitrix\Seo\WebHook;

/**
 * Class Service
 * @package Bitrix\Seo\WebHook
 */
class Service
{
    const ANSWER_ERROR_SYSTEM = '001';
    const ANSWER_ERROR_NO_CODE = '002';
    const ANSWER_ERROR_NO_EXT_ID = '003';
    const ANSWER_ERROR_NO_PAYLOAD = '004';
    const ANSWER_ERROR_NO_SEC_CODE = '005';
    const ANSWER_ERROR_WRONG_SEC_CODE = '006';
    /** @var  ErrorCollection $errorCollection Error collection. */
    protected $errorCollection;
    protected $type;
    protected $externalId;
    /** @var Payload\Batch $payload Payload instance. */
    protected $payload;
    protected $errors = array();
    protected $data = null;
    /**
     * Create instance.
     *
     * @param string $type Type.
     * @param string $externalId External ID.
     * @return static
     */
    public static function create($type, $externalId)
    {
    }
    /**
     * Service constructor.
     *
     * @param string $type Type.
     * @param string $externalId External ID.
     */
    public function __construct($type, $externalId)
    {
    }
    protected static function answer(array $answer)
    {
    }
    protected static function answerError($code = null, $text = null)
    {
    }
    protected static function answerData(array $data = array())
    {
    }
    /**
     * Listen web hooks.
     *
     * @return void
     */
    public static function listen()
    {
    }
    /**
     * Handle web hook.
     *
     * @param Payload\Batch $payload Payload instance.
     * @return $this
     */
    public function handle(\Bitrix\Seo\WebHook\Payload\Batch $payload)
    {
    }
    /**
     * Register web hook.
     *
     * @param array $parameters Parameters.
     * @return bool
     */
    public function register(array $parameters = [])
    {
    }
    /**
     * Remove web hook.
     *
     * @return bool
     */
    public function remove()
    {
    }
    protected static function getData($type, $externalId)
    {
    }
    protected static function queryHookRegister($methodName, array $parameters)
    {
    }
    /**
     * Check security code.
     *
     * @param string $securityCode Code.
     * @return bool
     */
    public function checkSecurityCode($securityCode)
    {
    }
    /**
     * Get error collection.
     *
     * @return ErrorCollection
     */
    public function getErrorCollection()
    {
    }
    protected function sendEvent()
    {
    }
}