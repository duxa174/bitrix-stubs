<?php

namespace Bitrix\Sender\Internals\CommonAjax;

/**
 * Class Checker
 * @package Bitrix\Sender\Internals\CommonAjax
 */
class Checker
{
    /**
     * Get read permission checker.
     *
     * @return array
     */
    public static function getReadPermissionChecker()
    {
    }
    /**
     * On read permission check.
     *
     * @param Result $result Result.
     * @return void
     */
    public static function onReadPermissionCheck(\Bitrix\Main\Result $result)
    {
    }
    /**
     * Get write permission checker.
     *
     * @return array
     */
    public static function getWritePermissionChecker()
    {
    }
    /**
     * On write permission check.
     *
     * @param Result $result Result.
     * @return void
     */
    public static function onWritePermissionCheck(\Bitrix\Main\Result $result)
    {
    }
    /**
     * Get permission checker for viewing Letter.
     *
     * @return callable
     */
    public static function getViewLetterPermissionChecker()
    {
    }
    /**
     * Get permission checker for modifying Letter.
     *
     * @return callable
     */
    public static function getModifyLetterPermissionChecker()
    {
    }
    /**
     * Get permission checker for modifying Abuse.
     *
     * @return callable
     */
    public static function getModifyAbusePermissionChecker()
    {
    }
    /**
     * Get permission checker for viewing Segment.
     *
     * @return callable
     */
    public static function getViewSegmentPermissionChecker()
    {
    }
    /**
     * Get permission checker for selecting Segment.
     *
     * @return callable
     */
    public static function getSelectSegmentPermissionChecker()
    {
    }
    /**
     * Get permission checker for modifying Segment.
     *
     * @return callable
     */
    public static function getModifySegmentPermissionChecker()
    {
    }
    /**
     * Get permission checker for viewing RC.
     *
     * @return callable
     */
    public static function getViewRcPermissionChecker()
    {
    }
    /**
     * Get permission checker for modifying RC.
     *
     * @return callable
     */
    public static function getModifyRcPermissionChecker()
    {
    }
    /**
     * Get permission checker for viewing RC.
     *
     * @return callable
     */
    public static function getViewBlacklistPermissionChecker()
    {
    }
    /**
     * Get permission checker for modifying RC.
     *
     * @return callable
     */
    public static function getModifyBlacklistPermissionChecker()
    {
    }
    /**
     * Get permission checker for viewing ad.
     *
     * @return callable
     */
    public static function getViewAdPermissionChecker()
    {
    }
    /**
     * Get permission checker for modifying ad.
     *
     * @return callable
     */
    public static function getModifyAdPermissionChecker()
    {
    }
    /**
     * Get permission checker for viewing recipients.
     *
     * @return callable
     */
    public static function getViewRecipientsPermissionChecker()
    {
    }
    /**
     * Get permission checker for modifying recipients.
     *
     * @return callable
     */
    public static function getModifyRecipientsPermissionChecker()
    {
    }
    /**
     * Get permission checker for modifying settings.
     *
     * @return callable
     */
    public static function getModifySettingsPermissionChecker()
    {
    }
    /**
     *
     * @return callable
     */
    public static function getPauseStopStartLetterPermissionChecker()
    {
    }
    /**
     *
     * @return callable
     */
    public static function getPauseStopStartAdsPermissionChecker()
    {
    }
    /**
     *
     * @return callable
     */
    public static function getPauseStopStartRcPermissionChecker()
    {
    }
    /**
     *
     * @return callable
     */
    public static function getModifyTemplatePermissionChecker()
    {
    }
}