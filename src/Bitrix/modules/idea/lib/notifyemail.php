<?php

namespace Bitrix\Idea;

class NotifyEmailTable extends \Bitrix\Main\Entity\DataManager
{
    const SUBSCRIBE_TYPE_ALL = 'ALL';
    const SUBSCRIBE_TYPE_NEW_IDEAS = 'NEW IDEAS';
    const ENTITY_TYPE_IDEA = 'IDEA';
    const ENTITY_TYPE_CATEGORY = 'CATEGORY';
    /**
     * Returns path to the file which contains definition of the class.
     *
     * @return string
     */
    public static function getFilePath()
    {
    }
    /**
     * Returns DB table name for entity
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
}
class NotifyEmail
{
    protected static $cache = array();
    protected $IblockID = null;
    protected $userID = null;
    function __construct($IblockID = null)
    {
    }
    protected function getCacheId($params = array())
    {
    }
    public function addCategory($category, $subscribeType = \Bitrix\Idea\NotifyEmailTable::SUBSCRIBE_TYPE_NEW_IDEAS)
    {
    }
    public function deleteCategory($category)
    {
    }
    public function addIdea($id)
    {
    }
    public function deleteIdea($id)
    {
    }
    protected function checkCache($userId, $params = array())
    {
    }
    protected function setCache($userId, $params = array(), $data = array())
    {
    }
    public function getAscendedCategories($category = null, $userId = null)
    {
    }
}