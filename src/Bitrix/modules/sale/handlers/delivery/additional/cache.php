<?php

namespace Sale\Handlers\Delivery\Additional;

/**
 * Class Cache
 * @package Sale\Handlers\Delivery\Additional
 * define const SALE_HNDL_DLV_ADD_CACHE_DISABLE to avoid caching.
 */
class Cache
{
    protected $ttl = 0;
    protected $cacheIdBase = '';
    /** @var \Bitrix\Main\Data\ManagedCache */
    protected static $cacheManager = null;
    /**
     * Cache constructor.
     * @param string $type
     * @param int $ttl
     */
    public function __construct($type, $ttl)
    {
    }
    /**
     * @param string[] $ids
     * @return mixed
     */
    public function get(array $ids = array())
    {
    }
    public function getAll()
    {
    }
    /**
     * @param mixed $value
     * @param string[] $ids
     */
    public function set($value, array $ids)
    {
    }
    /**
     *
     */
    public function clean()
    {
    }
    /**
     * @param string[] $ids
     * @return string
     */
    protected function getCacheId(array $ids = array())
    {
    }
    /**
     * @param string $type
     * @return string
     */
    protected static function createCacheId($type)
    {
    }
}
/**
 * Class CacheSession
 * Use session for cache purposes
 * We suggest that smt. (tariffs) will be constant during user shopping.
 * We increase the load on usual cache.
 * @package Sale\Handlers\Delivery\Additional
 */
class CacheSession extends \Sale\Handlers\Delivery\Additional\Cache
{
    public function __construct($type, $ttl)
    {
    }
    /**
     * @param mixed $value
     * @param string[] $ids
     */
    public function set($value, array $ids)
    {
    }
    /**
     * @param string[] $ids
     * @return bool
     */
    public function get(array $ids = array())
    {
    }
    /**
     * @param array $ids
     */
    public function clean(array $ids = array())
    {
    }
}
/**
 * Class CacheManager
 * @package Sale\Handlers\Delivery\Additional
 */
class CacheManager
{
    protected static $items = array();
    const TYPE_NONE = 0;
    const TYPE_PROFILES_LIST = 1;
    const TYPE_DELIVERY_FIELDS = 2;
    const TYPE_DELIVERY_PRICE = 3;
    const TYPE_PROFILE_FIELDS = 4;
    const TYPE_DELIVERY_LIST = 5;
    const TYPE_PROFILE_CONFIG = 6;
    const TYPE_EXTRA_SERVICES = 7;
    // types of cache
    const LOC_CACHE = 1;
    const LOC_SESSION = 2;
    //Possible cache types & some params
    protected static $types = array(
        self::TYPE_PROFILES_LIST => array('TTL' => 2419200, 'LOC' => self::LOC_CACHE),
        // month cache
        self::TYPE_DELIVERY_FIELDS => array('TTL' => 2419200, 'LOC' => self::LOC_CACHE),
        // month cache
        self::TYPE_DELIVERY_PRICE => array('TTL' => 0, 'LOC' => self::LOC_SESSION),
        // session
        self::TYPE_PROFILE_FIELDS => array('TTL' => 2419200, 'LOC' => self::LOC_CACHE),
        // month cache
        self::TYPE_DELIVERY_LIST => array('TTL' => 2419200, 'LOC' => self::LOC_CACHE),
        // month cache
        self::TYPE_PROFILE_CONFIG => array('TTL' => 0, 'LOC' => self::LOC_SESSION),
        // session
        self::TYPE_EXTRA_SERVICES => array('TTL' => 2419200, 'LOC' => self::LOC_CACHE),
    );
    /**
     * @param string $type Cache type
     * @return Cache
     * @throws ArgumentOutOfRangeException
     */
    public static function getItem($type)
    {
    }
    public static function cleanAll()
    {
    }
    public static function getAll()
    {
    }
}