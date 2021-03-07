<?php

namespace Bitrix\Sender\Templates;

/**
 * Class Selector
 * @package Bitrix\Sender\Templates
 */
class Selector
{
    /** @var  string $messageCode Message code. */
    private $messageCode;
    /** @var  integer $version Version. */
    private $version;
    /** @var  integer $typeId Type ID. */
    private $typeId = null;
    /** @var  bool $includeTriggers Include triggers. */
    private $includeTriggers = true;
    /** @var  integer $id Template ID. */
    private $id = null;
    /** @var  integer $templateCounter Template counter. */
    private $templateCounter = 0;
    /**
     * Create selector instance.
     *
     * @return static;
     */
    public static function create()
    {
    }
    /**
     * With default message code.
     *
     * @return $this
     */
    public function withDefaultMessageCode()
    {
    }
    /**
     * With message code.
     *
     * @param string $messageCode Message code.
     * @return $this
     */
    public function withMessageCode($messageCode)
    {
    }
    /**
     * With minimal version.
     *
     * @param integer $version Version.
     * @return $this
     */
    public function withVersion($version)
    {
    }
    /**
     * With type ID.
     *
     * @param integer $typeId Type ID.
     * @return $this
     */
    public function withTypeId($typeId)
    {
    }
    /**
     * With id.
     *
     * @param integer $id Template ID.
     * @return $this
     */
    public function withId($id)
    {
    }
    /**
     * With triggers.
     *
     * @param bool $include Include triggers.
     * @return $this
     */
    public function withTriggers($include)
    {
    }
    /**
     * Get list.
     *
     * @return array
     */
    public function get()
    {
    }
    /**
     * Get list.
     *
     * @return array
     */
    public function getList()
    {
    }
    /**
     * Return true if it has templates.
     *
     * @return bool
     */
    public function hasAny()
    {
    }
    /**
     * Get categories of list.
     *
     * @return array
     */
    public function getCategories()
    {
    }
    /**
     * Get categorized list.
     *
     * @return array
     */
    public function getCategorized()
    {
    }
    /**
     * Get templates
     * @param int $limit Limit.
     * @return array
     */
    private function getTemplates($limit = 0)
    {
    }
    /**
     * Check template
     * @param array $template Template.
     * @return bool
     */
    private function checkTemplate($template)
    {
    }
    /**
     * Prepare template
     * @param array $template Template.
     * @return array
     */
    private function prepareTemplate($template)
    {
    }
}