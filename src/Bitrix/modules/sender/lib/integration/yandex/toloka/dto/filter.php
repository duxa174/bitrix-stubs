<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka\DTO;

class Filter implements \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TolokaTransferObject
{
    /**
     * @var string
     */
    private $operator = 'IN';
    /**
     * @var string
     */
    private $category = 'computed';
    /**
     * @var string
     */
    private $key;
    /**
     * @var string
     */
    private $value;
    /**
     * @return string
     */
    public function getOperator() : string
    {
    }
    /**
     * @param string $operator
     *
     * @return Filter
     */
    public function setOperator(string $operator) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Filter
    {
    }
    /**
     * @return string
     */
    public function getCategory() : string
    {
    }
    /**
     * @param string $category
     *
     * @return Filter
     */
    public function setCategory(string $category) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Filter
    {
    }
    /**
     * @return string
     */
    public function getKey() : string
    {
    }
    /**
     * @param string $key
     *
     * @return Filter
     */
    public function setKey(string $key) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Filter
    {
    }
    /**
     * @return string
     */
    public function getValue() : string
    {
    }
    /**
     * @param string $value
     *
     * @return Filter
     */
    public function setValue(string $value) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Filter
    {
    }
    public function ableFilters()
    {
    }
    public function toArray() : array
    {
    }
}