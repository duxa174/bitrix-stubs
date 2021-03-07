<?php

namespace Bitrix\Sender\Internals;

/**
 * Common component for sender component classes
 * @package Bitrix\Sender\Internals
 */
abstract class CommonSenderComponent extends \CBitrixComponent
{
    /** @var ErrorCollection $errors */
    protected $errors;
    /**
     * @var int $userId
     */
    protected $userId;
    /**
     * @var AccessController $accessController
     */
    protected $accessController;
    protected function checkRequiredParams()
    {
    }
    /**
     * Initialization of component parameters.
     * Validating access to the modify action by Permission Entity Code parameter
     *
     */
    protected function initParams()
    {
    }
    protected function canEdit()
    {
    }
    protected function printErrors()
    {
    }
    protected function checkComponentExecution()
    {
    }
    protected function getAccessController() : \Bitrix\Sender\Access\AccessController
    {
    }
    public function executeComponent()
    {
    }
    /**
     * @param string $template
     *
     * @return array|void
     */
    protected function prepareResultAndTemplate($template = "")
    {
    }
    protected abstract function prepareResult();
    public abstract function getEditAction();
    public abstract function getViewAction();
}