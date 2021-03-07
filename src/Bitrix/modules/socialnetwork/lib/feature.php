<?php

namespace Bitrix\Socialnetwork;

/*
create table b_sonet_features
(
  ID int not null auto_increment,
  ENTITY_TYPE char(1) not null default 'G',
  ENTITY_ID int not null,
  FEATURE varchar(50) not null,
  FEATURE_NAME varchar(250) null,
  ACTIVE char(1) not null default 'Y',
  DATE_CREATE datetime not null,
  DATE_UPDATE datetime not null,
  primary key (ID),
  unique IX_SONET_GROUP_FEATURES_1(ENTITY_TYPE, ENTITY_ID, FEATURE)
);
*/
class FeatureTable extends \Bitrix\Main\Entity\DataManager
{
    const FEATURE_ENTITY_TYPE_GROUP = 'G';
    const FEATURE_ENTITY_TYPE_USER = 'U';
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
}