<?php

namespace Bitrix\Im\Call\Integration;

class Zoom
{
    private const CONFERENCE_INSTANT_TYPE = 1;
    private const CONFERENCE_SCHEDULED_TYPE = 2;
    private const DEFAULT_DURATION_MINUTES = "30";
    private const PERSONAL_CHAT = 'dialog';
    private const GROUP_CHAT = 'chat';
    private $accessToken;
    private $userId;
    private $chatId;
    private $chatType;
    private $zoomChatName;
    private $zoomSocServ;
    /**
     * Zoom constructor.
     *
     * @param int $userId
     * @param string $chatId
     * @throws LoaderException
     */
    public function __construct(int $userId, string $chatId)
    {
    }
    /**
     * Checks if zoom is active social service.
     *
     * @return bool
     * @throws LoaderException
     */
    public static function isActive() : bool
    {
    }
    /**
     * Checks if zoom is connected to user profile.
     *
     * @param $userId
     * @return bool
     * @throws ArgumentException
     * @throws LoaderException
     * @throws ObjectPropertyException
     * @throws SystemException
     */
    public static function isConnected($userId) : bool
    {
    }
    /**
     * Checks if Zoom integration is available for this portal.
     *
     * @return bool
     * @throws LoaderException
     */
    public static function isAvailable() : bool
    {
    }
    /**
     * Gets zoom access token.
     *
     * @return bool|mixed
     * @throws LoaderException
     */
    public function getAccessToken()
    {
    }
    /**
     * Gets URL to join Zoom conference by making request to Zoom, or getting it from DB (if it is not expired).
     *
     * @return string|null
     */
    public function getImChatConferenceUrl() : ?string
    {
    }
    private function getExistedChatConference() : ?array
    {
    }
    private function requestNewChatConference() : \Bitrix\Main\Result
    {
    }
    /**
     * Gets Zoom conference information.
     *
     * @param int $confId External conference id.
     * @return array|null
     */
    public function requestConferenceById(int $confId) : ?array
    {
    }
    private function isConferenceExpired(array $confData) : bool
    {
    }
    /**
     * Gets array of a message fields for IM to post a rich message with conference URL.
     *
     * @param string $chat Chat id.
     * @param string $link URL to Zoom conference.
     * @param integer $userId User Id who sends the message (private chat).
     * @return array
     * @throws ArgumentException
     * @throws LoaderException
     * @throws ObjectPropertyException
     * @throws SystemException
     */
    public function getRichMessageFields($chat, string $link, int $userId) : array
    {
    }
    private function prepareZoomChatName($chatId) : string
    {
    }
}