<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka\DTO;

class Pool
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $projectId;
    /**
     * @var string
     */
    private $privateName;
    /**
     * @var string
     */
    private $publicDescription;
    /**
     * @var boolean
     */
    private $mayContainAdultContent;
    /**
     * @var string
     */
    private $willExpire;
    /**
     * @var float
     */
    private $rewardPerAssignment;
    /**
     * @var PricingConfig
     */
    private $dynamicPricingConfig;
    /**
     * @var int
     */
    private $assignmentMaxDurationSeconds = 300;
    /**
     * @var QualityControl
     */
    private $qualityControl;
    /**
     * @var PoolDefaults
     */
    private $defaults;
    private $autoAcceptSolutions = true;
    /**
     * @var Filter[]
     */
    private $filter = [];
    /**
     * @return Filter[]
     */
    public function getFilter() : array
    {
    }
    /**
     * @param Filter[] $filter
     *
     * @return Pool
     */
    public function setFilter(array $filter) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
    {
    }
    /**
     * @param Filter $filter
     *
     * @return Pool
     */
    public function addFilter(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\Filter $filter) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
    {
    }
    /**
     * @return string
     */
    public function getProjectId() : string
    {
    }
    /**
     * @param string $projectId
     *
     * @return Pool
     */
    public function setProjectId(string $projectId) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
    {
    }
    /**
     * @return string
     */
    public function getPrivateName() : string
    {
    }
    /**
     * @param string $privateName
     *
     * @return Pool
     */
    public function setPrivateName(string $privateName) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
    {
    }
    /**
     * @return bool
     */
    public function isMayContainAdultContent() : bool
    {
    }
    /**
     * @param bool $mayContainAdultContent
     *
     * @return Pool
     */
    public function setMayContainAdultContent(bool $mayContainAdultContent) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
    {
    }
    /**
     * @return string
     */
    public function getWillExpire() : string
    {
    }
    /**
     * @param string $willExpire
     *
     * @return Pool
     */
    public function setWillExpire(string $willExpire) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
    {
    }
    /**
     * @return float
     */
    public function getRewardPerAssignment() : float
    {
    }
    /**
     * @param float $rewardPerAssignment
     *
     * @return Pool
     */
    public function setRewardPerAssignment(float $rewardPerAssignment) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
    {
    }
    /**
     * @return PricingConfig
     */
    public function getDynamicPricingConfig() : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\PricingConfig
    {
    }
    /**
     * @param PricingConfig $dynamicPricingConfig
     *
     * @return Pool
     */
    public function setDynamicPricingConfig(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\PricingConfig $dynamicPricingConfig) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
    {
    }
    /**
     * @return int
     */
    public function getAssignmentMaxDurationSeconds() : int
    {
    }
    /**
     * @param int $assignmentMaxDurationSeconds
     *
     * @return Pool
     */
    public function setAssignmentMaxDurationSeconds(int $assignmentMaxDurationSeconds) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
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
     * @return Pool
     */
    public function setQualityControl(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\QualityControl $qualityControl) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
    {
    }
    /**
     * @return PoolDefaults
     */
    public function getDefaults() : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\PoolDefaults
    {
    }
    /**
     * @param PoolDefaults $defaults
     *
     * @return Pool
     */
    public function setDefaults(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\PoolDefaults $defaults) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
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
     * @return Pool
     */
    public function setId(int $id) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
    {
    }
    /**
     * @return mixed
     */
    public function getAutoAcceptSolutions()
    {
    }
    /**
     * @param mixed $autoAcceptSolutions
     *
     * @return Pool
     */
    public function setAutoAcceptSolutions($autoAcceptSolutions)
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
     * @return Pool
     */
    public function setPublicDescription(string $publicDescription) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Pool
    {
    }
    public function toArray() : array
    {
    }
}