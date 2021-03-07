<?php

namespace Bitrix\Rest\Configuration;

class ProxyDiskType extends \Bitrix\Disk\ProxyType\Base
{
    /**
     * Gets security context (access provider) for user.
     * Attention! File/Folder can use anywhere and SecurityContext have to check rights anywhere (any module).
     *
     * @param mixed $user User which use for check rights.
     *
     * @return SecurityContext
     */
    public function getSecurityContextByUser($user)
    {
    }
    /**
     * Gets url which use for building url to listing folders, trashcan, etc.
     * @return string
     */
    public function getStorageBaseUrl()
    {
    }
    /**
     * Get image (avatar) of entity.
     * Can be shown with entityTitle in different lists.
     *
     * @param int $width Image width.
     * @param int $height Image height.
     *
     * @return string
     */
    public function getEntityImageSrc($width, $height)
    {
    }
    /**
     * Potential opportunity to attach object to external entity
     * @return bool
     */
    public function canAttachToExternalEntity()
    {
    }
    /**
     * Tells if objects is allowed to index by module "Search".
     * @return bool
     */
    public function canIndexBySearch()
    {
    }
}