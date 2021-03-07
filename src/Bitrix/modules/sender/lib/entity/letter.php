<?php

namespace Bitrix\Sender\Entity;

class Letter extends \Bitrix\Sender\Entity\Base
{
    /** @var null|array $postingData Posting data. */
    protected $postingData = null;
    /** @var  MainMessage\Adapter $message Message. */
    protected $message;
    /** @var null|array $messagesCache Created messages by type
     */
    protected $messagesCache = [];
    /** @var  Dispatch\Duration $duration Duration. */
    protected $duration;
    /** @var  Dispatch\Method $method Method. */
    protected $method;
    /** @var  Dispatch\State $state State. */
    protected $state;
    /** @var  Posting\Counter $counter Counter. */
    protected $counter;
    /**
     * Get filter fields.
     *
     * @return array
     */
    protected static function getFilterFields()
    {
    }
    /**
     * Get data manager.
     *
     * @return \Bitrix\Main\Entity\DataManager
     */
    public static function getDataClass()
    {
    }
    /**
     * Get list.
     *
     * @param array $parameters Parameters.
     * @return DB\Result
     */
    public static function getList(array $parameters = array())
    {
    }
    public static function getDefaultSelectFields()
    {
    }
    /**
     * Get list with message fields
     * @param array $parameters Getlist params.
     * @return DB\ArrayResult
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getListWithMessageFields(array $parameters = array())
    {
    }
    /**
     * Create instance by ID.
     *
     * @param integer|null $id ID.
     * @param array $messageCodes Message codes.
     * @return static|Letter|Ad|Rc|null
     */
    public static function createInstanceById($id = null, array $messageCodes = [])
    {
    }
    /**
     * Create instance by array data.
     *
     * @param array $data Data.
     * @param array $messageCodes Message codes.
     * @return static|Letter|Ad|Rc|null
     */
    public static function createInstanceByArray(array $data, array $messageCodes = [])
    {
    }
    /**
     * Create instance by posting ID.
     *
     * @param integer $postingId Posting ID.
     * @return static|Ad|null
     */
    public static function createInstanceByPostingId($postingId)
    {
    }
    /**
     * Create instance by contact ID.
     *
     * @param integer $contactId Contact ID.
     * @param array $messageCodes Message codes.
     * @return static|Ad|null
     */
    public static function createInstanceByContactId($contactId, array $messageCodes = [])
    {
    }
    protected static function createInstanceByCode($code = null, array $messageCodes = [])
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
    protected function prepareSearchContent()
    {
    }
    protected function saveDataSegments($id, array $segmentsInclude, array $segmentsExclude)
    {
    }
    private static function getArrayDiffNewest(array $current, array $old)
    {
    }
    private static function getArrayDiffRemoved(array $current, array $old)
    {
    }
    protected function updateTemplateUseCount(array $data, array $previousData)
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
     * Return true if it have statistics.
     *
     * @return bool
     */
    public function hasStatistics()
    {
    }
    /**
     * Return true if can change segments.
     *
     * @return bool
     */
    public function canChangeSegments()
    {
    }
    /**
     * Load segments data.
     *
     * @param integer $id ID.
     * @return array
     */
    public function loadDataSegments($id)
    {
    }
    /**
     * Return true if can change template.
     *
     * @return bool
     */
    public function canChangeTemplate()
    {
    }
    /**
     * Get Message instance.
     *
     * @return MainMessage\Adapter
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getMessage()
    {
    }
    /**
     * Is support heat map.
     *
     * @return bool
     */
    public function isSupportHeatMap()
    {
    }
    /**
     * Is support reiterate run.
     *
     * @return bool
     */
    public function isSupportReiterate()
    {
    }
    /**
     * Get campaign ID.
     *
     * @return mixed
     */
    public function getCampaignId()
    {
    }
    /**
     * Get duration instance.
     *
     * @return Dispatch\Duration
     */
    public function getDuration()
    {
    }
    /**
     * Get state instance.
     *
     * @return Dispatch\State
     */
    public function getState()
    {
    }
    /**
     * Get method instance.
     *
     * @return Dispatch\Method
     */
    public function getMethod()
    {
    }
    /**
     * Get counter instance.
     *
     * @return Posting\Counter
     */
    public function getCounter()
    {
    }
    /**
     * Get Tester instance.
     *
     * @return MainMessage\Tester
     */
    protected function getTester()
    {
    }
    /**
     * Is reiterate letter.
     *
     * @return bool
     */
    public function isReiterate()
    {
    }
    /**
     * Is trigger letter.
     *
     * @return bool
     */
    public function isTrigger()
    {
    }
    /**
     * Is support testing.
     *
     * @return bool
     */
    public function isSupportTesting()
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
     * Remove by letter ID.
     *
     * @param integer $id Letter ID.
     * @return bool
     */
    public static function removeById($id)
    {
    }
    /**
     * Copy.
     *
     * @return integer|null
     */
    public function copy()
    {
    }
    /**
     * Send test message to recipient.
     *
     * @param array $codes Recipient codes.
     * @param array $parameters Parameters.
     * @return Result
     */
    public function test(array $codes, array $parameters = array())
    {
    }
    /**
     * Plan sending.
     *
     * @param Date $date Date.
     * @return bool
     */
    public function plan(\Bitrix\Main\Type\Date $date)
    {
    }
    /**
     * Wait sending.
     *
     * @return bool
     */
    public function wait()
    {
    }
    /**
     * Send.
     *
     * @return bool
     */
    public function send()
    {
    }
    /**
     * Send errors.
     *
     * @return bool
     */
    public function sendErrors()
    {
    }
    /**
     * Stop.
     *
     * @return bool
     */
    public function stop()
    {
    }
    /**
     * Halt.
     *
     * @return bool
     */
    public function halt()
    {
    }
    /**
     * Resume.
     *
     * @return bool
     */
    public function resume()
    {
    }
    /**
     * Pause.
     *
     * @return bool
     */
    public function pause()
    {
    }
    /**
     * Get last posting data.
     *
     * @return array
     */
    public function getLastPostingData()
    {
    }
}