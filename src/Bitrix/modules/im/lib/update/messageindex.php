<?php

namespace Bitrix\Im\Update;

final class MessageIndex extends \Bitrix\Main\Update\Stepper
{
    const OPTION_NAME = "im_index_message";
    const STATUS_ENABLED = 'enabled';
    const STATUS_DISABLED = 'disabled';
    const STATUS_DEFAULT = 'default';
    protected static $moduleId = "im";
    /**
     * @inheritdoc
     */
    public function execute(array &$result)
    {
    }
}