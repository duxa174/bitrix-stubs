<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka\DTO;

class OverlapConfig implements \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TolokaTransferObject
{
    /**
     * @var string
     */
    private $type = "BASIC";
    /**
     * @var int
     */
    private $maxOverlap;
    /**
     * @var float
     */
    private $minConfidence;
    /**
     * @var int
     */
    private $answerWeightSkill;
    /**
     * @var InputValue[]
     */
    private $fields;
    /**
     * @return string
     */
    public function getType() : string
    {
    }
    /**
     * @param string $type
     *
     * @return OverlapConfig
     */
    public function setType(string $type) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\OverlapConfig
    {
    }
    /**
     * @return int
     */
    public function getMaxOverlap() : int
    {
    }
    /**
     * @param int $maxOverlap
     *
     * @return OverlapConfig
     */
    public function setMaxOverlap(int $maxOverlap) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\OverlapConfig
    {
    }
    /**
     * @return float
     */
    public function getMinConfidence() : float
    {
    }
    /**
     * @param float $minConfidence
     *
     * @return OverlapConfig
     */
    public function setMinConfidence(float $minConfidence) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\OverlapConfig
    {
    }
    /**
     * @return int
     */
    public function getAnswerWeightSkill() : int
    {
    }
    /**
     * @param int $answerWeightSkill
     *
     * @return OverlapConfig
     */
    public function setAnswerWeightSkill(int $answerWeightSkill) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\OverlapConfig
    {
    }
    /**
     * @return InputValue[]
     */
    public function getFields() : array
    {
    }
    /**
     * @param InputValue[] $fields
     *
     * @return OverlapConfig
     */
    public function setFields(array $fields) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\OverlapConfig
    {
    }
    public function toArray() : array
    {
    }
}