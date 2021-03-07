<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka;

class ApiRequest extends \Bitrix\Sender\Integration\Yandex\Toloka\BaseApiObject
{
    public const ACCESS_CODE = 'toloka_access_code';
    /**
     * ApiRequest constructor.
     */
    public function __construct()
    {
    }
    public function getTaskList($params = [])
    {
    }
    public function getPoolList($params = [])
    {
    }
    public function getProjectList($params = [])
    {
    }
    public function getGeoList($params = [])
    {
    }
    public function getProjectInfo($params = [])
    {
    }
    public function createProject(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project $project)
    {
    }
    public function createPool(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool $pool)
    {
    }
    public function editProject(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project $project)
    {
    }
    public function editPool(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool $pool)
    {
    }
    public function createTask(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\Task $task)
    {
    }
    public function createTaskSuite(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\TaskSuite $taskSuite)
    {
    }
    public function getOperations()
    {
    }
    public function createTasks(array $taskList)
    {
    }
    public function stopTaskSuite(string $suiteId)
    {
    }
    public function deleteTasks(int $poolId)
    {
    }
    public function openPool($poolId)
    {
    }
    public function closePool($poolId)
    {
    }
    function getScope() : string
    {
    }
}