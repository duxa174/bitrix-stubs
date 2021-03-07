<?php

class CLearnCacheOfLessonTreeComponent
{
    const OPTION_NAME = '~CacheOfLessonTreeComponentIsDirty';
    const OPTION_TS = '~CacheOfLessonTreeComponentTS';
    // timestamp of last ditry cache
    const CACHE_PATH = '/learning/LessonTreeComponent/';
    const TTL = 3600;
    public static function IsDirty()
    {
    }
    public static function MarkAsDirty()
    {
    }
    public static function MarkAsClean()
    {
    }
    public static function Purge()
    {
    }
    public static function GetData($courseId)
    {
    }
    protected static function GetDataWoCache($courseId)
    {
    }
}