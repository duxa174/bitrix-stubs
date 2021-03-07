<?php

namespace Bitrix\Main\Numerator\Generator;

/**
 * Class SequentNumberGenerator
 * @package Bitrix\Main\Numerator\Generator
 */
class SequentNumberGenerator extends \Bitrix\Main\Numerator\Generator\NumberGenerator implements \Bitrix\Main\Numerator\Generator\Contract\Sequenceable, \Bitrix\Main\Numerator\Generator\Contract\UserConfigurable
{
    const DAY = 'day';
    const MONTH = 'month';
    const YEAR = 'year';
    const TEMPLATE_WORD_NUMBER = 'NUMBER';
    const ERROR_SEQUENCE_NOT_SET = 'ERROR_SEQUENCE_NOT_SET';
    protected $start;
    protected $step;
    protected $length = 0;
    protected $padString = '0';
    protected $periodicBy;
    protected $timezone;
    protected $isDirectNumeration;
    protected $nowTime;
    /** value stored in database */
    protected $nextNumber;
    /** calculated value that used for template parsing */
    protected $currentNumber;
    protected $lastInvocationTime;
    protected $numeratorId;
    protected $numberHash;
    /** @inheritdoc */
    public function setConfig($config)
    {
    }
    /** @inheritdoc */
    public static function getSettingsFields()
    {
    }
    /** @inheritdoc */
    public static function getTemplateWordsSettings()
    {
    }
    /** @inheritdoc */
    public function getConfig()
    {
    }
    /**
     * @param null $numeratorId
     * @param bool $createIfEmpty
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\DB\SqlQueryException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    protected function getSettings($numeratorId = null, $createIfEmpty = true)
    {
    }
    /**
     * @return mixed
     */
    private function getNumberHash()
    {
    }
    /** @inheritdoc */
    public function parseTemplate($template)
    {
    }
    protected function saveNumeratorSequenceSettings($numeratorId, $numberHash, $fields, $whereNextNumber = null)
    {
    }
    /** @inheritdoc */
    public static function getTemplateWordsForParse()
    {
    }
    /** @inheritdoc */
    public function parseTemplateForPreview($template)
    {
    }
    private function replaceNumberInPattern($template)
    {
    }
    /** @inheritdoc */
    public function getNextNumber($numeratorId)
    {
    }
    /**
     * @return string
     */
    public static function getAvailableForType()
    {
    }
    /*** @inheritdoc */
    public function setNextNumber($numeratorId, $newNumber, $whereNumber)
    {
    }
    /**
     * set current number to its start position if generator is periodic and period has been just changed
     */
    private function resetCurrentNumberIfNeeded()
    {
    }
    /**
     * @return bool
     */
    private function isSameMonthButDifferentYear()
    {
    }
    /**
     * @param $interval
     * @return bool
     */
    private function isSameDayButDifferent($interval)
    {
    }
    /**
     * @param $interval
     * @return bool
     */
    private function isHasChanged($interval)
    {
    }
    /**
     * @return array
     */
    private static function getTimezoneSettings()
    {
    }
    private function getNowUserTime()
    {
    }
    private function getLastInvocationUserTime()
    {
    }
    private function createDateTimeInCurrentTimezone($timestamp)
    {
    }
    /** @inheritdoc */
    public function validateConfig($config)
    {
    }
    /** @inheritdoc */
    public function setNumberHash($numberHash)
    {
    }
    private function calculateNextAndCurrentNumber($initNumber)
    {
    }
}