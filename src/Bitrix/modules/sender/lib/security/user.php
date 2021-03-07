<?php

namespace Bitrix\Sender\Security;

/**
 * Class User
 * @package Bitrix\Sender\Security
 */
class User
{
    /** @var integer|null $id User ID. */
    protected $id = null;
    /** @var \CAllUser $object User object. */
    protected $object;
    /** @var Access $access Access. */
    protected $access;
    /** @var static $instanceCurrentUser Instance. */
    protected static $instanceCurrentUser;
    /** @var static $instance Instance. */
    protected static $instance;
    /**
     * Get current user.
     *
     * @return static
     */
    public static function current()
    {
    }
    /**
     * Get user by ID.
     *
     * @param integer $id ID.
     * @return static
     */
    public static function get($id)
    {
    }
    /**
     * User constructor.
     *
     * @param integer|null $id ID.
     */
    public function __construct($id = null)
    {
    }
    /**
     * Get current user ID.
     *
     * @return integer|null
     */
    public function getId()
    {
    }
    /**
     * Return true if current user is admin.
     *
     * @return bool
     */
    public function isAdmin()
    {
    }
    /**
     * Return true if current user has access to one or more module pages.
     *
     * @return bool
     */
    public function hasAccess()
    {
    }
    /**
     * Return access instance.
     *
     * @return Access
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getAccess()
    {
    }
    /**
     * Return true if current user can view module pages.
     *
     * @return bool
     */
    public function canView()
    {
    }
    private function isBroadAccess()
    {
    }
    private function isModuleAccessibleOnPortal()
    {
    }
    /**
     * Return true if current user can edit on module pages.
     *
     * @return bool
     */
    public function canEdit()
    {
    }
    /**
     * Return true if current user is portal admin.
     *
     * @return bool
     */
    public function isPortalAdmin()
    {
    }
    /**
     * Return true if user accepted agreement.
     *
     * @return bool
     */
    public function isAgreementAccepted()
    {
    }
    /**
     * Return true if current user can edit php.
     *
     * @return bool
     */
    public function canEditPhp()
    {
    }
    /**
     * Return true if current user can use LPA.
     *
     * @return bool
     */
    public function canUseLpa()
    {
    }
    /**
     * Get USER object.
     *
     * @return \CAllUser|null
     */
    public function getObject()
    {
    }
    private function isCurrent()
    {
    }
}