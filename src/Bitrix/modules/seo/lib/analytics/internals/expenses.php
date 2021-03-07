<?php

namespace Bitrix\Seo\Analytics\Internals;

class Expenses
{
    protected $data;
    /**
     * Expenses constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
    }
    /**
     * @param array $data
     * @return $this
     */
    public function add(array $data)
    {
    }
    /**
     * @return array
     */
    public function toArray()
    {
    }
    /**
     * @return int
     */
    public function getImpressions()
    {
    }
    /**
     * @return int
     */
    public function getClicks()
    {
    }
    /**
     * @return int
     */
    public function getActions()
    {
    }
    /**
     * @return float
     */
    public function getCpc()
    {
    }
    /**
     * This is cost per 1000 impressions.
     *
     * @return float
     */
    public function getCpm()
    {
    }
    /**
     * @return float
     */
    public function getSpend()
    {
    }
    /**
     * @return string
     */
    public function getCurrency()
    {
    }
    /**
     * @param array $data
     */
    protected function prepareData(array $data)
    {
    }
    /**
     * @return array
     */
    protected function getNumericFieldNames()
    {
    }
}