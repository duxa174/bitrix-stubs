<?php

namespace Bitrix\Sender\Integration\Yandex\Toloka\DTO;

class ViewSpec implements \Bitrix\Sender\Integration\Yandex\Toloka\DTO\TolokaTransferObject
{
    /**
     * @var string
     */
    private $markup;
    /**
     * @var string
     */
    private $script;
    /**
     * @var string
     */
    private $styles;
    /**
     * @var Asset
     */
    private $assets;
    /**
     * @var ViewSpecSettings
     */
    private $settings;
    public function toArray() : array
    {
    }
    /**
     * @return string
     */
    public function getMarkup() : string
    {
    }
    /**
     * @param string $markup
     *
     * @return ViewSpec
     */
    public function setMarkup(string $markup) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\ViewSpec
    {
    }
    /**
     * @return string
     */
    public function getScript() : string
    {
    }
    /**
     * @param string $script
     *
     * @return ViewSpec
     */
    public function setScript(string $script) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\ViewSpec
    {
    }
    /**
     * @return string
     */
    public function getStyles() : string
    {
    }
    /**
     * @param string $styles
     *
     * @return ViewSpec
     */
    public function setStyles(string $styles) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\ViewSpec
    {
    }
    /**
     * @return ViewSpecSettings
     */
    public function getSettings() : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\ViewSpecSettings
    {
    }
    /**
     * @param ViewSpecSettings $settings
     *
     * @return ViewSpec
     */
    public function setSettings(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\ViewSpecSettings $settings) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\ViewSpec
    {
    }
    /**
     * @return Asset
     */
    public function getAssets() : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\Asset
    {
    }
    /**
     * @param Asset $assets
     *
     * @return ViewSpec
     */
    public function setAssets(\Bitrix\Sender\Integration\Yandex\Toloka\DTO\Asset $assets) : \Bitrix\Sender\Integration\Yandex\Toloka\DTO\ViewSpec
    {
    }
}