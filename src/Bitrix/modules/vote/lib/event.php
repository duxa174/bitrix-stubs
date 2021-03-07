<?php

namespace Bitrix\Vote;

/**
 * Class VoteEventTable
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> VOTE_ID int,
 * <li> VOTE_USER_ID int,
 * <li> DATE_VOTE datetime,
 * <li> STAT_SESSION_ID int,
 * <li> IP string(15),
 * <li> VALID string(1)
 * </ul>
 *
 */
class EventTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
}
/**
 * Class EventQuestionTable
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> EVENT_ID int,
 * <li> QUESTION_ID int,
 * </ul>
 *
 */
class EventQuestionTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
}
/**
 * Class EventAnswerTable
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> EVENT_QUESTION_ID int,
 * <li> ANSWER_ID int,
 * <li> MESSAGE text,
 * </ul>
 *
 */
class EventAnswerTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
}
class Event extends \Bitrix\Vote\Base\BaseObject
{
    private $vote;
    /**
     * EVENT_FIELD_BALLOT_TEMPLATE - is a template to catch voting
     * [#ID#][BALLOT][#QUESTION_ID#][#ANSWER_ID#][MESSAGE] - template for text
     */
    const EVENT_FIELD_NAME = "bx_vote_event";
    //
    const EVENT_FIELD_BALLOT_TEMPLATE = self::EVENT_FIELD_NAME . "[#ID#][BALLOT][#QUESTION_ID#]";
    // this is template for voting
    const EVENT_FIELD_MESSAGE_TEMPLATE = self::EVENT_FIELD_NAME . "[#ID#][MESSAGE][#QUESTION_ID#][#ANSWER_ID#]";
    // this is template for voting
    const EVENT_FIELD_EXTRAS_TEMPLATE = self::EVENT_FIELD_NAME . "[#ID#][EXTRAS][#ENTITY_ID#]";
    /** @var  ErrorCollection */
    protected $errorCollection;
    /**
     * Event constructor.
     * @param Vote $vote
     */
    function __construct(\Bitrix\Vote\Vote $vote)
    {
    }
    /**
     * @param int $voteId Vote Id.
     * @return void
     */
    public static function calculateStatistic($voteId)
    {
    }
    /**
     * @param int $voteId Vote Id.
     * @return void
     */
    public static function resetStatistic($voteId)
    {
    }
    /**
     * @param int $eventId Event ID.
     * @return boolean
     */
    public static function deleteEvent($eventId)
    {
    }
    /**
     * @param int $eventId Event ID.
     * @param string $valid Validation ("Y" || "N").
     * @return boolean
     */
    public static function setValid($eventId, $valid)
    {
    }
    public static function getFieldName($id, $questionId)
    {
    }
    public static function getMessageFieldName($id, $questionId, $answerId)
    {
    }
    public static function getExtrasFieldName($id, $name)
    {
    }
    public static function getDataFromRequest($id, array $request)
    {
    }
    /**
     * @param $data
     * @return array
     */
    public function check(array $ballot)
    {
    }
    public function add(array $eventFields, array $ballot, $setCounter = true)
    {
    }
}