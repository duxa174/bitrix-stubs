<?php

class CAllSaleOrderUserProps
{
    /*
    public static function TranslateLocationPropertyValues($personTypeId, &$orderProps)
    {
    	if(CSaleLocation::isLocationProMigrated())
    	{
    		// location ID to CODE
    		$dbOrderProps = CSaleOrderProps::GetList(
    			array("SORT" => "ASC"),
    			array(
    				'PERSON_TYPE_ID' => $personTypeId
    			),
    			false,
    			false,
    			array("ID", "NAME", "TYPE", "IS_LOCATION", "IS_LOCATION4TAX", "IS_PROFILE_NAME", "IS_PAYER", "IS_EMAIL", "REQUIED", "SORT", "IS_ZIP", "CODE", "MULTIPLE")
    		);
    		while($item = $dbOrderProps->fetch())
    		{
    			if($item['TYPE'] == 'LOCATION' && strlen($orderProps[$item['ID']]))
    				$orderProps[$item['ID']] = CSaleLocation::getLocationCodeByID($orderProps[$item['ID']]);
    		}
    	}
    }
    */
    /**
     * @param $userId
     * @param $profileId
     * @param $profileName
     * @param $personTypeId
     * @param $orderProps
     * @param $arErrors
     *
     * @return bool|int
     */
    static function DoSaveUserProfile($userId, $profileId, $profileName, $personTypeId, $orderProps, &$arErrors)
    {
    }
    public static function DoLoadProfiles($userId, $personTypeId = \null)
    {
    }
    function GetByID($ID)
    {
    }
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function Update($ID, $arFields)
    {
    }
    function ClearEmpty()
    {
    }
    function Delete($ID)
    {
    }
    function OnUserDelete($ID)
    {
    }
}