<?php

namespace Bitrix\Landing\Update\Block;

class NodeImg extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = 'landing';
    /**
     * Get hash by file id.
     * @param int $id File id.
     * @return string
     */
    public function getFileHash($id)
    {
    }
    /**
     * One step of converter.
     * @param array &$result Result array.
     * @return bool
     */
    public function execute(array &$result)
    {
    }
    /**
     * Before delete block handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function disableBlockDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Before publication landing handler.
     * @param \Bitrix\Main\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function disablePublication(\Bitrix\Main\Event $event)
    {
    }
}