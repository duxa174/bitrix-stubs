<?php

namespace Bitrix\Landing\DataLoader;

class Chat extends \Bitrix\Landing\Source\DataLoader
{
    /**
     * Personal chat type.
     */
    const CHAT_TYPE_PERSONAL = 'private';
    /**
     * Group chat type.
     */
    const CHAT_TYPE_GROUP = 'group';
    /**
     * Prepares params and return specific init array.
     * @return array
     */
    protected function getInitData() : array
    {
    }
    /**
     * Returns user list for chat id.
     * @param array $initData All init data.
     * @return array
     */
    protected function getUserList(array $initData) : array
    {
    }
    /**
     * Gets data for dynamic blocks.
     * @return array
     */
    public function getElementListData()
    {
    }
    /**
     * Gets data item of dynamic blocks.
     * @param int $element Element's key.
     * @return array
     */
    public function getElementData($element)
    {
    }
}