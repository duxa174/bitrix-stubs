<?php

/***************************************************************************
									Функции
***************************************************************************/
function CheckFilter()
{
}
/*function Support_GetUserInfo($USER_ID, &$login, &$name)
{
	static $arrUsers;
	$login = "";
	$name = "";
	if (intval($USER_ID)>0)
	{
		if (is_array($arrUsers) && in_array($USER_ID, array_keys($arrUsers)))
		{
			$login = $arrUsers[$USER_ID]["LOGIN"];
			$name = $arrUsers[$USER_ID]["NAME"];
		}
		else
		{
			$rsUser = CUser::GetByID($USER_ID);
			$arUser = $rsUser->Fetch();
			$login = htmlspecialcharsbx($arUser["LOGIN"]);
			$name = htmlspecialcharsbx($arUser["NAME"]." ".$arUser["LAST_NAME"]);
			$arrUsers[$USER_ID] = array("LOGIN" => $login, "NAME" => $name);
		}
	}
}*/
function Support_GetDictionaryInfo($DID, $TYPE, &$TICKET_DICTIONARY, &$name, &$desc, &$sid)
{
}
function Support_GetSiteInfo($SITE_ID)
{
}
function __GetDropDown($TYPE, &$TICKET_DICTIONARY)
{
}
function Support_GetSLAInfo($ID, &$name, &$description, $safe_for_html = \true)
{
}