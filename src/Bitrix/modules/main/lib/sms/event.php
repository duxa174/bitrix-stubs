<?php

namespace Bitrix\Main\Sms;

class Event
{
    const ERR_SITE = 'site';
    const ERR_TEMPLATES = 'templates';
    const ERR_MODULE = 'module';
    protected $eventName;
    protected $fields;
    protected $siteId;
    protected $languageId;
    protected $templateId;
    /**
     * Message constructor.
     * @param string $eventName Name of a SMS template
     * @param array $fields Data fields to insert into the message
     */
    public function __construct($eventName, array $fields = [])
    {
    }
    /**
     * @param string $siteId
     * @return $this
     */
    public function setSite($siteId)
    {
    }
    /**
     * @param string $languageId
     * @return $this
     */
    public function setLanguage($languageId)
    {
    }
    /**
     * @param int $templateId
     * @return $this
     */
    public function setTemplate($templateId)
    {
    }
    /**
     * @param bool $directly True - send directly, False - send via queue
     * @return Main\Result
     */
    public function send($directly = false)
    {
    }
    protected function fetchTemplates()
    {
    }
}