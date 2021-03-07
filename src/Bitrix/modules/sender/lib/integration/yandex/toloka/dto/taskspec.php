<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka\DTO;

class TaskSpec implements \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TolokaTransferObject
{
    /**
     * @var InputOutputSpec
     */
    private $inputSpec;
    /**
     * @var InputOutputSpec
     */
    private $outputSpec;
    /**
     * @var ViewSpec
     */
    private $viewSpec;
    /**
     * @return InputOutputSpec
     */
    public function getInputSpec() : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\InputOutputSpec
    {
    }
    /**
     * @param InputOutputSpec $inputSpec
     *
     * @return TaskSpec
     */
    public function setInputSpec(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\InputOutputSpec $inputSpec) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TaskSpec
    {
    }
    /**
     * @return InputOutputSpec
     */
    public function getOutputSpec() : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\InputOutputSpec
    {
    }
    /**
     * @param InputOutputSpec $outputSpec
     *
     * @return TaskSpec
     */
    public function setOutputSpec(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\InputOutputSpec $outputSpec) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TaskSpec
    {
    }
    /**
     * @return ViewSpec
     */
    public function getViewSpec() : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\ViewSpec
    {
    }
    /**
     * @param ViewSpec $viewSpec
     *
     * @return TaskSpec
     */
    public function setViewSpec(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\ViewSpec $viewSpec) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TaskSpec
    {
    }
    public function toArray() : array
    {
    }
}