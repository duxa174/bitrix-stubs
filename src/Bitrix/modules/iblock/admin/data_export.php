<?php

/////////////////////////////////////////////////////////////////////
function GetValueByCodeTmp($code)
{
}
/*
This function takes an array (arTuple) which is mix of scalar values and arrays
and return "rectangular" array of arrays.
For example:
array(1, array(1, 2), 3, arrays(4, 5))
will be transformed as
array(
	array(1, 1, 3, 4),
	array(1, 1, 3, 5),
	array(1, 2, 3, 4),
	array(1, 2, 3, 5),
)
*/
function ArrayMultiply(&$arResult, $arTuple, $arTemp = array())
{
}