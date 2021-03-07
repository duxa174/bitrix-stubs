<?php

namespace Bitrix\Vote;

/**
 * Class AttachTable
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> OBJECT_ID int,
 * <li> MODULE_ID string(32),
 * <li> ENTITY_TYPE string(100),
 * <li> ENTITY_ID int,
 * <li> CREATE_TIME datetime,
 * <li> CREATED_BY int
 * </ul>
 *
 */
class AttachTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * @param array $parameters Array in terms ORM.
     * @return \Bitrix\Vote\DBResult
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * Removes group of attaches
     * @param array $filter Array in terms ORM.
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function deleteByFilter(array $filter)
    {
    }
}
class Attach extends \Bitrix\Vote\Base\BaseObject implements \ArrayAccess
{
    /** @var array */
    protected $attach;
    /** @var Vote */
    protected $vote;
    /** @var array */
    protected $connector;
    /** @var Channel */
    protected $channel;
    public static $storage = array();
    protected static $loaded = array("attachIds" => array(), "voteIds" => array(), "entities" => array());
    /**
     * @throws ArgumentException
     * @throws ArgumentNullException
     */
    function init()
    {
    }
    /**
     * @param int|Vote $vote
     */
    public function setVote($vote)
    {
    }
    /**
     * @param integer $id
     * @throws ArgumentNullException
     */
    public function setStorage($id)
    {
    }
    /**
     * Return array where first key is attach array, second - vote array
     * @param integer $id Attach ID.
     * @return array|null
     */
    public static function getData($id)
    {
    }
    /**
     * Returns array of attaches linked to special entity
     * @param array $id Array("ENTITY_TYPE" => "blog", "ENTITY_ID" => 89);.
     * @return mixed
     */
    public static function getDataByEntity(array $id)
    {
    }
    /**
     * Checks rights to read current attached object.
     * @param int $userId Id of user.
     * @return bool
     * @throws SystemException
     */
    public function canRead($userId)
    {
    }
    /**
     * Checks rights for voting.
     * @param int $userId Id of user.
     * @return bool
     */
    public function canParticipate($userId)
    {
    }
    public function canVote($userId)
    {
    }
    public function canRevote($userId)
    {
    }
    public function canReadResult($userId)
    {
    }
    /**
     * Checks rights to update current attached object.
     * @param int $userId Id of user.
     * @return bool
     * @throws SystemException
     */
    public function canEdit($userId)
    {
    }
    /**
     * Returns connector instance for attached object.
     * @return Connector|null
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\SystemException
     */
    public function getConnector()
    {
    }
    /**
     * @return Channel
     */
    public function getStorage()
    {
    }
    /**
     * Returns attachment id.
     * @return int|null
     */
    public function getAttachId()
    {
    }
    /**
     * Returns vote id.
     * @return int|null
     */
    public function getVoteId()
    {
    }
    /**
     * Returns module id.
     * @return string
     */
    public function getModuleId()
    {
    }
    /**
     * Returns entity type.
     * @return string
     */
    public function getEntityType()
    {
    }
    /**
     * Returns entity id.
     * @return string
     */
    public function getEntityId()
    {
    }
    /**
     * @return void
     */
    public function fillStatistic()
    {
    }
    /**
     * Deletes attach and vote in some cases.
     * @return boolean;
     */
    public function delete()
    {
    }
    /**
    * Checks array for correct data/
    * @param array &$data Array(
    	"TITLE" => "ABC...",
    	"QUESTIONS" => array(
    	1 => array(
    	"ID" => 0,
    	"QUESTION" => "Question text",
    	"QUESTION_TYPE" => "text"||"html",
    	"ANSWERS" => array(
    	array(
    	"ID" => 0,
    	"MESSAGE" => "Answer text",
    	"MESSAGE_TYPE" => "text"||"html",
    	"FIELD_TYPE" => 0||1||2||3||4||
    	)
    	)
    	);.
    * @return void
    * @throws AccessDeniedException
    */
    public function checkData(array &$data)
    {
    }
    /**
    * Update vote data.
    * @param array $data Array(
    	"TITLE" => "ABC...",
    	"QUESTIONS" => array(
    	1 => array(
    	"ID" => 0,
    	"QUESTION" => "Question text",
    	"QUESTION_TYPE" => "text"||"html",
    	"ANSWERS" => array(
    	array(
    	"ID" => 0,
    	"MESSAGE" => "Answer text",
    	"MESSAGE_TYPE" => "text"||"html",
    	"FIELD_TYPE" => 0||1||2||3||4||
    	)
    	)
    	);.
    * @param int $createdBy User ID.
    * @return bool
    */
    public function save($data, $createdBy = 0)
    {
    }
    /**
     * Voting for vote  from current user $USER.
     * @param array $request Array("
     * 							vote_checkbox_".$questionId => array(1,2,3,...),
     * 							"vote_multiselect_".$questionId => array(1,2,3,...),
     * 							"vote_dropdown_".$questionId => 12 || "12",
     * 							"vote_radio_".$questionId => 12 || "12",
     * 							"vote_field_".$answerId => "12").
     * @return bool
     * @throws InvalidOperationException
     */
    public function voteFor(array $request)
    {
    }
    /**
     * Exports data of voting into excel file
     * @return void
     * @throws InvalidOperationException
     */
    public function exportExcel()
    {
    }
    /**
     * Checks if current user voted for this vote.
     * @param int $userId User ID.
     * @return bool|int
     */
    public function isVotedFor($userId)
    {
    }
    /**
     * Prolongs voting period.
     * @return bool
     * @throws InvalidOperationException
     */
    public function resume()
    {
    }
    /**
     * Finishes voting period.
     * @return bool
     * @throws InvalidOperationException
     */
    public function stop()
    {
    }
    /**
     * @param string $offset Key for vote or attach data array.
     * @return bool
     */
    public function offsetExists($offset)
    {
    }
    /**
     * @param string $offset Key for vote or attach data array.
     * @return array|mixed|null
     */
    public function offsetGet($offset)
    {
    }
    /**
     * Is not supported.
     * @param string $offset Key for vote or attach data array.
     * @param mixed $value Value for vote or attach data array.
     * @return void
     * @throws NotSupportedException
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Is not supported.
     * @param string $offset Key for vote or attach data array.
     * @return void
     * @throws NotSupportedException
     */
    public function offsetUnset($offset)
    {
    }
    /**
     * @param integer $id Entity ID.
     * @param bool $shouldBeNewIfIdIsNull
     * @return BaseObject
     */
    public static function loadFromId($id, $shouldBeNewIfIdIsNull = false)
    {
    }
}