<?php

/**
 * Данный класс используется для управления метаданными пользовательских свойств.
 *
 * <p>Выборки, Удаление Добавление и обновление метаданных таблицы b_user_field.</p>
 * create table b_user_field (
 * ID    int(11) not null auto_increment,
 * ENTITY_ID  varchar(50),
 * FIELD_NAME  varchar(50),
 * USER_TYPE_ID  varchar(50),
 * XML_ID    varchar(255),
 * SORT    int,
 * MULTIPLE  char(1) not null default 'N',
 * MANDATORY  char(1) not null default 'N',
 * SHOW_FILTER  char(1) not null default 'N',
 * SHOW_IN_LIST  char(1) not null default 'Y',
 * EDIT_IN_LIST  char(1) not null default 'Y',
 * IS_SEARCHABLE  char(1) not null default 'N',
 * SETTINGS  text,
 * PRIMARY KEY (ID),
 * UNIQUE ux_user_type_entity(ENTITY_ID, FIELD_NAME)
 * )
 * ------------------
 * ID
 * ENTITY_ID (example: IBLOCK_SECTION, USER ....)
 * FIELD_NAME (example: UF_EMAIL, UF_SOME_COUNTER ....)
 * SORT -- used to do check in the specified order
 * BASE_TYPE - String, Number, Integer, Enumeration, File, DateTime
 * USER_TYPE_ID
 * SETTINGS (blob) -- to store some settings which may be useful for an field instance
 * [some base settings comon to all types: mandatory or no, etc.]
 * <p>b_user_field</p>
 * <ul>
 * <li><b>ID</b> int(11) not null auto_increment
 * <li>ENTITY_ID varchar(50)
 * <li>FIELD_NAME varchar(20)
 * <li>USER_TYPE_ID varchar(50)
 * <li>XML_ID varchar(255)
 * <li>SORT int
 * <li>MULTIPLE char(1) not null default 'N'
 * <li>MANDATORY char(1) not null default 'N'
 * <li>SHOW_FILTER char(1) not null default 'N'
 * <li>SHOW_IN_LIST char(1) not null default 'Y'
 * <li>EDIT_IN_LIST char(1) not null default 'Y'
 * <li>IS_SEARCHABLE char(1) not null default 'N'
 * <li>SETTINGS text
 * <li>PRIMARY KEY (ID),
 * <li>UNIQUE ux_user_type_entity(ENTITY_ID, FIELD_NAME)
 * </ul>
 * create table b_user_field_lang (
 * USER_FIELD_ID int(11) REFERENCES b_user_field(ID),
 * LANGUAGE_ID char(2),
 * EDIT_FORM_LABEL varchar(255),
 * LIST_COLUMN_LABEL varchar(255),
 * LIST_FILTER_LABEL varchar(255),
 * ERROR_MESSAGE varchar(255),
 * HELP_MESSAGE varchar(255),
 * PRIMARY KEY (USER_FIELD_ID, LANGUAGE_ID)
 * )
 * <p>b_user_field_lang</p>
 * <ul>
 * <li><b>USER_FIELD_ID</b> int(11) REFERENCES b_user_field(ID)
 * <li><b>LANGUAGE_ID</b> char(2)
 * <li>EDIT_FORM_LABEL varchar(255)
 * <li>LIST_COLUMN_LABEL varchar(255)
 * <li>LIST_FILTER_LABEL varchar(255)
 * <li>ERROR_MESSAGE varchar(255)
 * <li>HELP_MESSAGE varchar(255)
 * <li>PRIMARY KEY (USER_FIELD_ID, LANGUAGE_ID)
 * </ul>
 * @package usertype
 * @subpackage classes
 */
