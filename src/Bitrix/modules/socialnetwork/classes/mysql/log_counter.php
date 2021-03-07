<?php

class CSocNetLogCounter extends \CAllSocNetLogCounter
{
    const TYPE_LOG_ENTRY = 'L';
    const TYPE_LOG_COMMENT = 'LC';
    function Increment($log_id, $entity_type = \false, $entity_id = \false, $event_id = \false, $created_by_id = \false, $arOfEntities = \false, $arAdmin = \false, $transport = \false, $visible = "Y", $type = \CSocNetLogCounter::TYPE_LOG_ENTRY)
    {
    }
    function ClearByUser($user_id, $site_id = \SITE_ID, $code = "**", $page_size = 0, $page_last_date_1 = "")
    {
    }
    function dbIF($condition, $yes, $no)
    {
    }
    public static function dbWeeksAgo($iWeeks)
    {
    }
}