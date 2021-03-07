<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka\DTO;

class Task implements \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TolokaTransferObject
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $poolId;
    /**
     * @var InputValue
     */
    private $inputValues;
    /**
     * @var int
     */
    private $overlap = 3;
    /**
     * @return int
     */
    public function getId() : int
    {
    }
    /**
     * @param int $id
     *
     * @return Task
     */
    public function setId(int $id) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Task
    {
    }
    /**
     * @return int
     */
    public function getPoolId() : int
    {
    }
    /**
     * @param int $poolId
     *
     * @return Task
     */
    public function setPoolId(int $poolId) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Task
    {
    }
    /**
     * @return InputValue
     */
    public function getInputValues() : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\InputValue
    {
    }
    /**
     * @param InputValue $inputValues
     *
     * @return Task
     */
    public function setInputValues(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\InputValue $inputValues) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Task
    {
    }
    /**
     * @return int
     */
    public function getOverlap() : int
    {
    }
    /**
     * @param int $overlap
     *
     * @return Task
     */
    public function setOverlap(int $overlap) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Task
    {
    }
    /**
     * @return Pool
     */
    public function getPool() : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
    {
    }
    /**
     * @param Pool $pool
     *
     * @return Task
     */
    public function setPool(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool $pool) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Task
    {
    }
    public function toArray() : array
    {
    }
}