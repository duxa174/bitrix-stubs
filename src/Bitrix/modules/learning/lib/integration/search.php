<?php

namespace Bitrix\Learning\Integration;

class Search
{
    /**
     * Makes a search index for the lesson.
     *
     * @param int $lessonId - Lesson Id.
     *
     * @throws \Bitrix\Main\LoaderException
     * @throws \LearnException
     *
     * @return void
     */
    public static function indexLesson($lessonId)
    {
    }
    /**
     * Re-indexes all lessons
     *
     * @param array $nextStep - Next step settings.
     * @param \CSearchCallback $callbackObject - Search callback object.
     * @param string $callbackMethod - Search callback method name.
     *
     * @return array|bool|string
     * @throws \LearnException
     */
    public static function handleReindex($nextStep = [], $callbackObject = null, $callbackMethod = "")
    {
    }
    private static function getLessonCourseId($lessonId)
    {
    }
    private static function getIndexItems($lessonId)
    {
    }
    private static function getCoursePaths($entityId, $entityType, $courseId)
    {
    }
    private static function getSitePaths()
    {
    }
}