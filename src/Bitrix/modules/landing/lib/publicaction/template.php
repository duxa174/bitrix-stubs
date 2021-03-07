<?php

namespace Bitrix\Landing\PublicAction;

class Template
{
    /**
     * Get available templates.
     * @param array $params Params ORM array.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getList(array $params = array())
    {
    }
    /**
     * Set new template refs for site.
     * @param int $id Entity id.
     * @param string $type Entity type.
     * @param string $method Method: set or get.
     * @param array $data Ref array (area => landing).
     * @return \Bitrix\Landing\PublicActionResult
     */
    protected static function refProcess($id, $type, $method, array $data = array())
    {
    }
    /**
     * Set new template refs for site.
     * @param int $id Site id.
     * @param array $data Ref array (area => landing).
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function setSiteRef($id, array $data = array())
    {
    }
    /**
     * Set new template refs for landing.
     * @param int $id Landing id.
     * @param array $data Ref array (area => landing).
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function setLandingRef($id, array $data = array())
    {
    }
    /**
     * Get template refs for site.
     * @param int $id Site id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getSiteRef($id)
    {
    }
    /**
     * Get template refs for landing.
     * @param int $id Site id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getLandingRef($id)
    {
    }
}