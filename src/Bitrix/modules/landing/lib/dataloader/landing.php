<?php

namespace Bitrix\Landing\DataLoader;

class Landing extends \Bitrix\Landing\Source\DataLoader
{
    /**
     * Gets all meta data for landing's ids data.
     * @param array $ids
     * @return array
     */
    protected function getMetadata(array $ids)
    {
    }
    /**
     * Returns search parameter value.
     * @return string
     */
    protected function getSearchQuery()
    {
    }
    /**
     * Returns search snippet for each result item.
     * @param string $query Search query.
     * @param string $content Full search content.
     * @return string
     */
    protected function getSearchSnippet(string $query, string $content) : string
    {
    }
    /**
     * Gets data for dynamic blocks.
     * @return array
     */
    public function getElementListData()
    {
    }
    /**
     * Gets data item of dynamic blocks.
     * @param int $element Element's key.
     * @return array
     */
    public function getElementData($element)
    {
    }
}