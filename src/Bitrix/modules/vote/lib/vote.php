<?php

namespace Bitrix\Vote;

/**
 * Class VoteTable
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CHANNEL_ID int,
 * <li> C_SORT int,
 * <li> ACTIVE bool mandatory default "Y",
 * <li> ANONYMITY int,
 * <li> NOTIFY bool mandatory default "N",
 * <li> AUTHOR_ID int,
 * <li> AUTHOR reference,
 * <li> TIMESTAMP_X datetime,
 * <li> DATE_START datetime,
 * <li> DATE_END datetime,
 * <li> URL string(255) NULL,
 * <li> COUNTER int,
 * <li> TITLE string(255),
 * <li> DESCRIPTION text,
 * <li> DESCRIPTION_TYPE string(4),
 * <li> IMAGE_ID int,
 * <li> EVENT1 string(255),
 * <li> EVENT2 string(255),
 * <li> EVENT3 string(255),
 * <li> UNIQUE_TYPE int (coded in binary system:
 * UNIQUE_TYPE_SESSION - 1 (00001)
 * UNIQUE_TYPE_COOKIE - 2 (00010)
 * UNIQUE_TYPE_IP - 4 (00100)
 * UNIQUE_TYPE_USER_ID - 8 (01000)
 * UNIQUE_TYPE_USER_ID_NEW - 16 (10000)
 * UNIQUE_TYPE = (UNIQUE_TYPE_SESSION | UNIQUE_TYPE_COOKIE | UNIQUE_TYPE_IP | UNIQUE_TYPE_USER_ID | UNIQUE_TYPE_USER_ID_NEW)
 * <li> KEEP_IP_SEC int,
 * <li> OPTIONS int,
 * </ul>
 *
 */
