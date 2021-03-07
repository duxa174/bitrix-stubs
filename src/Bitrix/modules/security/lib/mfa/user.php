<?php

namespace Bitrix\Security\Mfa;

/*
CREATE TABLE b_sec_user
(
	USER_ID INT(11) NOT NULL REFERENCES b_user(ID),
	ACTIVE CHAR(1) NOT NULL DEFAULT 'N',
	SECRET VARCHAR(64) NOT NULL,
	PARAMS text,
	TYPE VARCHAR(16) NOT NULL,
	ATTEMPTS int(18),
	INITIAL_DATE date,
	SKIP_MANDATORY CHAR(1) DEFAULT 'N',
	DEACTIVATE_UNTIL datetime,
	PRIMARY KEY (USER_ID)
);
*/
class UserTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Clear recovery codes after delete user
     *
     * @param Entity\Event $event Our event.
     * @return void
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
}