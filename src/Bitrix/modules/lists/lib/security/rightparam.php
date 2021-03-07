<?php

namespace Bitrix\Lists\Security;

class RightParam
{
    private $user = null;
    private $iblockTypeId = "";
    private $iblockId = false;
    private $socnetGroupId = 0;
    private $entityId = 0;
    public function __construct(\Bitrix\Lists\Service\Param $param)
    {
    }
    /**
     * @return \CUser
     */
    public function getUser()
    {
    }
    /**
     * @param \CUser $user
     */
    public function setUser(\CUser $user)
    {
    }
    /**
     * @return string
     */
    public function getIblockTypeId()
    {
    }
    /**
     * @param string $iblockTypeId
     */
    public function setIblockTypeId($iblockTypeId)
    {
    }
    /**
     * @return bool|int
     */
    public function getIblockId()
    {
    }
    /**
     * @param bool|int $iblockId
     */
    public function setIblockId($iblockId)
    {
    }
    /**
     * @return int
     */
    public function getSocnetGroupId()
    {
    }
    /**
     * @param int $socnetGroupId
     */
    public function setSocnetGroupId($socnetGroupId)
    {
    }
    /**
     * @return int
     */
    public function getEntityId()
    {
    }
    /**
     * @param int $entityId
     */
    public function setEntityId($entityId)
    {
    }
    /**
     * Returns the closing status of the socnet group.
     *
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\LoaderException
     */
    public function getClosedStatusSocnetGroup()
    {
    }
}