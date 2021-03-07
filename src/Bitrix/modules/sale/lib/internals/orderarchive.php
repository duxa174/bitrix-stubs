<?php

namespace Bitrix\Sale\Internals;

class OrderArchiveTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Adds row to entity table
     *
     * @param array $data An array with fields like
     * 	array(
     * 		"fields" => array(
     * 			"FIELD1" => "value1",
     * 			"FIELD2" => "value2",
     * 		),
     * 		"auth_context" => \Bitrix\Main\Authentication\Context object
     *	)
     *	or just a plain array of fields.
     *
     * @return Main\Entity\AddResult Contains ID of inserted row
     *
     * @throws \Exception
     */
    public static function add(array $data)
    {
    }
    /**
     * Deletes row in entity table by primary key
     *
     * @param mixed $primary
     *
     * @return Main\Entity\DeleteResult
     *
     * @throws \Exception
     */
    public static function delete($primary)
    {
    }
    /**
     * Renew table records from serialized data.
     *
     * @param array $filter.		Filter for selection updating entries.
     *
     * @return Main\Result
     */
    public static function renew(array $filter = array())
    {
    }
}