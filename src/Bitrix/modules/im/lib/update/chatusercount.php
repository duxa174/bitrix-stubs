<?php

namespace Bitrix\Im\Update;

final class ChatUserCount extends \Bitrix\Main\Update\Stepper
{
    private const OPTION_NAME = "im_chat_user_count";
    protected static $moduleId = "im";
    /**
     * @inheritdoc
     */
    public function execute(array &$result)
    {
    }
}