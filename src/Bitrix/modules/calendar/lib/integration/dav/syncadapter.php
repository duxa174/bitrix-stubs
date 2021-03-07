<?php

namespace Bitrix\Calendar\Integration\Dav;

class SyncAdapter
{
    private static $sectionIndex = [];
    /**
     * Returns collection of sections for user or other entity.
     *
     * @param string $entityType entity type (example: 'user' for user's calendars).
     * @param int $entityId id of entity.
     * @param array $params additional params.
     * @return array list of calendar sections
     */
    public static function getSectionList($entityType, $entityId, $params = [])
    {
    }
    /**
     * Returns calendar events for given section.
     *
     * @param string $sectionId id of section (collection) to select events from.
     * @param array $params additional params.
     * @return array list of calendar events
     */
    public static function getEventList($sectionId = false, $params = [])
    {
    }
    /**
     * Returns calendar events.
     *
     * @param string $userId user id
     * @param array $params additional params.
     * @return array list of tasks prepared for viewing in calendar view
     */
    public static function getTaskList($userId, $params = [])
    {
    }
    /**
     * Deletes calendar event
     *
     * @param integer $eventId - id of the event.
     * @param array $params contains additional information.
     * @return true or false - result of the operation
     */
    public static function deleteEvent($eventId, $params = [])
    {
    }
}