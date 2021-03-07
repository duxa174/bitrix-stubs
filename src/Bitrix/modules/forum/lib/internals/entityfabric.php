<?php

namespace Bitrix\Forum\Internals;

trait EntityFabric
{
    protected static $repo = [];
    /**
     * @param int $id
     * @return static
     */
    public static function getById($id)
    {
    }
    public function destroy()
    {
    }
    /**
     * @param static|int $object
     * @return static
     */
    public static function getInstance($object)
    {
    }
}