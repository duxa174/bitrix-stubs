<?php

namespace Bitrix\Sender\Internals\QueryController;

class Listener extends \Bitrix\Sender\Internals\QueryController\Base
{
    const REQUEST_METHOD_POST = 'POST';
    const REQUEST_METHOD_GET = 'GET';
    /** @var ErrorCollection $errors Errors. */
    protected $errors;
    /** @var Action $action Action. */
    protected $action;
    /** @var string $actionName Action name. */
    protected $actionName;
    /** @var Action[] $actions */
    protected $actions = array();
    /** @var HttpRequest $request */
    protected $request;
    /** @var Response $response */
    protected $response;
    /**
     * Create instance.
     *
     * @return static
     */
    public static function create()
    {
    }
    /**
     * Controller constructor.
     */
    public function __construct()
    {
    }
    /**
     * Set actions.
     * @param Action[] $actions Actions.
     * @return $this
     */
    public function setActions(array $actions)
    {
    }
    /**
     * Add action.
     * @param Action $action Action.
     * @return $this
     */
    public function addAction(\Bitrix\Sender\Internals\QueryController\Action $action)
    {
    }
    protected function giveResponse()
    {
    }
    /**
     * Get error collection.
     *
     * @return ErrorCollection
     */
    public function getErrorCollection()
    {
    }
    protected function check()
    {
    }
    protected function findAction()
    {
    }
    protected function process()
    {
    }
    /**
     * Run.
     */
    public function run()
    {
    }
    /**
     * Call list.
     *
     * @param callable[] $list Callee list.
     * @param array $parameters Parameters.
     * @return void
     */
    protected function callList(array $list, array $parameters = array())
    {
    }
}