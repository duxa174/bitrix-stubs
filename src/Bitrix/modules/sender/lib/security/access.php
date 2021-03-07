<?php

namespace Bitrix\Sender\Security;

/**
 * Class Access
 *
 * @package Bitrix\Sender\Security
 */
class Access
{
    private static $list;
    /** @var  User $user User. */
    protected $user;
    /** @var array $permissions Permissions. */
    protected $permissions;
    private static $instance;
    protected const ACTION_VIEW = 'VIEW';
    /**
     * Get Access instance for current user.
     *
     * @deprecated
     * @return static
     * @throws ArgumentException
     */
    public static function current()
    {
    }
    /**
     * PageAccess constructor.
     *
     * @param User $user User instance.
     *
     * @throws ArgumentException
     */
    private function __construct(\Bitrix\Sender\Security\User $user)
    {
    }
    /**
     * singleton for DB requests optimization
     *
     * @param null $user
     *
     * @return Access
     * @throws ArgumentException
     */
    public static function getInstance($user = null)
    {
    }
    /**
     * Return true if can view anything.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canViewAnything()
    {
    }
    /**
     * Return true if can modify settings.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canModifySettings()
    {
    }
    /**
     * Return true if can modify template.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canModifyTemplates()
    {
    }
    /**
     * Return true if can pause start or stop Mailing
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canPauseStartStopLetter()
    {
    }
    /**
     * Return true if can pause start or stop ADS
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canPauseStartStopAds()
    {
    }
    /**
     * Return true if can pause start or stop RC
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canPauseStartStopRc()
    {
    }
    /**
     * Return true if can view letters.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canViewLetters()
    {
    }
    /**
     * Return true if can view letters.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canViewTemplates()
    {
    }
    /**
     * Return true if can view letters.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canViewClientList()
    {
    }
    /**
     * Return true if can modify letters.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canModifyLetters()
    {
    }
    /**
     * Return true if can view letters.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canViewAds()
    {
    }
    /**
     * Return true if can modify letters.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canModifyAds()
    {
    }
    /**
     * Return true if can view return customer tools.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canViewRc()
    {
    }
    /**
     * Return true if can view return customer tools.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canViewToloka()
    {
    }
    /**
     * Return true if can modify return customer tools.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canModifyRc()
    {
    }
    /**
     * Return true if can view segments.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canViewSegments()
    {
    }
    /**
     * Return true if can modify segments.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canModifySegments()
    {
    }
    /**
     * Return true if can view blacklist.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canViewStart()
    {
    }
    /**
     * Return true if can view blacklist.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canViewBlacklist()
    {
    }
    /**
     * Return true if can modify blacklist.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canModifyBlacklist()
    {
    }
    /**
     * Return true if can view abuses.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canViewAbuses()
    {
    }
    /**
     * Return true if can modify abuses.
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canModifyAbuses()
    {
    }
    /**
     * Returns true if user can view specified entity.
     * @param string $entityCode
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canView($entityCode)
    {
    }
    /**
     * Returns true if user can modify specified entity.
     * @param string $entityCode
     *
     * @return bool
     * @throws ArgumentException
     */
    public function canModify($entityCode)
    {
    }
    /**
     * Returns true if user can perform specified action on the entity.
     * @param string $entityCode Code of the entity.
     * @param string $actionCode Code of the action.
     * @param string $minPerm Code of minimal permission.
     * @return bool
     * @throws ArgumentException
     */
    public function canPerform($entityCode, $actionCode, $minPerm = null)
    {
    }
    private static function getSectionAndAction($action)
    {
    }
    /**
     * @param \Bitrix\Main\Event $event
     *
     * @return mixed
     * @throws ArgumentException
     */
    public static function handleEvent(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param $eventName
     * @param array $filter
     */
    public static function registerEvent($eventName, array $filter = [])
    {
    }
}