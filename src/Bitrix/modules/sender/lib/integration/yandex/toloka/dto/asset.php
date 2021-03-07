<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka\DTO;

class Asset implements \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TolokaTransferObject
{
    /**
     * @var String[]
     */
    private $scriptUrls = [];
    /**
     * Asset constructor.
     *
     * @param String[] $scriptUrls
     */
    public function __construct()
    {
    }
    /**
     * @return String[]
     */
    public function getScriptUrls() : array
    {
    }
    /**
     * @param String[] $scriptUrls
     *
     * @return Asset
     */
    public function setScriptUrls(array $scriptUrls) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Asset
    {
    }
    /**
     * @param string $scriptUrl
     *
     * @return Asset
     */
    public function addScriptUrl(string $scriptUrl) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Asset
    {
    }
    public function toArray() : array
    {
    }
}