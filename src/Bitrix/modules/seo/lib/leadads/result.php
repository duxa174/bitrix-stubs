<?php

namespace Bitrix\Seo\LeadAds;

class Result extends \Bitrix\Main\Result
{
    /** @var  string|null $id ID. */
    protected $id;
    /** @var  DateTime $dateCreate Create date. */
    protected $dateCreate;
    /** @var int $currentIterationNumber Current iteration number. */
    protected $currentIterationNumber = 0;
    /**
     * Sets data of the result.
     *
     * @param array $data Data.
     * @return void
     */
    public function setData(array $data)
    {
    }
    /**
     * Add field values.
     *
     * @param string $name Name.
     * @param array $values Values.
     */
    public function addFieldValues($name, array $values)
    {
    }
    /**
     * Get id.
     *
     * @return string|null
     */
    public function getId()
    {
    }
    /**
     * Set id.
     *
     * @param string $id ID.
     */
    public function setId($id)
    {
    }
    /**
     * Get create date.
     *
     * @return DateTime|null
     */
    public function getDateCreate()
    {
    }
    /**
     * Set create date.
     *
     * @param DateTime $dateCreate Create date.
     */
    public function setDateCreate(\Bitrix\Main\Type\DateTime $dateCreate)
    {
    }
    /**
     * Fetch.
     *
     * @return array|null
     */
    public function fetch()
    {
    }
}