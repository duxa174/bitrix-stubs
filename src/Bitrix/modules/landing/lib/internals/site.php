<?php

namespace Bitrix\Landing\Internals;

class SiteTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * For save callbacks.
     */
    const ACTION_TYPE_ADD = 'add';
    /**
     * For save callbacks.
     */
    const ACTION_TYPE_UPDATE = 'update';
    /**
     * Stored fields for save separate.
     * @var array
     */
    protected static $additionalFields = array();
    /**
     * Disable callback.
     * @var boolean
     */
    protected static $disableCallback = false;
    /**
     * In current iteration we change date only.
     * @var bool
     */
    protected static $touchMode = false;
    /**
     * Returns DB table name for entity.
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Return site controller class, or pseudo.
     * @return string
     */
    protected static function getSiteController()
    {
    }
    /**
     * Check CODE unique in site group.
     * @param string $code Site code.
     * @param int $currentId Current site id.
     * @param int $domainId Domain id.
     * @return boolean
     */
    protected static function checkUniqueInDomain($code, $currentId, $domainId)
    {
    }
    /**
     * Is bitrix24.site subdomain?
     * @param string $domainName Domain name.
     * @return boolean
     */
    protected static function isB24Domain($domainName)
    {
    }
    /**
     * Customize controller message.
     * @param SystemException $ex Exception from controller.
     * @return Entity\EntityError
     */
    protected static function customizeControllerError(\Bitrix\Main\SystemException $ex)
    {
    }
    /**
     * Check 'bitrix'-named domain.
     * @param string $domainName Domain name.
     * @return boolean
     */
    public static function checkBitrixUse($domainName)
    {
    }
    /**
     * Set additional access filter.
     * @param mixed $params ORM params.
     * @return mixed
     */
    public static function setAccessFilter($params)
    {
    }
    /**
     * Returns value from row by key code. If key don't exist, get from DB.
     * @param int $id Site id.
     * @param array $fields Site row fields.
     * @param string $code Key code of row.
     * @return mixed
     */
    private static function getValueByCode($id, array $fields, $code)
    {
    }
    /**
     * Prepare change to save.
     * @param Entity\Event $event Event instance.
     * @param string $actionType Action type: add / update.
     * @return Entity\EventResult
     */
    protected static function prepareChange(\Bitrix\Main\Entity\Event $event, $actionType)
    {
    }
    /**
     * Switch domains between two sites. Returns true on success.
     * @param int $siteId1 First site id.
     * @param int $siteId2 Second site id.
     * @return bool
     */
    public static function switchDomain(int $siteId1, int $siteId2) : bool
    {
    }
    /**
     * Sets new random domain to site. Actual for Bitrix24 only.
     * @param int $siteId Site id.
     * @return bool
     */
    public static function randomizeDomain(int $siteId) : bool
    {
    }
    /**
     * Before add handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function OnBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Before update handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function OnBeforeUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Save additional fields after add / update.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    protected static function saveAdditionalFields(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Get entity rows.
     * @param array $params Params array.
     * @return \Bitrix\Main\ORM\Query\Result
     */
    public static function getList(array $params = array())
    {
    }
    /**
     * After add handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function OnAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * After update handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function OnAfterUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Before delete handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function OnBeforeDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * After delete handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
}