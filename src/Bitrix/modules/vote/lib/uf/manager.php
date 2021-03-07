<?php

namespace Bitrix\Vote\Uf;

final class Manager
{
    /** @var  ErrorCollection */
    protected $errorCollection;
    protected $params;
    protected $additionalConnectorList = null;
    /** @var Attach[]  */
    protected $loadedAttachedObjects = array();
    protected static $instance = array();
    private $int = 0;
    /**
     * Constructor of UserFieldManager.
     * @param array $params
     */
    public function __construct(array $params)
    {
    }
    /**
    * Returns instance of Manager.
    * @param array $params Array (
    			[ID] => 29
    			[ENTITY_ID] => BLOG_POST
    			[FIELD_NAME] => UF_BLOG_POST_VOTE
    			[USER_TYPE_ID] => vote
    			[XML_ID] => UF_BLOG_POST_VOTE
    			[SORT] => 100
    			[MULTIPLE] => N
    			[MANDATORY] => N
    			[SHOW_FILTER] => N
    			[SHOW_IN_LIST] => Y
    			[EDIT_IN_LIST] => Y
    			[IS_SEARCHABLE] => N
    			[SETTINGS] => Array
    				(
    					[CHANNEL_ID] => 1
    					[UNIQUE] => 8
    					[UNIQUE_IP_DELAY] => Array
    						(
    							[DELAY] =>
    							[DELAY_TYPE] => S
    						)
    
    					[NOTIFY] => I
    				)
    
    			[EDIT_FORM_LABEL] => UF_BLOG_POST_VOTE
    			[LIST_COLUMN_LABEL] =>
    			[LIST_FILTER_LABEL] =>
    			[ERROR_MESSAGE] =>
    			[HELP_MESSAGE] =>
    			[USER_TYPE] => Array
    				(
    					[USER_TYPE_ID] => vote
    					[CLASS_NAME] => Bitrix\Vote\Uf\VoteUserType
    					[DESCRIPTION] => "Vote"
    					[BASE_TYPE] => int
    				)
    
    			[VALUE] => 27
    			[ENTITY_VALUE_ID] => 247)).
    * @return Manager
    */
    public static function getInstance(array $params)
    {
    }
    /**
     * Returns attached object by id.
     * @param int $id Id of attached object.
     * @return Attach
     */
    public function loadFromAttachId($id)
    {
    }
    /**
     * Returns vote object by id.
     * @param int $id Id of vote.
     * @return Attach
     */
    public function loadFromVoteId($id)
    {
    }
    /**
     * @return \Bitrix\Vote\Attach
     */
    public function loadEmptyObject()
    {
    }
    /**
     * @return Attach[]
     */
    public function loadFromEntity()
    {
    }
    /**
     * Checks attitude attached object to entity.
     * @param Attach $attachedObject Attached object.
     * @param string $entityType Entity type (ex. blog_post).
     * @param int $entityId Id of entity.
     * @return bool
     */
    public function belongsToEntity(\Bitrix\Vote\Attach $attachedObject, $entityType, $entityId)
    {
    }
    /**
     * Gets data which describes specific connector by entity type.
     * @param string $entityType Entity type (ex. sonet_comment).
     * @return array|null Array with two elements: connector class and module.
     */
    public function getConnectorDataByEntityType($entityType)
    {
    }
    /**
     * Returns full list of available connectors for attached objects.
     *
     * @return array
     */
    public function getConnectors()
    {
    }
    private function getDefaultConnectors()
    {
    }
    private function getAdditionalConnectors()
    {
    }
    private function getAdditionalConnector($entityType)
    {
    }
    private function buildAdditionalConnectorList()
    {
    }
    /**
     * Shows component to edit vote.
     * @param array &$params Component parameters.
     * @param array &$result Component results.
     * @param null $component Component.
     * @return void
     */
    public function showEdit(&$params, &$result, $component = null)
    {
    }
    /**
     * Shows component to participate in vote
     * @param array &$params Component parameters.
     * @param array &$result Component results.
     * @param null $component Component.
     * @return void
     */
    public function showView(&$params, &$result, $component = null)
    {
    }
    /**
     * Getting array of errors.
     * @return array
     */
    public function getErrors()
    {
    }
}