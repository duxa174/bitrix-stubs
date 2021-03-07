<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka\DTO;

class InputOutputSpec implements \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TolokaTransferObject
{
    public const TYPES = ['URL' => 'url', 'BOOLEAN' => 'boolean', 'INTEGER' => 'integer', 'STRING' => 'string', 'FLOAT' => 'float', 'JSON' => 'json', 'FILE' => 'file'];
    /**
     * @var string
     */
    private $identificator;
    /**
     * @var string
     */
    private $type;
    /**
     * @var bool
     */
    private $required = true;
    /**
     * @return string
     */
    public function getIdentificator() : string
    {
    }
    /**
     * @param string $identificator
     *
     * @return InputOutputSpec
     */
    public function setIdentificator(string $identificator) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\InputOutputSpec
    {
    }
    /**
     * @return string
     */
    public function getType() : string
    {
    }
    /**
     * @param string $type
     *
     * @return InputOutputSpec
     */
    public function setType(string $type) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\InputOutputSpec
    {
    }
    public function toArray() : array
    {
    }
}