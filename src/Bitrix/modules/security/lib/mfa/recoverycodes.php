<?php

namespace Bitrix\Security\Mfa;

/*
CREATE TABLE `b_sec_recovery_codes` (
	`ID` int NOT NULL AUTO_INCREMENT,
	`USER_ID` int NOT NULL,
	`CODE` varchar(255) NOT NULL,
	`USED` varchar(1) NOT NULL,
	`USING_DATE` DATETIME NULL,
	`USING_IP` VARCHAR(255) NULL,
	PRIMARY KEY(`ID`),
	INDEX ix_b_sec_recovery_codes_user_id (USER_ID)
)
*/
class RecoveryCodesTable extends \Bitrix\Main\Entity\DataManager
{
    const CODES_PER_USER = 10;
    const CODE_PATTERN = '#^[a-z0-9]{4}-[a-z0-9]{4}$#D';
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
     * Clear all saved recovery codes for provided user
     *
     * @param int $userId Needed user id.
     * @return bool Returns true if successful
     * @throws ArgumentTypeException
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function clearByUser($userId)
    {
    }
    /**
     * Generate new recovery codes for provided user
     * Previously generated codes will be removed
     *
     * @param int $userId Needed user id.
     * @return bool Returns true if successful
     * @throws ArgumentTypeException
     */
    public static function regenerateCodes($userId)
    {
    }
    /**
     * Use recovery code for user
     *
     * @param int $userId Needed user id.
     * @param string $searchCode Recovery code in accepted format (see RecoveryCodesTable::CODE_PATTERN).
     * @return bool Returns true if successful
     * @throws ArgumentTypeException
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function useCode($userId, $searchCode)
    {
    }
}