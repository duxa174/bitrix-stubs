<?php

namespace Bitrix\Lists\Security;

class IblockRight implements \Bitrix\Lists\Security\RightEntity, \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    const ACCESS_DENIED = "ACCESS_DENIED";
    const READ = "canRead";
    const EDIT = "canEdit";
    private $listsPermission;
    private $rightParam;
    public function __construct(\Bitrix\Lists\Security\RightParam $rightParam)
    {
    }
    /**
     * Sets the access label that is needed to verify the rights of the entity.
     *
     * @param string $listsPermission Access label.
     */
    public function setListsPermission($listsPermission)
    {
    }
    /**
     * Checks the read access to the iblock.
     *
     * @return bool
     */
    public function canRead()
    {
    }
    /**
     * Checks the edit access to the iblock.
     *
     * @return bool
     */
    public function canEdit()
    {
    }
}