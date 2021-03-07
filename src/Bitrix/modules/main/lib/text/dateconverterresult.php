<?php

namespace Bitrix\Main\Text;

/**
 * Class DateConverterResult
 * @package Bitrix\Main\Text
 */
class DateConverterResult
{
    /**
     * @var \Bitrix\Main\Type\DateTime|null
     */
    private $date = null;
    /**
     * @var string
     */
    private $text = '';
    /**
     * @var integer
     */
    private $textPosition = 0;
    /**
     * @var integer
     */
    private $textLength = 0;
    /**
     * @var string
     */
    private $type = '';
    /**
     * @var array
     */
    private $metrics = array();
    /**
     * @var array
     */
    private $metricModifier = array();
    const TYPE_UNKNOWN = 'UNKNOWN';
    const TYPE_RELATIVE = 'RELATIVE';
    const TYPE_DAYOFWEEK = 'DAYOFWEEK';
    const TYPE_MODIFIER = 'MODIFIER';
    const TYPE_CALENDAR = 'CALENDAR';
    const TYPE_PARTOFDAY = 'PARTOFDAY';
    /**
     * DateConverterResult constructor.
     * @param \Bitrix\Main\Type\DateTime $date
     * @param string $text
     * @param $type
     * @param array $metrics
     * @param array $metricModifier
     */
    function __construct(\Bitrix\Main\Type\DateTime $date, $matchParams, $type = self::TYPE_UNKNOWN, $metrics = array(), $metricModifier = array())
    {
    }
    /**
     * Date from the text
     * 
     * @return \Bitrix\Main\Type\DateTime|null
     */
    public function getDate()
    {
    }
    /**
     * The string used to build the date
     * 
     * @return string
     */
    public function getText()
    {
    }
    /**
     * Position of string used to build the date
     * 
     * @return integer
     */
    public function getTextPosition()
    {
    }
    /**
     * Length of string used to build the date
     * 
     * @return integer
     */
    public function getTextLength()
    {
    }
    /**
     * Get primary recognition type
     * 
     * @return string
     */
    public function getType()
    {
    }
    /**
     * Get recognition metrics
     * 
     * @return array
     */
    public function getMetrics()
    {
    }
    /**
     * Get recognition metric modifier
     * 
     * @return array
     */
    public function getMetricModifier()
    {
    }
}