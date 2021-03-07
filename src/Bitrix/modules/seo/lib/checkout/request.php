<?php

namespace Bitrix\Seo\Checkout;

/**
 * Class Request
 * @package Bitrix\Seo\Checkout
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
    /**
     * Request constructor.
     */
    public function __construct()
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
    public function setAuthAdapter(\Bitrix\Seo\Checkout\AuthAdapter $adapter)
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
     * Create instance.
     *
     * @param string $type Type.
     * @return static
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
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
}