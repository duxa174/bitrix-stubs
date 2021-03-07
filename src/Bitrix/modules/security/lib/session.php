<?php

namespace Bitrix\Security;

/*
CREATE TABLE b_sec_session
(
	SESSION_ID VARCHAR(250) NOT NULL,
	TIMESTAMP_X TIMESTAMP NOT NULL,
	SESSION_DATA LONGTEXT,
	PRIMARY KEY(SESSION_ID)
);
*/
/**
 * Class SessionTable
 * @since 16.0.0
 */
class SessionTable extends \Bitrix\Main\Session\Handlers\Table\UserSessionTable
{
    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public static function getTableName()
    {
    }
}