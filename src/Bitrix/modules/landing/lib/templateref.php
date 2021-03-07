<?php

namespace Bitrix\Landing;

class TemplateRef
{
    /**
     * Entity type site.
     */
    const ENTITY_TYPE_SITE = 'S';
    /**
     * Entity type landing.
     */
    const ENTITY_TYPE_LANDING = 'L';
    /**
     * Set new template refs for entity.
     * @param int $id Entity id.
     * @param string $type Entity type.
     * @param array $data Ref array.
     * @return void
     */
    protected static function set($id, $type, array $data = array())
    {
    }
    /**
     * Get template refs for entity.
     * @param int $id Entity id.
     * @param string $type Entity type.
     * @return array
     */
    protected static function get($id, $type)
    {
    }
    /**
     * Set new template refs for site.
     * @param int $id Site id.
     * @param array $data Ref array (area => landing).
     * @return void
     */
    public static function setForSite($id, array $data = array())
    {
    }
    /**
     * Set new template refs for landing.
     * @param int $id Landing id.
     * @param array $data Ref array (area => landing).
     * @return void
     */
    public static function setForLanding($id, array $data = array())
    {
    }
    /**
     * Get template refs for site.
     * @param int $id Site id.
     * @return array
     */
    public static function getForSite($id)
    {
    }
    /**
     * Get template refs for site.
     * @param int $id Landing id.
     * @return array
     */
    public static function getForLanding($id)
    {
    }
    /**
     * This landing id is used as a area?
     * @param int|array $lid Landing id.
     * @return boolean|array
     */
    public static function landingIsArea($lid)
    {
    }
    /**
     * Delete all area-landing by id.
     * @param integer $lid Landing id.
     * @return void
     */
    public static function deleteArea($lid)
    {
    }
    /**
     * Resolves class by type.
     * @param string $type Entity type.
     * @return string
     */
    public static function resolveClassByType($type)
    {
    }
}