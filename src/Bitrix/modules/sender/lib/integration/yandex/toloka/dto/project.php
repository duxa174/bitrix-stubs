<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka\DTO;

class Project implements \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TolokaTransferObject
{
    public const ASSIGNMENTS_ISSUING_TYPE_AUTOMATED = 'AUTOMATED';
    public const ASSIGNMENTS_ISSUING_TYPE_MAP_SELECTOR = 'MAP_SELECTOR';
    public const STATUS_ACTIVE = 'ACTIVE';
    public const STATUS_ARCHIVE = 'ARCHIVE';
    /**
     * @var string
     */
    private $publicName;
    /**
     * @var string
     */
    private $publicDescription;
    /**
     * @var string
     */
    private $publicInstructions;
    /**
     * @var string
     */
    private $privateComment;
    /**
     * @var TaskSpec
     */
    private $taskSpec;
    /**
     * @var string
     */
    private $assignmentsIssuingType = self::ASSIGNMENTS_ISSUING_TYPE_AUTOMATED;
    /**
     * @var ViewConfig
     */
    private $assignmentsIssuingViewConfig;
    /**
     * @var QualityControl
     */
    private $qualityControl;
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $status = self::STATUS_ACTIVE;
    /**
     * @var string
     */
    private $created;
    /**
     * @return string
     */
    public function getPublicInstructions() : string
    {
    }
    /**
     * @param string $publicInstructions
     *
     * @return Project
     */
    public function setPublicInstructions(string $publicInstructions) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project
    {
    }
    /**
     * @return string
     */
    public function getPrivateComment() : string
    {
    }
    /**
     * @param string $privateComment
     *
     * @return Project
     */
    public function setPrivateComment(string $privateComment) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project
    {
    }
    /**
     * @return TaskSpec
     */
    public function getTaskSpec() : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TaskSpec
    {
    }
    /**
     * @param TaskSpec $taskSpec
     *
     * @return Project
     */
    public function setTaskSpec(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\TaskSpec $taskSpec) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project
    {
    }
    /**
     * @return ViewConfig
     */
    public function getAssignmentsIssuingViewConfig() : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\ViewConfig
    {
    }
    /**
     * @param ViewConfig $assignmentsIssuingViewConfig
     *
     * @return Project
     */
    public function setAssignmentsIssuingViewConfig(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\ViewConfig $assignmentsIssuingViewConfig) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project
    {
    }
    /**
     * @return QualityControl
     */
    public function getQualityControl() : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\QualityControl
    {
    }
    /**
     * @param QualityControl $qualityControl
     *
     * @return Project
     */
    public function setQualityControl(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\QualityControl $qualityControl) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project
    {
    }
    /**
     * @return int
     */
    public function getId() : int
    {
    }
    /**
     * @param int $id
     *
     * @return Project
     */
    public function setId(int $id) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project
    {
    }
    /**
     * @return string
     */
    public function getStatus() : string
    {
    }
    /**
     * @param string $status
     *
     * @return Project
     */
    public function setStatus(string $status) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project
    {
    }
    /**
     * @return string
     */
    public function getCreated() : string
    {
    }
    /**
     * @param string $created
     *
     * @return Project
     */
    public function setCreated(string $created) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project
    {
    }
    public function toArray() : array
    {
    }
    /**
     * @return string
     */
    public function getPublicName() : string
    {
    }
    /**
     * @param string $publicName
     *
     * @return Project
     */
    public function setPublicName(string $publicName) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project
    {
    }
    /**
     * @return string
     */
    public function getPublicDescription() : string
    {
    }
    /**
     * @param string $publicDescription
     *
     * @return Project
     */
    public function setPublicDescription(string $publicDescription) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project
    {
    }
    /**
     * @return string
     */
    public function getAssignmentsIssuingType() : string
    {
    }
    /**
     * @param string $assignmentsIssuingType
     *
     * @return Project
     */
    public function setAssignmentsIssuingType(string $assignmentsIssuingType) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Project
    {
    }
}