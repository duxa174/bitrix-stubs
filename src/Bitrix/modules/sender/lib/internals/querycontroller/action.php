<?php

namespace Bitrix\Sender\Internals\QueryController;

class Action extends \Bitrix\Sender\Internals\QueryController\Base
{
    /** @var string $name Name. */
    protected $name;
    /** @var string $contentType Content type. */
    protected $contentType;
    /** @var callable $handler Handler. */
    protected $handler;
    /** @var string $postMethod Post method. */
    protected $requestMethod = \Bitrix\Sender\Internals\QueryController\Listener::REQUEST_METHOD_POST;
    /**
     * Create instance.
     * @param string $name Name.
     * @return static
     */
    public static function create($name)
    {
    }
    /**
     * Action constructor.
     * @param string $name Name.
     * @param callable|null $handler Handler.
     */
    public function __construct($name, $handler = null)
    {
    }
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Set handler.
     *
     * @param callable $handler Handler.
     * @return $this
     * @throws ArgumentException
     */
    public function setHandler($handler)
    {
    }
    /**
     * Get request method.
     *
     * @return string
     */
    public function getRequestMethod()
    {
    }
    /**
     * Set request method GET.
     *
     * @return $this
     */
    public function setRequestMethodGet()
    {
    }
    /**
     * Run.
     *
     * @param HttpRequest $request
     * @param Response $response
     * @throws \Bitrix\Main\Error;
     */
    public function run(\Bitrix\Main\HttpRequest $request, \Bitrix\Sender\Internals\QueryController\Response $response)
    {
    }
}