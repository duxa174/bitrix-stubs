<?php

namespace Bitrix\Main\Mail;

class Context
{
    const CAT_EXTERNAL = 1;
    const PRIORITY_HIGH = 1;
    const PRIORITY_NORMAL = 2;
    const PRIORITY_LOW = 3;
    protected $category;
    protected $priority;
    /** @var  Smtp\Config|null $smtp */
    protected $smtp;
    /** @var  Callback\Config $callback */
    protected $callback;
    public function __construct(array $params = null)
    {
    }
    /**
     * @param int $category See Context CAT_* constants.
     * @return $this
     */
    public function setCategory($category)
    {
    }
    /**
     * @return int|null
     */
    public function getCategory()
    {
    }
    /**
     * @param Smtp\Config $config Smtp config.
     * @return $this
     */
    public function setSmtp(\Bitrix\Main\Mail\Smtp\Config $config)
    {
    }
    /**
     * @return Smtp\Config|null
     */
    public function getSmtp()
    {
    }
    /**
     * @param int $priority See Context PRIORITY_* constants.
     * @return $this
     */
    public function setPriority($priority)
    {
    }
    /**
     * @return int|null
     */
    public function getPriority()
    {
    }
    /**
     * Get callback config instance.
     *
     * @param Callback\Config $config Callback config instance.
     * @return $this
     */
    public function setCallback(\Bitrix\Main\Mail\Callback\Config $config)
    {
    }
    /**
     * Get callback config instance.
     *
     * @return Callback\Config|null
     */
    public function getCallback()
    {
    }
}