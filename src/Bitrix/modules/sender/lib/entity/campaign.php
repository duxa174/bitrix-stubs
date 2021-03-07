<?php

namespace Bitrix\Sender\Entity;

/**
 * Class Campaign
 * @package Bitrix\Sender\Entity
 */
class Campaign extends \Bitrix\Sender\Entity\Base
{
    /** @var array $defaultId Default ID. */
    private static $defaultId;
    private static $defaultSiteId;
    /**
     * Get list.
     *
     * @param array $parameters Parameters.
     * @return \Bitrix\Main\DB\Result
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * Get default campaign id.
     *
     * @param null|string $siteId Site id.
     * @return int
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getDefaultId($siteId = null)
    {
    }
    /**
     * Get sites.
     *
     * @return array
     */
    public static function getSites()
    {
    }
    /**
     * Get default data.
     *
     * @return array
     */
    protected function getDefaultData()
    {
    }
    /**
     * Save data.
     *
     * @param integer|null $id ID.
     * @param array $data Data.
     * @return integer|null
     */
    protected function saveData($id = null, array $data)
    {
    }
    /**
     * Load data.
     *
     * @param integer $id ID.
     * @return array|null
     */
    public function loadData($id)
    {
    }
    /**
     * Get site ID.
     *
     * @return string
     */
    public function getSiteId()
    {
    }
    /**
     * Get site name.
     *
     * @return string
     */
    public function getSiteName()
    {
    }
    /**
     * Get subscriber count.
     *
     * @return int
     */
    public function getSubscriberCount()
    {
    }
    /**
     * Activate.
     *
     * @param bool $isActivate Is activate.
     * @return $this
     */
    public function activate($isActivate = true)
    {
    }
    /**
     * Deactivate.
     *
     * @return $this
     */
    public function deactivate()
    {
    }
    /**
     * Remove.
     *
     * @return bool
     */
    public function remove()
    {
    }
    /**
     * Remove by contact ID.
     *
     * @param integer $id Contact ID.
     * @return bool
     */
    public static function removeById($id)
    {
    }
}