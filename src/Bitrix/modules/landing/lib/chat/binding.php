<?php

namespace Bitrix\Landing\Chat;

class Binding extends \Bitrix\Landing\Internals\BaseTable
{
    /**
     * Block binding type.
     */
    const BINDING_TYPE_BLOCK = 'B';
    /**
     * Internal class.
     * @var string
     */
    public static $internalClass = 'ChatBindingTable';
    /**
     * Clears all cache by chat id.
     * @param int $chatId Internal chat id.
     * @return void
     */
    public static function clearCache(int $chatId) : void
    {
    }
    /**
     * Binds block with chat.
     * @param int $chatId Internal chat id.
     * @param int $blockId Block id.
     * @return void
     */
    public static function bindingBlock(int $chatId, int $blockId) : void
    {
    }
    /**
     * Unbinds block from chat.
     * @param int $blockId Block id.
     * @return void
     */
    public static function unbindingBlock(int $blockId) : void
    {
    }
}