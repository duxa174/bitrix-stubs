<?php

namespace Bitrix\Lists\Security;

class SectionRight implements \Bitrix\Lists\Security\RightEntity, \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    const ACCESS_DENIED = "ACCESS_DENIED";
    const ADD = "canAdd";
    const READ = "canRead";
    const EDIT = "canEdit";
    const DELETE = "canDelete";
    private $listsPermission;
    private $rightParam;
    private $socnetGroupClosed = false;
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
     * Checks the read access to the section.
     *
     * @return bool
     */
    public function canRead()
    {
    }
    /**
     * Checks the edit access to the section.
     *
     * @return bool
     */
    public function canEdit()
    {
    }
    /**
     * Checks the add access to the section.
     *
     * @return bool
     */
    public function canAdd()
    {
    }
    /**
     * Checks the delete access to the section.
     *
     * @return bool
     */
    public function canDelete()
    {
    }
}