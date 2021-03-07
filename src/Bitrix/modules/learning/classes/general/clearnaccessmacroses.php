<?php

class CLearnAccessMacroses
{
    public static function CanUserViewLessonAsPublic($arParams, $allowAccessViaLearningGroups = \true)
    {
    }
    /**
     * If $arParams['user_id'] not set, or set to -1 => $USER->GetID() will be used
     */
    public static function CanUserAddLessonWithoutParentLesson($arParams = array())
    {
    }
    /**
     * If $arParams['user_id'] not set, or set to -1 => $USER->GetID() will be used
     * $arParams['parent_lesson_id'] must be set.
     */
    public static function CanUserAddLessonToParentLesson($arParams)
    {
    }
    public static function CanUserEditLesson($arParams)
    {
    }
    public static function CanUserRemoveLesson($arParams)
    {
    }
    public static function CanUserViewLessonContent($arParams, $allowAccessViaLearningGroups = \true)
    {
    }
    public static function CanUserViewLessonRelations($arParams)
    {
    }
    public static function CanUserPerformAtLeastOneRelationAction($arParams)
    {
    }
    public static function CanUserEditLessonRights($arParams)
    {
    }
    public static function CanUserViewLessonRights($arParams)
    {
    }
    /**
     * Parse params throughs CLearnSharedArgManager::StaticParser(),
     * but includes shared field 'user_id' and automatically replace
     * user_id === -1 to user_id = $USER->GetID();
     */
    protected static function ParseParamsWithUser($arParams, $arParserOptions)
    {
    }
    protected static function GetCurrentUserId()
    {
    }
    public static function getActiveLearningGroupsPeriod($courseLessonId, $userId)
    {
    }
    public static function getActiveLearningChaptersPeriod($courseLessonId, $userId)
    {
    }
    public static function CanViewAdminMenu()
    {
    }
}