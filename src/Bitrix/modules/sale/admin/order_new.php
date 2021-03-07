<?php

/** @var CDBResult $rsUsers */
$rsUsers = \CUser::GetList($by2, $order2, array('ID' => $intLockUserID), array('FIELDS' => array('ID', 'LOGIN', 'NAME', 'LAST_NAME')));