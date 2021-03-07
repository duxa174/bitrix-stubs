<?php

namespace Bitrix\Translate;

abstract class ComponentBase extends \CBitrixComponent implements \Bitrix\Translate\IErrorable
{
    use \Bitrix\Translate\Error;
    const STATUS_SUCCESS = 'success';
    const STATUS_DENIED = 'denied';
    const STATUS_ERROR = 'error';
    const TEMPLATE_ERROR = 'error';
    /** @var string */
    protected $path;
    /** @var int Session tab counter. */
    protected $tabId = 0;
    /**
     * @return boolean
     */
    protected function checkModuleAvailability()
    {
    }
    /**
     * Checks if user has permission to view language file.
     * @param \CUser $user User to check permissions.
     * @return boolean
     */
    protected function hasUserPermissionView($user)
    {
    }
    /**
     * Checks if user has permission to edit language file.
     * @param \CUser $user User to check permissions.
     * @return boolean
     */
    protected function hasUserPermissionEdit($user)
    {
    }
    /**
     * Checks if user has permission to edit source language file.
     * @param \CUser $user User to check permissions.
     * @return boolean
     */
    protected function hasUserPermissionEditSource($user)
    {
    }
    /**
     * Checks if user has permission to view language file.
     * @return boolean
     */
    protected function checkPermissionView()
    {
    }
    /**
     * Checks if user has permission to edit language file.
     * @return boolean
     */
    protected function checkPermissionEdit()
    {
    }
    /**
     * Checks if user has permission to edit source language file.
     * @return boolean
     */
    protected function checkPermissionEditPhp()
    {
    }
    /**
     * @return void
     */
    protected function prepareParams()
    {
    }
    /**
     * @return string[]
     */
    protected function getLanguages()
    {
    }
    /**
     * Returns list of language names from the site settings.
     *
     * @param string[] $languageIds Languages list to get name.
     *
     * @return array
     */
    protected function getLanguagesTitle($languageIds)
    {
    }
    /**
     * Return languages compatible by their encoding.
     *
     * @return string[]
     */
    protected function getCompatibleLanguages()
    {
    }
    /**
     * @return string
     */
    protected function detectTabId()
    {
    }
    /**
     * @return string
     */
    protected function detectStartingPath(?string $path = '') : string
    {
    }
    /**
     * Returns component calling params by reference.
     * @return array
     */
    public function &getParams()
    {
    }
    /**
     * Returns component resulting array by reference.
     * @return array
     */
    public function &getResult()
    {
    }
    /**
     * @return \CUser
     */
    protected function getUser()
    {
    }
    /**
     * @return \CMain
     */
    protected function getApplication()
    {
    }
    /**
     * Returns whether this is an AJAX (XMLHttpRequest) request.
     * @return boolean
     */
    protected function isAjaxRequest()
    {
    }
    /**
     * Sends Json response to client.
     *
     * @param array|object|Main\Error $response Response to send.
     *
     * @throws Main\ArgumentException
     * @return void
     */
    protected function sendJsonResponse($response)
    {
    }
    /**
     * Drops saved options.
     * @param string $category Group option name.
     * @param string $nameMask Option name mask.
     * @return void
     */
    protected function clearSavedOptions($category, $nameMask)
    {
    }
    /**
     * Finds way to get back.
     *
     * @param string $path Path to analise.
     *
     * @return string
     */
    protected function detectPathBack($path)
    {
    }
    /**
     * Get data for chain links.
     *
     * @param string $path Path to analise.
     *
     * @return array
     */
    protected function generateChainLinks($path)
    {
    }
}