<?php

/** @var \CMain $APPLICATION */
$isAdmin = \Bitrix\MessageService\Context\User::isAdmin();
/** @var \Bitrix\MessageService\Sender\BaseConfigurable $sender */
$sender = \Bitrix\MessageService\Sender\SmsManager::getSenderById($_REQUEST['sender_id']);