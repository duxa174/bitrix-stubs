<?php

namespace Bitrix\Landing\Connector;

class Intranet
{
    /**
     * Service component paths.
     */
    const PATH_SERVICE_LIST = 'kb/binding/menu/';
    /**
     * Returns one service menu item for bind entity.
     * @param string $bindCode Binding code.
     * @return array
     */
    protected static function getMenuItemBind($bindCode)
    {
    }
    /**
     * Returns one service menu item for unbind entity.
     * @param string $bindCode Binding code.
     * @param string $entityId Entity id.
     * @param string $title Custom title.
     * @return array
     */
    protected static function getMenuItemUnbind($bindCode, $entityId, $title)
    {
    }
    /**
     * Returns menu items for different binding places in Intranet.
     * @param \Bitrix\Main\Event $event Event instance.
     * @return array
     */
    public static function onBuildBindingMenu(\Bitrix\Main\Event $event)
    {
    }
}