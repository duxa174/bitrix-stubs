<?php

namespace Bitrix\Sender\Posting;

/**
 * Class Builder
 * @package Bitrix\Sender\Posting
 */
class Builder
{
    /** @var bool $checkDuplicates Check duplicates. */
    protected $checkDuplicates = true;
    /** @var array $groupCount Group count. */
    protected $groupCount = array();
    /** @var integer $postingId Posting ID. */
    protected $postingId;
    /** @var array $postingData Posting data. */
    protected $postingData;
    /** @var integer $typeId Type ID. */
    protected $typeId;
    /**
     * Create instance.
     *
     * @return static
     */
    public static function create()
    {
    }
    /**
     * Shaper constructor.
     *
     * @param integer|null $postingId Posting ID.
     * @param bool $checkDuplicates Check duplicates.
     */
    public function __construct($postingId = null, $checkDuplicates = true)
    {
    }
    /**
     * Load.
     *
     * @param integer $postingId Posting ID.
     * @param bool $checkDuplicates Check duplicates.
     * @param bool $prepareFields
     *
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function run($postingId, $checkDuplicates = true, $prepareFields = true)
    {
    }
    protected function runForRecipientType($usedPersonalizeFields = [], $prepareFields = true)
    {
    }
    protected static function clean($postingId)
    {
    }
    protected function getTypeCode()
    {
    }
    protected function getSubscriptionConnectors($campaignId)
    {
    }
    protected function getCampaignGroups($campaignId)
    {
    }
    protected function getLetterConnectors($letterId)
    {
    }
    protected function setRecipientIdentificators(array &$dataList)
    {
    }
    protected function checkUsedFields($entityType, $ids, $usedPersonalizeFields, &$dataList)
    {
    }
    protected function fill(\Bitrix\Sender\Connector\Base $connector, $isInclude = false, $groupId = null, $usedPersonalizeFields = [], $prepareFields = true)
    {
    }
    protected function removePostingRecipients(array &$list)
    {
    }
    protected function updateContacts(array &$list, array $codeFilter)
    {
    }
    protected function addPostingRecipients(array &$list)
    {
    }
    protected function incGroupCounters($groupId = null, $count = 0)
    {
    }
}