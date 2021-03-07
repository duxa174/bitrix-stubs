<?php

namespace Bitrix\Seo\Retargeting;

/**
 * Class Request
 * @package Bitrix\Seo\Retargeting
 */
abstract class Request
{
    const TYPE_CODE = '';
    /** @var AuthAdapter */
    protected $adapter;
    /** @var AdsHttpClient */
    protected $client;
    /** @var Response $response Response. */
    protected $response;
    /** @var string $type Type. */
    protected $type;
    /** @var  mixed $endpoint Endpoint. */
    protected $endpoint;
    /** @var  bool $useDirectQuery Use direct query. */
    protected $useDirectQuery = false;
    /**
     * Request constructor.
     */
    public function __construct()
    {
    }
    /**
     * Set use direct query.
     * @param bool $mode Mode.
     */
    public function setUseDirectQuery($mode)
    {
    }
    /**
     * Get auth adapter.
     *
     * @return AuthAdapter
     */
    public function getAuthAdapter()
    {
    }
    /**
     * Set auth adapter.
     *
     * @param AuthAdapter $adapter Auth adapter.
     * @return $this
     */
    public function setAuthAdapter(\Bitrix\Seo\Retargeting\AuthAdapter $adapter)
    {
    }
    /**
     * Get response.
     *
     * @return mixed
     */
    public function getResponse()
    {
    }
    /**
     * Get client.
     *
     * @return AdsHttpClient
     */
    public function getClient()
    {
    }
    /**
     * Set client.
     *
     * @param AdsHttpClient $client Http client.
     * @return $this
     */
    public function setClient(\Bitrix\Seo\Retargeting\AdsHttpClient $client)
    {
    }
    /**
     * Get endpoint.
     *
     * @return mixed
     */
    public function getEndpoint()
    {
    }
    /**
     * Create instance.
     *
     * @param string $type Type.
     * @return static
     */
    public static function create($type)
    {
    }
    /**
     * Send request.
     *
     * @param array $params Parameters.
     * @return Response
     * @throws SystemException
     */
    public function send(array $params = array())
    {
    }
    /**
     * Query.
     *
     * @param array $params Parameters.
     * @return mixed
     */
    public abstract function query(array $params = array());
    protected function directQuery(array $params = array())
    {
    }
}