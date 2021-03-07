<?php

namespace Bitrix\Seo\WebHook\Payload;

/**
 * Class Payload
 *
 * @package Bitrix\Seo\WebHook\Payload
 */
class Batch
{
    /** @var Item[] $items Items.  */
    protected $items = [];
    /** @var  string $requestId Request ID. */
    protected $requestId;
    /** @var  string $source Source. */
    protected $source;
    /** @var  string $code Code. */
    protected $code;
    /** @var  string $externalId External ID. */
    protected $externalId;
    /**
     * Set lead items array.
     *
     * @param array $items Items.
     * @return $this
     */
    public function setLeadItemsArray(array $items)
    {
    }
    /**
     * Set array.
     *
     * @param array $data
     * @return $this
     */
    public function setArray(array $data)
    {
    }
    public function getArray()
    {
    }
    /**
     * Get item instances.
     *
     * @return Item[]|LeadItem[]
     */
    public function getItems()
    {
    }
    /**
     * Add item.
     *
     * @param Item $item Item instance.
     * @return $this
     */
    public function addItem(\Bitrix\Seo\WebHook\Payload\Item $item)
    {
    }
    /**
     * Get request ID.
     *
     * @return string
     */
    public function getRequestId()
    {
    }
    /**
     * Set request ID.
     *
     * @param string $requestId Request ID.
     * @return $this
     */
    public function setRequestId($requestId)
    {
    }
    /**
     * Get source.
     *
     * @return string
     */
    public function getSource()
    {
    }
    /**
     * Set request ID.
     *
     * @param string $source Source.
     * @return $this
     */
    public function setSource($source)
    {
    }
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Set code.
     *
     * @param string $code Code.
     * @return $this
     */
    public function setCode($code)
    {
    }
    /**
     * Get external ID.
     *
     * @return string
     */
    public function getExternalId()
    {
    }
    /**
     * Set external ID.
     *
     * @param string $externalId External ID.
     * @return $this
     */
    public function setExternalId($externalId)
    {
    }
}