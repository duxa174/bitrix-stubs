<?php

namespace Bitrix\Sender;

class TemplateTable extends \Bitrix\Main\ORM\Data\DataManager
{
    const LOCAL_DIR_IMG = '/images/sender/preset/template/';
    /**
     * Handler of event that return array of templates
     *
     * @param string|null $templateType
     * @param string|null $templateId
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function onPresetTemplateList($templateType = null, $templateId = null)
    {
    }
    /**
     * Increment use counter.
     *
     * @return bool
     */
    public static function incUseCount($id)
    {
    }
    /**
     * Get table name
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Return the map
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * @param ORM\Event $event
     * @return ORM\EventResult
     */
    public static function onBeforeAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * Handler of before delete event.
     *
     * @param ORM\Event $event Event.
     * @return ORM\EventResult
     */
    public static function onBeforeUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * Handler of before delete event.
     * 
     * @param ORM\Event $event Event.
     * @return ORM\EventResult
     */
    public static function onBeforeDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * Function return true if html in $content is supported by Block Editor
     *
     * @param string $content
     * @return boolean
     */
    public static function isContentForBlockEditor($content)
    {
    }
    /**
     * Init editor
     *
     * @param array $params
     * @return string
     */
    public static function initEditor(array $params)
    {
    }
}