class VoteTable extends \Bitrix\Main\Entity\DataManager
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
     * @return array
     * @throws ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getMap()
    {
    }
    /**
     * @param mixed $value   Value to check.
     * @param array $primary Has no use in this function.
     * @param array $row     Has no use in this function.
     * @param DateTimeField $field   Field metadata.
     * @return FieldError|bool
     */
    public static function validateActivityDate($value, $primary, $row, $field)
    {
    }
    /**
     * @param \Bitrix\Main\ORM\Event $event
     * @throws \Bitrix\Main\ObjectException
     * @return \Bitrix\Main\ORM\EventResult
     */
    public static function onBeforeAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @param \Bitrix\Main\ORM\Event $event
     * @return void
     */
    public static function onAfterAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @param \Bitrix\Main\ORM\Event $event
     * @return \Bitrix\Main\ORM\EventResult|void
     * @throws \Bitrix\Main\ObjectException
     */
    public static function onBeforeUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @param \Bitrix\Main\ORM\Event $event
     * @return void
     */
    public static function onAfterUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @param \Bitrix\Main\ORM\Event $event
     * @param \Bitrix\Main\ORM\EventResult $result
     * @return \Bitrix\Main\ORM\EventResult
     * @throws \Bitrix\Main\ObjectException
     */
    private static function modifyData(\Bitrix\Main\ORM\Event $event, \Bitrix\Main\ORM\EventResult $result)
    {
    }
    /**
     * @param Result $result
     * @param mixed $primary
     * @param array $data
     * @throws ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function checkFields(\Bitrix\Main\ORM\Data\Result $result, $primary, array $data)
    {
    }
    /**
     * @param array $id Vote IDs.
     * @param mixed $increment True - increment, false - decrement, integer - exact value.
     * @return void
     */
    public static function setCounter(array $id, $increment = true)
    {
    }
}
class Vote extends \Bitrix\Vote\Base\BaseObject implements \ArrayAccess
{
    protected $vote = array();
    protected $questions = array();
    protected $channel = null;
    /** @var Result[] */
    protected static $canVoteStorage = [];
    public static $storage = array();
    public static $statStorage = array();
    public function __construct($id)
    {
    }
    public function init()
    {
    }
    /**
     * @param integer $id Vote ID.
     * @return array|null
     */
    public static function getData($id)
    {
    }
    /**
    * @param int $voteId Vote ID.
    * @param array &$data Array(
    			"CHANNEL_ID" => 5,
    			"AUTHOR_ID" => 1,
    			"DATE_START" => ...,
    			"DATE_END" => ...,
    			"TITLE" => "ABC...",
    			"ACTIVE" => "Y",
    			"URL" => "http://",
    			"NOTIFY" => "Y" || "N" || "I",
    			"UNIQUE_TYPE" => security context,
    			"DELAY" => 150, //seconds
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
    				)
    			);.
    * @return bool
    * @throws ArgumentException
    */
    public static function checkData(array &$data, $voteId = 0)
    {
    }
    /**
     * @param integer $voteId Vote ID, can be 0.
     * @param array $data Look at checkData.
     * @return int
     * @throws ArgumentException
     */
    public static function saveData($voteId, array $data)
    {
    }
    /**
     * Sends notifications to users.
     * @param array $event Array("ID" => 1, "VOTE_USER_ID" => 45);.
     * @param array $vote Array(ID => 1, QUESTIONS => array("ID" => 2, ANSWERS => array()));.
     * @param string $type Can be "im" || "mail".
     * @return bool
     */
    public function sendVotingMessage(array $event, $vote, $type = "im")
    {
    }
    /**
     * Complete vote array by data from DB.
     * @return void
     */
    public function fillStatistic()
    {
    }
    public function getStatistic()
    {
    }
    /**
     * @return array|null
     */
    public function getChannel()
    {
    }
    /**
     * @param string $key The name if characteristic that you want to know.
     * @return mixed
     */
    public function get($key)
    {
    }
    /**
     * Returns question array.
     * @param int $id
     * @return array|null
     */
    public function getQuestion(int $id)
    {
    }
    /**
     * @return array
     */
    public function getQuestions()
    {
    }
    /**
     * Prolongs the time of voting for a year
     * @return void
     */
    public function resume()
    {
    }
    /**
     * Sets the finish time for voting by current moment
     * @return void
     */
    public function stop()
    {
    }
    /**
     * Deletes Vote by its id.
     * @param integer $id Vote ID.
     * @return bool
     */
    public static function delete($id)
    {
    }
    /**
     * Clears cache
     * @return void
     */
    public function clearCache()
    {
    }
    /**
     * Clears vote events cache
     * @return void
     */
    private function clearVotingCache()
    {
    }
    /**
     * Exports data of voting into excel file
     * @param string $type html|xls|csv
     * @return void
     */
    public function exportExcel($type = "html")
    {
    }
    private function getDataFromRequest(array $request)
    {
    }
    /**
     * Voting for vote  from current user $USER.
     * @param array $request Old variant Array("
     * 							vote_checkbox_".$questionId => array(1,2,3,...),
     * 							"vote_multiselect_".$questionId => array(1,2,3,...),
     * 							"vote_dropdown_".$questionId => 12 || "12",
     * 							"vote_radio_".$questionId => 12 || "12",
     * 							"vote_field_".$answerId => "12").
     * 	New variant is
     * [
     *  EXTRA => [HIDDEN => N],
     *  871 => [345 => (Does not matter || text from field)],
     *  QUESTION_ID => [ANSWER_ID => (Y || text from field)],
     * ]
     * @param array $params
     * @return bool
     * @throws AccessDeniedException
     */
    public function voteFor(array $request, $params = [])
    {
    }
    public function registerEvent(array $data, array $params, \Bitrix\Vote\User $user)
    {
    }
    /**
     * Checks if current user voted for this vote.
     * @param int|User $userId User ID.
     * @return bool|int
     */
    public function isVotedFor($userId)
    {
    }
    /**
     * Checks rights to read current attached object.
     * @param int $userId Id of user.
     * @return bool
     */
    public function canRead($userId)
    {
    }
    /**
     * Checks rights to update current attached object.
     * @param int $userId Id of user.
     * @return bool
     */
    public function canEdit($userId)
    {
    }
    public function canParticipate($userId)
    {
    }
    /**
     * @param \Bitrix\Vote\User|integer $user
     * @return \Bitrix\Main\Result
     * @throws ArgumentException
     * @throws \Bitrix\Main\ObjectException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function canVote($user)
    {
    }
    public function canRevote($user)
    {
    }
    public function canReadResult($user)
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
     * @throws \Bitrix\Main\NotSupportedException
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Is not supported.
     * @param string $offset Key for vote or attach data array.
     * @return void
     * @throws \Bitrix\Main\NotSupportedException
     */
    public function offsetUnset($offset)
    {
    }
}