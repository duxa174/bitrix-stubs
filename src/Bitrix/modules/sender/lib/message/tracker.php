<?php

namespace Bitrix\Sender\Message;

class Tracker
{
    const TYPE_READ = 1;
    const TYPE_CLICK = 2;
    const TYPE_UNSUB = 3;
    /** @var  integer $type Type. */
    protected $type;
    /** @var  string $moduleId Module ID. */
    protected $moduleId;
    /** @var  array $fields Fields. */
    protected $fields = array();
    /** @var  array $uriParameters Uri parameters. */
    protected $uriParameters = array();
    /** @var  string $handlerUri Handler uri. */
    protected $handlerUri;
    /** @var  string $linkDomain Link domain. */
    protected $linkDomain;
    /** @var  string $siteId Site id. */
    protected $siteId;
    private $siteData;
    /**
     * Constructor.
     *
     * @param integer $type Type.
     */
    public function __construct($type)
    {
    }
    /**
     * @return string
     */
    public function getModuleId()
    {
    }
    /**
     * @param string $moduleId
     * @return $this
     */
    public function setModuleId($moduleId)
    {
    }
    /**
     * @return string
     */
    public function getSiteId()
    {
    }
    /**
     * @param string $siteId
     * @return $this
     */
    public function setSiteId($siteId)
    {
    }
    /**
     * @return array
     */
    public function getFields()
    {
    }
    /**
     * @param array $fields Fields.
     * @return $this
     */
    public function setFields($fields)
    {
    }
    /**
     * @param string $key Fields.
     * @param string|integer|null $value Value.
     */
    public function addField($key, $value)
    {
    }
    /**
     * @return array
     */
    public function getUriParameters()
    {
    }
    /**
     * @param array $uriParameters
     * @return $this
     */
    public function setUriParameters($uriParameters)
    {
    }
    /**
     * @param string $key Fields.
     * @param string|integer|null $value Value.
     * @return $this
     */
    public function addUriParameter($key, $value)
    {
    }
    /**
     * Get page uri.
     *
     * @return string
     */
    public function getHandlerUri()
    {
    }
    /**
     * Set handler uri.
     *
     * @param string $handlerUri
     * @return $this
     */
    public function setHandlerUri($handlerUri)
    {
    }
    /**
     * Get link domain name.
     *
     * @return string
     */
    public function getLinkDomain()
    {
    }
    /**
     * Set link domain name.
     *
     * @param string $linkDomain
     * @return $this
     */
    public function setLinkDomain($linkDomain)
    {
    }
    /**
     * Get link.
     *
     * @return string
     */
    public function getLink()
    {
    }
    /**
     * Get as array.
     *
     * @return array
     */
    public function getArray()
    {
    }
    /**
     * Set as array.
     *
     * @param array $data Data.
     * @return $this
     */
    public function setArray(array $data)
    {
    }
}