class CAllUserTypeEntity extends \CDBResult
{
    //must be extended
    function CreatePropertyTables($entity_id)
    {
    }
    //must be extended
    function DropColumnSQL($strTable, $arColumns)
    {
    }
    /**
     * Функция для выборки метаданных пользовательского свойства.
     *
     * <p>Возвращает ассоциативный массив метаданных который можно передать в Update.</p>
     * @param integer $ID идентификатор свойства
     * @return array Если свойство не найдено, то возвращается false
     * @static
     */
    public static function GetByID($ID)
    {
    }
    /**
     * Функция для выборки метаданных пользовательских свойств.
     *
     * <p>Возвращает CDBResult - выборку в зависимости от фильтра и сортировки.</p>
     * <p>Параметр aSort по умолчанию имеет вид array("SORT"=>"ASC", "ID"=>"ASC").</p>
     * <p>Если в aFilter передается LANG, то дополнительно выбираются языковые сообщения.</p>
     * @param array $aSort ассоциативный массив сортировки (ID, ENTITY_ID, FIELD_NAME, SORT, USER_TYPE_ID)
     * @param array $aFilter ассоциативный массив фильтра со строгим сообветствием (<b>равно</b>) (ID, ENTITY_ID, FIELD_NAME, USER_TYPE_ID, SORT, MULTIPLE, MANDATORY, SHOW_FILTER)
     * @return CDBResult
     * @static
     */
    public static function GetList($aSort = array(), $aFilter = array())
    {
    }
    /**
     * Функция проверки корректности значений метаданных пользовательских свойств.
     *
     * <p>Вызывается в методах Add и Update для проверки правильности введенных значений.</p>
     * <p>Проверки:</p>
     * <ul>
     * <li>ENTITY_ID - обязательное
     * <li>ENTITY_ID - не более 50-ти символов
     * <li>ENTITY_ID - не должно содержать никаких символов кроме 0-9 A-Z и _
     * <li>FIELD_NAME - обязательное
     * <li>FIELD_NAME - не менее 4-х символов
     * <li>FIELD_NAME - не более 50-ти символов
     * <li>FIELD_NAME - не должно содержать никаких символов кроме 0-9 A-Z и _
     * <li>FIELD_NAME - должно начинаться на UF_
     * <li>USER_TYPE_ID - обязательное
     * <li>USER_TYPE_ID - должен быть зарегистрирован
     * </ul>
     * <p>В случае ошибки ловите исключение приложения!</p>
     * @param integer $ID - идентификатор свойства. 0 - для нового.
     * @param array $arFields метаданные свойства
     * @param bool $bCheckUserType
     * @return boolean false - если хоть одна проверка не прошла.
     */
    function CheckFields($ID, $arFields, $bCheckUserType = \true)
    {
    }
    /**
     * Функция добавляет пользовательское свойство.
     *
     * <p>Сначала вызывается метод экземпляра объекта CheckFields (т.е. $this->CheckFields($arFields) ).</p>
     * <p>Если проверка прошла успешно, выполняется проверка на существование такого поля для данной сущности.</p>
     * <p>Далее при необходимости создаются таблички вида <b>b_uts_[ENTITY_ID]</b> и <b>b_utm_[ENTITY_ID]</b>.</p>
     * <p>После чего метаданные сохраняются в БД.</p>
     * <p>И только после этого <b>изменяется стуктура таблицы b_uts_[ENTITY_ID]</b>.</p>
     * <p>Массив arFields:</p>
     * <ul>
     * <li>ENTITY_ID - сущность
     * <li>FIELD_NAME - фактически имя столбца в БД в котором будут храниться значения свойства.
     * <li>USER_TYPE_ID - тип свойства
     * <li>XML_ID - идентификатор для использования при импорте/экспорте
     * <li>SORT - порядок сортировки (по умолчанию 100)
     * <li>MULTIPLE - признак множественности Y/N (по умолчанию N)
     * <li>MANDATORY - признак обязательности ввода значения Y/N (по умолчанию N)
     * <li>SHOW_FILTER - показывать или нет в фильтре админ листа и какой тип использовать. см. ниже.
     * <li>SHOW_IN_LIST - показывать или нет в админ листе (по умолчанию Y)
     * <li>EDIT_IN_LIST - разрешать редактирование в формах, но не в API! (по умолчанию Y)
     * <li>IS_SEARCHABLE - поле участвует в поиске (по умолчанию N)
     * <li>SETTINGS - массив с настройками свойства зависимыми от типа свойства. Проходят "очистку" через обработчик типа PrepareSettings.
     * <li>EDIT_FORM_LABEL - массив языковых сообщений вида array("ru"=>"привет", "en"=>"hello")
     * <li>LIST_COLUMN_LABEL
     * <li>LIST_FILTER_LABEL
     * <li>ERROR_MESSAGE
     * <li>HELP_MESSAGE
     * </ul>
     * <p>В случае ошибки ловите исключение приложения!</p>
     * <p>Значения для SHOW_FILTER:</p>
     * <ul>
     * <li>N - не показывать
     * <li>I - точное совпадение
     * <li>E - маска
     * <li>S - подстрока
     * </ul>
     * @param array $arFields метаданные нового свойства
     * @param bool $bCheckUserType
     * @return integer - иднтификатор добавленного свойства, false - если свойство не было добавлено.
     */
    function Add($arFields, $bCheckUserType = \true)
    {
    }
    /**
     * Функция изменяет метаданные пользовательского свойства.
     *
     * <p>Надо сказать, что для скорейшего завершения разработки было решено пока не реализовывать
     * такую же гибкость как в инфоблоках (обойдемся пока без alter'ов и прочего).</p>
     * <p>Сначала вызывается метод экземпляра объекта CheckFields (т.е. $this->CheckFields($arFields) ).</p>
     * <p>После чего метаданные сохраняются в БД.</p>
     * <p>Массив arFields (только то что можно изменять):</p>
     * <ul>
     * <li>SORT - порядок сортировки
     * <li>MANDATORY - признак обязательности ввода значения Y/N
     * <li>SHOW_FILTER - признак показа в фильтре списка Y/N
     * <li>SHOW_IN_LIST - признак показа в списке Y/N
     * <li>EDIT_IN_LIST - разрешать редактирование поля в формах админки или нет Y/N
     * <li>IS_SEARCHABLE - признак поиска Y/N
     * <li>SETTINGS - массив с настройками свойства зависимыми от типа свойства. Проходят "очистку" через обработчик типа PrepareSettings.
     * <li>EDIT_FORM_LABEL - массив языковых сообщений вида array("ru"=>"привет", "en"=>"hello")
     * <li>LIST_COLUMN_LABEL
     * <li>LIST_FILTER_LABEL
     * <li>ERROR_MESSAGE
     * <li>HELP_MESSAGE
     * </ul>
     * <p>В случае ошибки ловите исключение приложения!</p>
     * @param integer $ID идентификатор свойства
     * @param array $arFields новые метаданные свойства
     * @return boolean - true в случае успешного обновления, false - в противном случае.
     */
    function Update($ID, $arFields)
    {
    }
    /**
     * Функция удаляет пользовательское свойство и все его значения.
     *
     * <p>Сначала удаляются метаданные свойства.</p>
     * <p>Затем из таблички вида <b>b_utm_[ENTITY_ID]</b> удаляются все значения множественных свойств.</p>
     * <p>После чего у таблички вида <b>b_uts_[ENTITY_ID]</b> дропается колонка.</p>
     * <p>И если это было "последнее" свойство для сущности, то дропаются сами таблички хранившие значения.</p>
     * @param integer $ID идентификатор свойства
     * @return CDBResult - результат выполнения последнего запроса функции.
     */
    function Delete($ID)
    {
    }
    /**
     * Функция удаляет ВСЕ пользовательские свойства сущности.
     *
     * <p>Сначала удаляются метаданные свойств.</p>
     * <p>Можно вызвать при удалении инфоблока например.</p>
     * <p>Затем таблички вида <b>b_utm_[ENTITY_ID]</b> и <b>b_uts_[ENTITY_ID]</b> дропаются.</p>
     * @param string $entity_id идентификатор сущности
     * @return CDBResult - результат выполнения последнего запроса функции.
     */
    function DropEntity($entity_id)
    {
    }
    /**
     * Функция Fetch.
     *
     * <p>Десериализует поле SETTINGS.</p>
     * @return array возвращает false в случае последней записи выборки.
     */
    function Fetch()
    {
    }
}
/**
 * Данный класс фактически является интерфейсной прослойкой между значениями
 * пользовательских свойств и сущностью к которой они привязаны.
 * @package usertype
 * @subpackage classes
 */
