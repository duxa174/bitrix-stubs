<?php

namespace Bitrix\Im\Update;

final class ChatIndex extends \Bitrix\Main\Update\Stepper
{
    const OPTION_NAME = "im_index_chat";
    protected static $moduleId = "im";
    /**
     * @inheritdoc
     */
    public function execute(array &$result)
    {
    }
}