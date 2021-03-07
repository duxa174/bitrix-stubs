<?php

namespace Bitrix\MessageService\Sender;

abstract class BaseConfigurable extends \Bitrix\MessageService\Sender\Base
{
    protected $options;
    public function isConfigurable()
    {
    }
    /**
     * Check demo status.
     * @return bool
     */
    public function isDemo()
    {
    }
    /**
     * Check registration state.
     * @return bool
     */
    public abstract function isRegistered();
    /**
     * Check is registration confirmed.
     * @return bool
     */
    public function isConfirmed()
    {
    }
    /**
     * Get default From.
     * @return null|string
     */
    public function getDefaultFrom()
    {
    }
    /**
     * Set default From.
     * @param string $from From.
     * @return $this
     */
    public function setDefaultFrom($from)
    {
    }
    /**
     * Check can use state of sender.
     * @return bool
     */
    public function canUse()
    {
    }
    /**
     * @param array $fields
     * @return Result
     */
    public abstract function register(array $fields);
    /**
     * @return array
     */
    public abstract function getOwnerInfo();
    /**
     * @param array $fields
     * @return Result
     */
    public function confirmRegistration(array $fields)
    {
    }
    /**
     * @return Result
     */
    public function sendConfirmationCode()
    {
    }
    /**
     * @return string
     */
    public function getManageUrl()
    {
    }
    /**
     * @return string
     */
    public abstract function getExternalManageUrl();
    /**
     * @param array $messageFields
     * @return MessageStatus Message status result.
     * @internal param string $messageId Message Id.
     */
    public abstract function getMessageStatus(array $messageFields);
    /**
     * Enable demo mode.
     * @return $this
     */
    public function enableDemo()
    {
    }
    /**
     * Disable demo mode.
     * @return $this
     */
    public function disableDemo()
    {
    }
    /**
     * Sync remote state (load From list etc.)
     * @return $this
     */
    public function sync()
    {
    }
    protected function getCallbackUrl()
    {
    }
    /**
     * Gets host url with port and scheme.
     * @return string
     * @throws \Bitrix\Main\ArgumentNullException
     * @see \Bitrix\Disk\UrlManager::getHostUrl
     */
    private function getHostUrl()
    {
    }
    /**
     * @param array $options
     * @return $this
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected function setOptions(array $options)
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected function getOptions()
    {
    }
    /**
     * @param $optionName
     * @param $optionValue
     * @return $this
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @internal param array $options
     */
    protected function setOption($optionName, $optionValue)
    {
    }
    /**
     * @param $optionName
     * @param mixed $defaultValue
     * @return mixed|null
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected function getOption($optionName, $defaultValue = null)
    {
    }
    /**
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function clearOptions()
    {
    }
}