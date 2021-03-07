<?php

class CSPListsClient extends \CSOAPClient
{
    protected $bInit = \false;
    protected $RESPONSE;
    protected $arConnectionParams = array();
    protected $ATTACHMENTS_PATH = '/upload/sharepoint';
    /* public section */
    public function __construct($arParams)
    {
    }
    public function SetConnectionParams($arParams)
    {
    }
    public function Call($method, $arParams = array())
    {
    }
    /* ws methods functions */
    public function GetListCollection()
    {
    }
    protected function _GetByID_query($XML_ID)
    {
    }
    public function GetByID($listName, $XML_ID)
    {
    }
    public function GetList($listName)
    {
    }
    /*
    	Paging work algorithm:
    
    	1. No changeToken
    	1.1. Send Query w/o changeToken (TOKEN) and with rowLimit (NUM_ROWS);
    	1.2. Recieve Changes section with LastChangeToken (TOKEN), first page of data (DATA) and ListItemCollectionPositionNext (PAGING) param. WARNING! Now's the only chance to remember LastChangeToken - it won't be available during pages navigation
    	1.3. Send another request w/o changeToken (TOKEN) and with rowLimit (NUM_ROWS) and attached queryOptions element with ListItemCollectionPositionNext (PAGING) param taken from previous query
    	1.4. Recieve more rows with new ListItemCollectionPositionNext (PAGING) value
    	1.5. Continue from 1.3 till data is over - no ListItemCollectionPositionNext param recieved
    
    	2. We have changeToken
    	1.1. Send Query with changeToken (TOKEN) and rowLimit (NUM_ROWS)
    	1.2. Recieve rows and Changes section with new LastChangeToken (TOKEN)
    	1.3. Continue to 1.1. with new TOKEN till data is over
    	1.4. Final query will result empty data and unchanged TOKEN;
    
    	WARNING! Don't event try to analyze and change TOKEN and PAGING values! They SHOULD be unchanged for further queries.
    
    	Input:
    		listName - id of a list (ex. {9C00647C-836C-485B-A025-0663F6EE972A})
    		arParams - array(
    			'TOKEN' - token to set timing start of a list
    			'PAGING' - token to set paging
    			'NUM_ROWS' - number of a rows per page
    			'FIELDS' - array with a list of a field names needed
    		)
    
    	Output: array(
    		'MORE_ROWS' => {true|false} - flag "is there more data available"
    		'TOKEN' => string that chould be used for further queries (or for next page query, if it's not a first query)
    		'PAGING' => string that chould be used for next page query (if it's the query w/o TOKEN)
    		'COUNT' => recieved data rows count
    		'DATA' => array of data rows ('ows_' prefix is cutted from attrubute names)
    	)
    */
    public function GetListItemChangesSinceToken($listName, $arParams = array())
    {
    }
    public function GetAttachmentCollection($listName, $arParams)
    {
    }
    public function UpdateListItems($listName, $arChanges)
    {
    }
    public function LoadFile($listName, $arParams)
    {
    }
    /* getters */
    public function GetConnectionParams()
    {
    }
    public function GetResponseObject()
    {
    }
    /* protected section */
    protected function __initialize()
    {
    }
    /* override these methods to add custom processing for method results */
    protected function GetListCollectionProcessResult($RESULT)
    {
    }
    protected function GetListProcessResult($RESULT)
    {
    }
    protected function GetListItemChangesSinceTokenProcessResult($RESULT)
    {
    }
    protected function GetAttachmentCollectionProcessResult($RESULT)
    {
    }
    protected function GetByIDProcessResult($RESULT)
    {
    }
    protected function ConvertRows($DATA_NODE)
    {
    }
}