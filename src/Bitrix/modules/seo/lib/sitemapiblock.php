<?php

namespace Bitrix\Seo;

class SitemapIblockTable extends \Bitrix\Main\Entity\DataManager
{
    const ACTIVE = 'Y';
    const INACTIVE = 'N';
    const TYPE_ELEMENT = 'E';
    const TYPE_SECTION = 'S';
    protected static $iblockCache = array();
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Clears all iblock links on sitemap settings deletion.
     *
     * @param int $sitemapId Sitemap settings ID.
     *
     * @return void
     */
    public static function clearBySitemap($sitemapId)
    {
    }
    /**
     * Returns array of data for sitemap update due to some iblock action.
     *
     * @param array $fields Iblock element or section fields array.
     * @param string $itemType SitemapIblockTable::TYPE_ELEMENT || SitemapIblockTable::TYPE_SECTION.
     *
     * @return array Array of sitemap settings
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getByIblock($fields, $itemType)
    {
    }
    /**
     * Checks if section $sectionId should be added to sitemap.
     *
     * @param int $sectionId Section ID.
     * @param array $sectionSettings Sitemap section settings array.
     * @param bool $defaultValue Default value for situation of settings absence.
     *
     * @return bool
     */
    public static function checkSection($sectionId, $sectionSettings, $defaultValue)
    {
    }
}
class SitemapIblock
{
    private static $beforeActions = array('BEFOREDELETEELEMENT' => array(array(), array()), 'BEFOREDELETESECTION' => array(array(), array()), 'BEFOREUPDATEELEMENT' => array(array(), array()), 'BEFOREUPDATESECTION' => array(array(), array()));
    /**
     * Event handler for multiple IBlock events
     */
    public static function __callStatic($name, $arguments)
    {
    }
    /**
     * Checks if element is a real element, not a workflow item
     *
     * @param array $fields Element fields.
     *
     * @return bool
     */
    protected static function checkElement(&$fields)
    {
    }
    /**
     * Processes actions on IBlock element or section update
     *
     * @param array $data Data got from SitemapIblockTable::getByIblock() + element/section data + prev link data got from event handler.
     * @param bool $element Element or section.
     */
    protected static function actionUpdate($data, $element)
    {
    }
    /**
     * Processes actions on IBlock element or section delete.
     *
     * @param array $data Data got from SitemapIblockTable::getByIblock() + element/section data + prev link data got from event handler.
     */
    protected static function actionDelete($data)
    {
    }
    /**
     * Processes actions on IBlock element or section add.
     *
     * @param string $name Event handler name.
     * @param array $fields Element/section fields.
     */
    protected static function actionAdd($name, $fields)
    {
    }
    private static function createSiteDirs()
    {
    }
    private static function checkActivity($isElement, $fields)
    {
    }
    /**
     * Replace some parts of URL-template, then not correct processing in replaceDetailUrl.
     *
     * @param string $url - String of URL-template.
     * @param null $siteId - In NULL - #SERVER_NAME# will not replaced.
     * @return mixed|string
     */
    public static function prepareUrlToReplace($url, $siteId = NULL)
    {
    }
}