class CUserTypeManager
{
    const BASE_TYPE_INT = "int";
    const BASE_TYPE_FILE = "file";
    const BASE_TYPE_ENUM = "enum";
    const BASE_TYPE_DOUBLE = "double";
    const BASE_TYPE_DATETIME = "datetime";
    const BASE_TYPE_STRING = "string";
    /**
     * Хранит все типы пользовательских свойств.
     *
     * <p>Инициализируется при первом вызове метода GetUserType.</p>
     * @var array
     */
    var $arUserTypes = \false;
    var $arFieldsCache = array();
    var $arRightsCache = array();
    /**
     * @var null|array Stores relations of usertype ENTITY_ID to ORM entities. Aggregated by event main:onUserTypeEntityOrmMap.
     * @see CUserTypeManager::getEntityList()
     */
    protected $entityList = \null;
    function CleanCache()
    {
    }
    /**
     * Функция возвращает метаданные типа.
     *
     * <p>Если это первый вызов функции, то выполняется системное событие OnUserTypeBuildList (main).
     * Зарегистрированные обработчики должны вернуть даные описания типа. В данном случае действует правило -
     * кто последний тот и папа. (на случай если один тип зарегились обрабатывать "несколько" классов)</p>
     * <p>Без параметров функция возвращает полный список типов.<p>
     * <p>При заданном user_type_id - возвращает массив если такой тип зарегистрирован и false если нет.<p>
     * @param string|bool $user_type_id необязательный. идентификатор типа свойства.
     * @return array|boolean
     */
    function GetUserType($user_type_id = \false)
    {
    }
    function GetDBColumnType($arUserField)
    {
    }
    function getUtsDBColumnType($arUserField)
    {
    }
    function getUtmDBColumnType($arUserField)
    {
    }
    function PrepareSettings($ID, $arUserField, $bCheckUserType = \true)
    {
    }
    function OnEntityDelete($entity_id)
    {
    }
    /**
     * Функция возвращает метаданные полей определеных для сущности.
     *
     * <p>Важно! В $arUserField добалено поле ENTITY_VALUE_ID - это идентификатор экземпляра сущности
     * позволяющий отделить новые записи от старых и соответсвенно использовать значения по умолчанию.</p>
     */
    function GetUserFields($entity_id, $value_id = 0, $LANG = \false, $user_id = \false)
    {
    }
    /**
     * Replacement for getUserFields, if you are already have fetched old data
     *
     * @param      $entity_id
     * @param      $readyData
     * @param bool $LANG
     * @param bool $user_id
     * @param string $primaryIdName
     *
     * @return array
     */
    function getUserFieldsWithReadyData($entity_id, $readyData, $LANG = \false, $user_id = \false, $primaryIdName = 'VALUE_ID')
    {
    }
    function GetUserFieldValue($entity_id, $field_id, $value_id, $LANG = \false)
    {
    }
    /**
     * Aggregates entity map by event.
     * @return array [ENTITY_ID => 'SomeTable']
     */
    function getEntityList()
    {
    }
    function OnAfterFetch($arUserField, $result)
    {
    }
    function LoadMultipleValues($arUserField, $valueId)
    {
    }
    function EditFormTab($entity_id)
    {
    }
    function EditFormShowTab($entity_id, $bVarsFromForm, $ID)
    {
    }
    function EditFormAddFields($entity_id, &$arFields, array $options = \null)
    {
    }
    /**
     * Add field for filter.
     * @param int $entityId Entity id.
     * @param array $arFilterFields Array for fill.
     */
    function AdminListAddFilterFields($entityId, &$arFilterFields)
    {
    }
    function AdminListAddFilterFieldsV2($entityId, &$arFilterFields)
    {
    }
    function IsNotEmpty($value)
    {
    }
    /**
     * Add value for filter.
     * @param int $entityId Entity id.
     * @param array $arFilter Array for fill.
     */
    function AdminListAddFilter($entityId, &$arFilter)
    {
    }
    function AdminListAddFilterV2($entityId, &$arFilter, $filterId, $filterFields)
    {
    }
    function AdminListPrepareFields($entity_id, &$arFields)
    {
    }
    function AdminListAddHeaders($entity_id, &$arHeaders)
    {
    }
    function AddUserFields($entity_id, $arRes, &$row)
    {
    }
    function AddFindFields($entity_id, &$arFindFields)
    {
    }
    function AdminListShowFilter($entity_id)
    {
    }
    function ShowScript()
    {
    }
    function GetEditFormHTML($bVarsFromForm, $form_value, $arUserField)
    {
    }
    function GetFilterHTML($arUserField, $filter_name, $filter_value)
    {
    }
    /**
     * @param $arUserField
     * @param $value
     * @param CAdminListRow $row
     */
    function AddUserField($arUserField, $value, &$row)
    {
    }
    function getListView($userfield, $value)
    {
    }
    function CallUserTypeComponent($componentName, $componentTemplate, $arUserField, $arAdditionalParameters = array())
    {
    }
    /**
     * @param array $userField
     * @param array|null $additionalParameters
     * @return string|null
     */
    public function renderField(array $userField, ?array $additionalParameters = array()) : ?string
    {
    }
    function GetPublicView($arUserField, $arAdditionalParameters = array())
    {
    }
    public function getPublicText($userField)
    {
    }
    function GetPublicEdit($arUserField, $arAdditionalParameters = array())
    {
    }
    function GetSettingsHTML($arUserField, $bVarsFromForm = \false)
    {
    }
    /**
     * @param       $entity_id
     * @param       $ID
     * @param       $arFields
     * @param bool $user_id False means current user id.
     * @param bool $checkRequired Whether to check required fields.
     * @param array $requiredFields Conditionally required fields.
     * @return bool
     */
    function CheckFields($entity_id, $ID, $arFields, $user_id = \false, $checkRequired = \true, array $requiredFields = \null)
    {
    }
    /**
     * Replacement for CheckFields, if you are already have fetched old data
     *
     * @param $entity_id
     * @param $oldData
     * @param $arFields
     *
     * @return bool
     */
    function CheckFieldsWithOldData($entity_id, $oldData, $arFields)
    {
    }
    function Update($entity_id, $ID, $arFields, $user_id = \false)
    {
    }
    public function copy($entity_id, $id, $copiedId, $entityObject, $userId = \false, $ignoreList = [])
    {
    }
    function Delete($entity_id, $ID)
    {
    }
    function OnSearchIndex($entity_id, $ID)
    {
    }
    function GetRights($ENTITY_ID = \false, $ID = \false)
    {
    }
    /**
     * @param             $arUserField
     * @param null|string $fieldName
     * @param array $fieldParameters
     *
     * @return Entity\DatetimeField|Entity\FloatField|Entity\IntegerField|Entity\StringField|mixed
     * @throws Bitrix\Main\ArgumentException
     */
    public function getEntityField($arUserField, $fieldName = \null, $fieldParameters = array())
    {
    }
    /**
     * @param                    $arUserField
     * @param Entity\ScalarField $entityField
     *
     * @return Entity\ReferenceField[]
     */
    public function getEntityReferences($arUserField, \Bitrix\Main\Entity\ScalarField $entityField)
    {
    }
    protected function getUserFieldValuesByEvent(array $userFields, string $entityId, int $value) : ?array
    {
    }
    protected function updateUserFieldValuesByEvent(string $entityId, int $id, array $fields) : ?bool
    {
    }
    protected function deleteUserFieldValuesByEvent(string $entityId, int $id) : ?bool
    {
    }
}
class CUserTypeSQL
{
    var $table_alias = "BUF";
    var $entity_id = \false;
    var $user_fields = array();
    var $select = array();
    var $filter = array();
    var $order = array();
    /** @var CSQLWhere */
    var $obWhere = \false;
    function SetEntity($entity_id, $ID)
    {
    }
    function SetSelect($arSelect)
    {
    }
    function GetDistinct()
    {
    }
    function GetSelect()
    {
    }
    function GetJoin($ID)
    {
    }
    function SetOrder($arOrder)
    {
    }
    function GetOrder($field)
    {
    }
    function SetFilter($arFilter)
    {
    }
    function GetFilter()
    {
    }
}
class CUserFieldEnum
{
    function SetEnumValues($FIELD_ID, $values)
    {
    }
    function GetList($aSort = array(), $aFilter = array())
    {
    }
    function DeleteFieldEnum($FIELD_ID)
    {
    }
}