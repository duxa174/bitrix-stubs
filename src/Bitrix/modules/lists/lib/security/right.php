<?php

namespace Bitrix\Lists\Security;

class Right implements \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    const ACCESS_DENIED = "ACCESS_DENIED";
    private $entityRight;
    private $rightParam;
    private $listsPermission;
    public function __construct(\Bitrix\Lists\Security\RightParam $rightParam, \Bitrix\Lists\Security\RightEntity $entityRight)
    {
    }
    /**
     * Checks access to the entity.
     *
     * @param string $entityMethod Entity method to check access.
     *
     * @return bool
     */
    public function checkPermission($entityMethod = "")
    {
    }
    private function getListsPermission()
    {
    }
}