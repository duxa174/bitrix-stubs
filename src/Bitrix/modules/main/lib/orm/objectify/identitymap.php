<?php

namespace Bitrix\Main\ORM\Objectify;

/**
 * Object registry, stores objects in collections.
 *
 * @package    bitrix
 * @subpackage main
 */
class IdentityMap
{
    /** @var Collection[] */
    protected $collections;
    /**
     * @param $class
     * @param $primary
     *
     * @return EntityObject|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function get($class, $primary)
    {
    }
    /**
     * @param EntityObject $object
     *
     * @return Collection
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function put($object)
    {
    }
    /**
     * @param $class
     *
     * @return Collection
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function getCollectionByClass($class)
    {
    }
}