<?php

namespace Bitrix\Vote\Attachment;

abstract class Connector
{
    protected $entityId;
    public function __construct($entityId)
    {
    }
    /**
     * @param \Bitrix\Vote\Attach $attachedObject Attach.
     * @return Connector
     * @throws ObjectNotFoundException
     * @throws SystemException
     */
    public static final function buildFromAttachedObject(\Bitrix\Vote\Attach $attachedObject)
    {
    }
    /**
     * @return string
     */
    public static function className()
    {
    }
    /**
     * @todo finis this method
     * @return array
     */
    public function getDataToShow()
    {
    }
    /**
     * @param integer $userId User ID.
     * @return bool
     */
    public function canRead($userId)
    {
    }
    /**
     * @param integer $userId User ID.
     * @return bool
     */
    public function canEdit($userId)
    {
    }
    /**
     * @param array $data Data array.
     * @return array
     */
    public function checkFields(&$data)
    {
    }
    /**
     * @return Application|\Bitrix\Main\HttpApplication|\CAllMain|\CMain
     */
    protected function getApplication()
    {
    }
    /**
     * @return array|bool|\CAllUser|\CUser
     */
    protected function getUser()
    {
    }
}