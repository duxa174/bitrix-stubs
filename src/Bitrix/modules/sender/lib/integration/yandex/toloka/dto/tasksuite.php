<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka\DTO;

class TaskSuite implements \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TolokaTransferObject
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
     * @var Task[]
     */
    private $tasks;
    /**
     * @return int
     */
    public function getId() : int
    {
    }
    /**
     * @param int $id
     *
     * @return TaskSuite
     */
    public function setId(int $id) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TaskSuite
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
     * @return TaskSuite
     */
    public function setPoolId(int $poolId) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TaskSuite
    {
    }
    /**
     * @return Task[]
     */
    public function getTasks() : array
    {
    }
    /**
     * @param Task[] $tasks
     *
     * @return TaskSuite
     */
    public function setTasks(array $tasks) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TaskSuite
    {
    }
    public function toArray() : array
    {
    }
}